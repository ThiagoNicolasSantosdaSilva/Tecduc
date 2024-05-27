<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$destinatario = "tecduc.ms@gmail.com";

$nome = $_REQUEST['name'];
$email = $_REQUEST['email'];
$cel = $_REQUEST['number'];
$assunto = $_REQUEST['assunto'];
$mensagem = $_REQUEST['msg'];

// Monta o e-mail na variável $body
$body = "===================================" . "\n";
$body .= "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body .= "===================================" . "\n\n";
$body .= "Nome: " . $nome . "\n";
$body .= "Email: " . $email . "\n";
$body .= "Celular: " . $cel . "\n"; 
$body .= "Mensagem: " . $mensagem . "\n\n";
$body .= "===================================" . "\n";

// Envia o e-mail
mail($destinatario, $assunto, $body, "From: $email\r\n");

// Redireciona para a página de obrigado
header("location:/tecduc.html");
?>
