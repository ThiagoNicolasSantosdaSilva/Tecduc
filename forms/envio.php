<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o método de requisição é POST
    $nome = htmlspecialchars($_POST['nome']); // Sanitiza o valor do campo 'nome'
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); // Valida e sanitiza o valor do campo 'email'
    $assunto = htmlspecialchars($_POST['assunto']); // Sanitiza o valor do campo 'assunto'
    $mensagem = htmlspecialchars($_POST['mensagem']); // Sanitiza o valor do campo 'mensagem'

    if ($email) { // Verifica se o email é válido
        $to = "profissional.thiagonicolas@gmail.com"; // Substitua pelo seu email
        $headers = "From: " . $email . "\r\n"; // Define o cabeçalho 'From' do email
        $headers .= "Reply-To: " . $email . "\r\n"; // Define o cabeçalho 'Reply-To' do email
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n"; // Define o cabeçalho 'Content-Type' do email

        $email_subject = "Contato de: $nome - $assunto"; // Define o assunto do email
        $email_body = " // Cria o corpo do email em formato HTML
            <html>
            <head>
                <title>$assunto</title>
            </head>
            <body>
                <p><strong>Nome:</strong> $nome</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Assunto:</strong> $assunto</p>
                <p><strong>Mensagem:</strong></p>
                <p>$mensagem</p>
            </body>
            </html>
        ";

        if (mail($to, $email_subject, $email_body, $headers)) { // Envia o email e verifica se foi bem-sucedido
            echo "Sua Menssagem foi enviada com sucesso. Obrigado!"; // Exibe mensagem de sucesso
        } else {
            echo "Erro ao enviar a Menssagem!!"; // Exibe mensagem de erro ao enviar
        }
    } else {
        echo "Email inválido."; // Exibe mensagem de erro se o email for inválido
    }
} else {
    echo "Método de requisição inválido."; // Exibe mensagem de erro se o método de requisição não for POST
}
?>
    