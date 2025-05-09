<?php

require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Configurar cabeçalhos para garantir que a resposta seja JSON
header('Content-Type: application/json'); 
header('Access-Control-Allow-Origin: *');

// Inicializar PHPMailer
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'mail.vetor256.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'isaias@vetor256.com';
    $mail->Password = 'Mando452269$';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('isaias@vetor256.com', 'Vetor256');
    $mail->addAddress('isaias@vetor256.com');

    if (isset($_POST['nome_msg'], $_POST['email_msg'], $_POST['plano_msg'], $_POST['mensagem_msg'])) {
        $nome = htmlspecialchars($_POST['nome_msg'], ENT_QUOTES, 'UTF-8');
        $email = filter_var($_POST['email_msg'], FILTER_SANITIZE_EMAIL);
        $plano = htmlspecialchars($_POST['plano_msg'], ENT_QUOTES, 'UTF-8');
        $mensagem = htmlspecialchars($_POST['mensagem_msg'], ENT_QUOTES, 'UTF-8');

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(["message" => "Email inválido!"]);
            exit;
        }

        $mail->Subject = "Novo Pedido de Orçamento - $plano";
        $mail->Body = "Nome: $nome\nEmail: $email\nPlano Escolhido: $plano\nMensagem:\n$mensagem";

        if ($mail->send()) {
            echo json_encode(["message" => "E-mail enviado com sucesso!"]);
        } else {
            echo json_encode(["message" => "Falha ao enviar o e-mail. Tente novamente."]);
        }
    } else {
        echo json_encode(["message" => "Dados do formulário inválidos."]);
    }

} catch (Exception $e) {
    echo json_encode(["message" => "Erro ao enviar o e-mail: {$mail->ErrorInfo}"]);
}
?>
