<?php
// Importar as classes 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Carregar o autoloader do composer
require 'vendor/autoload.php';
// Instância da classe
$mail = new PHPMailer(true);
try {
  // Configurações do servidor
  $mail->isSMTP();        //Devine o uso de SMTP no envio
  $mail->SMTPAuth = true; //Habilita a autenticação SMTP
  $mail->Username   = 'nomedaconta@gmail.com';
  $mail->Password   = 'senha';
  // Criptografia do envio SSL também é aceito
  $mail->SMTPSecure = 'tls';
  // Informações específicadas pelo Google
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  // Define o remetente
  $mail->setFrom('nomedaconta@gmail.com', 'Nome do Remetente');
  // Define o destinatário
  $mail->addAddress('destinatario@email.com', 'Destinatário');
  // Conteúdo da mensagem
  $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
  $mail->Subject = 'Assunto';
  $mail->Body    = 'Este é o corpo da mensagem <b>Olá em negrito!</b>';
  $mail->AltBody = 'Este é o cortpo da mensagem para clientes de e-mail que não reconhecem HTML';
  // Enviar
  $mail->send();
  echo 'A mensagem foi enviada!';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}