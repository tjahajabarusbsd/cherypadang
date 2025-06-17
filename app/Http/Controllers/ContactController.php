<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'minat' => 'required',
            'pesan' => 'required',
            'g-recaptcha-response' => 'required',
        ]);

        // Verifikasi token reCAPTCHA v3
        $recaptchaResponse = $request->input('g-recaptcha-response');
        $recaptchaSecret = env('RECAPTCHA_SECRET_KEY');

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => $recaptchaSecret,
            'response' => $recaptchaResponse,
            'remoteip' => $request->ip(),
        ]);

        $recaptchaData = $response->json();

        if (!($recaptchaData['success'] ?? false) || ($recaptchaData['score'] ?? 0) < 0.5) {
            return back()->with('error', 'Verifikasi reCAPTCHA gagal. Silakan coba lagi.');
        }

        try {
            Mail::send('emails.contact', $request->all(), function ($message) use ($request) {
                $message->to('tjahajabarubsd@gmail.com')
                    ->subject('Form Kontak dari Website Chery Padang');
            });

            return back()->with('success', 'Pesan berhasil dikirim!');
        } catch (\Exception $e) {
            Log::error('Gagal kirim email: ' . $e->getMessage());
            return back()->with('error', 'Gagal mengirim email. Silakan coba lagi nanti.');
        }
    }
}