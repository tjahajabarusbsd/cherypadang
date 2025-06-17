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
function clean($str) {
    return htmlspecialchars(strip_tags(trim($str)));
}

// Validasi metode POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Tangkap data dan sanitasi
    $nama  = clean($_POST['nama'] ?? '');
    $email = clean($_POST['email'] ?? '');
    $minat = clean($_POST['minat'] ?? '');
    $pesan = clean($_POST['pesan'] ?? '');
    $recaptchaToken = $_POST['g-recaptcha-response'] ?? '';

    // Validasi reCAPTCHA v3
    $recaptchaSecret = $_ENV['RECAPTCHA_SECRET_KEY'];
    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaToken}");
    $response = json_decode($verify);

    if (!$response->success || $response->score < 0.5) {
        echo "<script>alert('Verifikasi reCAPTCHA gagal.'); window.history.back();</script>";
        exit;
    }

    // Kirim email
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
        $mail->Subject = "Pesan Baru dari Website Chery Padang";
        $mail->Body    = "
            <strong>Nama:</strong> $nama<br>
            <strong>Email:</strong> $email<br>
            <strong>Minat:</strong> $minat<br>
            <strong>Pesan:</strong><br>$pesan
        ";

        $mail->send();
        echo "<script>alert('Pesan berhasil dikirim.'); window.location.href='index.html';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Gagal mengirim pesan: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
} else {
    echo "Akses tidak diizinkan.";
}
