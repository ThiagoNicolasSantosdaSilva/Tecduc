<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário
    $nome = strip_tags(trim($_POST["nome"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $assunto = strip_tags(trim($_POST["assunto"]));
    $mensagem = trim($_POST["mensagem"]);

    // Verifica os dados
    if (empty($nome) || empty($assunto) || empty($mensagem) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Envia uma resposta de erro
        echo "Preencha todos os campos e forneça um email válido.";
        exit;
    }

    // Configurações do email
    $to = "profissional.thiagonicolas@gmail.com"; // Substitua pelo seu endereço de email
    $subject = "Nova mensagem de contato: $assunto";
    $email_content = "Nome: $nome\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Mensagem:\n$mensagem\n";
    $email_headers = "From: $nome <$email>";

    // Envia o email
    if (mail($to, $subject, $email_content, $email_headers)) {
        // Envia uma resposta de sucesso
        echo "OK";
    } else {
        // Envia uma resposta de erro
        echo "Ocorreu um problema ao enviar a mensagem. Tente novamente mais tarde.";
    }
} else {
    // Responde com um erro se o formulário não for submetido corretamente
    echo "Houve um problema com seu envio, por favor tente novamente.";
}
?>
