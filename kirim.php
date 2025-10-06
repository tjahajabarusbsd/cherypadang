<?php
// Load Composer autoload untuk dotenv saja
// require __DIR__ . '/vendor/autoload.php';

// Load PHPMailer manual (karena tidak pakai Composer)
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

define('MAIL_HOST', 'mail.cherypadang.id');
define('MAIL_USERNAME', 'pengunjung.web@cherypadang.id');
define('MAIL_PASSWORD', 'YamahaAerox155!');
define('MAIL_PORT', 587);
define('MAIL_ENCRYPTION', 'tls');
define('RECAPTCHA_SECRET_KEY', '6LdQ310rAAAAAFUV84GeVG69uJnFp9PpaCa84fER');
define('MAIL_RECIPIENT', 'lily.kurniawati@cherypadang.id');

// Load .env
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// Fungsi sanitasi
function clean($str)
{
    return htmlspecialchars(strip_tags(trim($str)));
}

header('Content-Type: application/json');

// Validasi metode POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data umum
    $nama   = clean($_POST['nama'] ?? '');
    $phone  = clean($_POST['phone'] ?? '');
    $model  = clean($_POST['model'] ?? '');
    $message  = clean($_POST['message'] ?? '');
    $recaptchaToken = $_POST['g-recaptcha-response'] ?? '';

    // Validasi nomor HP
    if (empty($phone) || !preg_match('/^(08|628)[0-9]{8,12}$/', $phone)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Nomor telepon tidak valid.'
        ]);

        exit;
    }

    // Validasi reCAPTCHA v3
    $recaptchaSecret = RECAPTCHA_SECRET_KEY;
    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaToken}");
    $response = json_decode($verify);

    if (!$response->success || $response->score < 0.5) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Verifikasi reCAPTCHA gagal.'
        ]);

        exit;
    }

    // Siapkan isi email berdasarkan form
    $subject = "Pesan Baru dari Form Kontak - Chery Padang";
    $body = "
            <strong>Form:</strong> Test Drive<br>
            <strong>Nama:</strong> $nama<br>
            <strong>Telepon:</strong> $phone<br>
            <strong>Test Drive:</strong> $model<br>
            <strong>Pesan:</strong> $message
        ";

    // Kirim email dengan PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = MAIL_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = MAIL_USERNAME;
        $mail->Password   = MAIL_PASSWORD;
        $mail->Port       = MAIL_PORT;
        $mail->SMTPSecure = MAIL_ENCRYPTION;

        $mail->setFrom(MAIL_USERNAME, 'Website Chery Padang');
        $mail->addAddress('lily.kurniawati@cherypadang.id', 'Lily Kurniawati');
        $mail->addAddress('customercare@cherypadang.id', 'Customercare Chery Padang');

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();

        echo json_encode([
            'status' => 'success',
            'message' => 'Terima kasih, data Anda berhasil dikirim.'
        ]);

        exit;
    } catch (Exception $e) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Gagal mengirim: ' . $mail->ErrorInfo
        ]);

        exit;
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Akses tidak diizinkan.'
    ]);
}