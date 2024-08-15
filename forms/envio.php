<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclua os arquivos do PHPMailer
require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitização e validação dos dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    // Valida o formato do email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email inválido.";
        exit;
    }

    $mail = new PHPMailer(true);
    
    try {
        // Configurações do servidor SMTP
        $mail->isSMTP();
        $mail->Host       = 'mail.tecduc.com.br'; // Altere para o seu domínio
        $mail->SMTPAuth   = true; 
        $mail->Username   = 'comercial@tecduc.com.br'; // Seu e-mail completo
        $mail->Password   = 'tms2024*'; // Sua senha
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // ou PHPMailer::ENCRYPTION_SMTPS
        $mail->Port       = 587; // ou 465

        // Destinatário
        $mail->setFrom('comercial@tecduc.com.br', 'Nome da Empresa'); // Altere se necessário
        $mail->addAddress('comercial@tecduc.com.br'); // E-mail do destinatário

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = "Contato de $nome: $assunto";
        $mail->Body    = nl2br("Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem");

        // Enviar o e-mail
        $mail->send();
        echo "Mensagem enviada com sucesso.";
    } catch (Exception $e) {
        echo "Erro ao enviar a mensagem: {$mail->ErrorInfo}";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
