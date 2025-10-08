<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.titan.email';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'contato@vetor256.com'; // seu email completo
    $mail->Password   = 'Vetor256Empresa@';     // senha do Titan
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // conexão segura SSL
    $mail->Port       = 465; // porta SSL recomendada

    $mail->setFrom('contato@vetor256.com', 'Vetor256');
    $mail->addAddress('contato@vetor256.com'); // destinatário
    $mail->addReplyTo($_POST['email_msg'], $_POST['nome_msg']);

    $mail->isHTML(false);
    $mail->Subject = 'Novo Orçamento do Site';
    $mail->Body    = "Nome: {$_POST['nome_msg']}\nEmail: {$_POST['email_msg']}\nPlano: {$_POST['plano_msg']}\n\nMensagem:\n{$_POST['mensagem_msg']}";

    $mail->send();
    echo "<script>alert('Email enviado com sucesso!');</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.html'>";
} catch (Exception $e) {
    echo "<pre>Erro ao enviar: {$mail->ErrorInfo}</pre>";
}
?>