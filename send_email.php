<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'mail.vetor256.com'; // Substitua pelo SMTP da HostGator (ex: mail.vetor256.com)
    $mail->SMTPAuth = true;
    $mail->Username = 'isaias@vetor256.com'; // Substitua pelo seu e-mail da HostGator
    $mail->Password = 'Mando452269$'; // Sua senha do e-mail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587; // Porta recomendada para SMTP

        // Configuração do remetente e destinatário
    $mail->setFrom('isaias@vetor256.com', 'Vetor256');
    $mail->addAddress('isaias@vetor256.com'); // Destinatário

    // Coletar dados do formulário
    $nome = $_POST['nome_msg'];
    $email = $_POST['email_msg'];
    $plano = $_POST['plano_msg'];
    $mensagem = $_POST['mensagem_msg'];

    // Conteúdo do e-mail
    $mail->Subject = "Novo Pedido de Orçamento - $plano";
    $mail->Body = "Nome: $nome\nEmail: $email\nPlano Escolhido: $plano\nMensagem:\n$mensagem";
    
    $mail->send();
    echo "E-mail enviado com sucesso!";
} catch (Exception $e) {
    echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
}
?>