<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'mail.vetor256.com'; // ou smtp.hostgator.com.br
    $mail->SMTPAuth   = true;
    $mail->Username   = 'isaias@vetor256.com'; // seu email completo
    $mail->Password   = 'Mando452269$'; // senha do email
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('isaias@vetor256.com', 'Vetor256');
    $mail->addAddress('isaias@vetor256.com'); // você mesmo
    $mail->addReplyTo($_POST['email_msg'], $_POST['nome_msg']);

    $mail->isHTML(false);
    $mail->Subject = 'Novo Orçamento do Site';
    $mail->Body    = "Nome: {$_POST['nome_msg']}\nEmail: {$_POST['email_msg']}\nPlano: {$_POST['plano_msg']}\n\nMensagem:\n{$_POST['mensagem_msg']}";

    $mail->send();
    echo "<script>alert('Email enviado com sucesso!');</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.html'>";
} catch (Exception $e) {
    echo "<script>alert('Erro ao enviar: {$mail->ErrorInfo}');</script>";
}
?>