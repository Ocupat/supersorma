php
<?php
// Include PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Dacă folosești Composer
require 'vendor/autoload.php';

// Dacă ai descărcat manual PHPMailer
// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Configurare SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Server SMTP (exemplu: Gmail)
    $mail->SMTPAuth = true;
    $mail->Username = 'radeamarian1@gmail.com'; // Adresa ta de email
    $mail->Password = 'Rmrmarma1'; // Parola ta
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Setări email
    $mail->setFrom('radeamarian1@gmail.com', 'Numele Tău');
    $mail->addAddress('radeamarian1@gmail.com', 'Destinatarul'); // Destinatar
    $mail->Subject = 'Subiectul Emailului';
    $mail->Body = 'Acesta este un email trimis cu PHPMailer.';

    // Trimite emailul
    $mail->send();
    echo 'Email trimis cu succes!';
} catch (Exception $e) {
    echo "Emailul nu a putut fi trimis. Eroare: {$mail->ErrorInfo}";
}
?>