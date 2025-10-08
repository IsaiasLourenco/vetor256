<?php
$nome = $_POST['nome_msg'];
$email = $_POST['email_msg'];
$plano = $_POST['plano_msg'];
$mensagem = $_POST['mensagem_msg'];
$assunto = 'Novo Orçamento do Site';

// Email que vai receber a mensagem (você)
$destinatario = 'isaias@vetor256.com';

$conteudo = "Nome: $nome\r\nEmail: $email\r\nPlano Escolhido: $plano\r\n\r\nMensagem: $mensagem\r\n";

$cabecalhos = "From: $email\r\n"; // Quem está enviando
$cabecalhos .= "Reply-To: $email\r\n";
$cabecalhos .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Envia para você
mail($destinatario, $assunto, $conteudo, $cabecalhos);
?>

<script>
  alert('Email enviado com sucesso!');
</script>
<meta http-equiv="refresh" content="0; url=index.html">