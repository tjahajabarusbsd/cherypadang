<?php
// Load Composer autoload untuk dotenv saja
require __DIR__ . '/vendor/autoload.php';

// Load PHPMailer manual (karena tidak pakai Composer)
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Fungsi sanitasi
function clean($str)
{
    return htmlspecialchars(strip_tags(trim($str)));
}

// Validasi metode POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tipe_form = $_POST['tipe_form'] ?? '';

    // Ambil data umum
    $nama   = clean($_POST['nama'] ?? '');
    $phone  = clean($_POST['phone'] ?? '');
    $email  = clean($_POST['email'] ?? '');
    $recaptchaToken = $_POST['g-recaptcha-response'] ?? '';

    // Validasi nomor HP
    if (empty($phone) || !preg_match('/^[0-9]{8,15}$/', $phone)) {
        exit("<script>alert('Nomor telepon tidak valid.'); window.history.back();</script>");
    }

    // Validasi reCAPTCHA v3
    $recaptchaSecret = $_ENV['RECAPTCHA_SECRET_KEY'];
    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaToken}");
    $response = json_decode($verify);

    if (!$response->success || $response->score < 0.5) {
        echo "<script>alert('Verifikasi reCAPTCHA gagal.'); window.history.back();</script>";
        exit;
    }

    // Siapkan isi email berdasarkan form
    if ($tipe_form === 'kontak') {
        $minat = clean($_POST['minat'] ?? '');
        $pesan = clean($_POST['pesan'] ?? '');

        $subject = "Pesan Baru dari Form Kontak - Chery Padang";
        $body = "
            <strong>Form:</strong> Hubungi Kami<br>
            <strong>Nama:</strong> $nama<br>
            <strong>Telepon:</strong> $phone<br>
            <strong>Email:</strong> $email<br>
            <strong>Minat:</strong> $minat<br>
            <strong>Pesan:</strong><br>$pesan
        ";
    } elseif ($tipe_form === 'testdrive') {
        $tanggal = clean($_POST['tanggal_testdrive'] ?? '');
        $model   = clean($_POST['model'] ?? '');
        $pesan   = clean($_POST['pesan'] ?? '');

        $subject = "Permintaan Test Drive Baru - Chery Padang";
        $body = "
            <strong>Form:</strong> Test Drive<br>
            <strong>Nama:</strong> $nama<br>
            <strong>Telepon:</strong> $phone<br>
            <strong>Email:</strong> $email<br>
            <strong>Model Chery:</strong> $model<br>
            <strong>Tanggal Test Drive:</strong> $tanggal<br>
            <strong>Pesan Tambahan:</strong><br>$pesan
        ";
    } else {
        exit("<script>alert('Form tidak dikenali.'); window.history.back();</script>");
    }

    // Kirim email dengan PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['MAIL_USERNAME'];
        $mail->Password   = $_ENV['MAIL_PASSWORD'];
        $mail->Port       = $_ENV['MAIL_PORT'];
        $mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];

        $mail->setFrom($_ENV['MAIL_USERNAME'], 'Website Chery Padang');
        $mail->addAddress($_ENV['MAIL_RECIPIENT']);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
        echo "<script>alert('Terima kasih, data Anda berhasil dikirim.'); window.location.href='/';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Gagal mengirim: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
} else {
    echo "Akses tidak diizinkan.";
}