<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar e validar os dados do formulário
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $assunto = isset($_POST['assunto']) ? trim($_POST['assunto']) : '';
    $mensagem = isset($_POST['mensagem']) ? trim($_POST['mensagem']) : '';

    $erros = [];

    // Validar e filtrar os dados
    if (empty($nome)) {
        $erros[] = "O campo nome é obrigatório.";
    } else {
        $nome = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
    }

    if (empty($email)) {
        $erros[] = "O campo email é obrigatório.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "O email informado não é válido.";
    } else {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    if (empty($assunto)) {
        $erros[] = "O campo assunto é obrigatório.";
    } else {
        $assunto = htmlspecialchars($assunto, ENT_QUOTES, 'UTF-8');
    }

    if (empty($mensagem)) {
        $erros[] = "O campo mensagem é obrigatório.";
    } else {
        $mensagem = htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8');
    }

    // Se não houver erros, envia o email
    if (empty($erros)) {
        // Configurações do email
        $para = "comercial@tecduc.com.br";
        $headers = "From: " . str_replace(array("\r", "\n"), '', $email) . "\r\n";
        $headers .= "Reply-To: " . str_replace(array("\r", "\n"), '', $email) . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        // Conteúdo do email
        $conteudo = "<html><body>";
        $conteudo .= "<h2>Formulário de Contato</h2>";
        $conteudo .= "<p><strong>Nome: </strong>$nome</p>";
        $conteudo .= "<p><strong>Email: </strong>$email</p>";
        $conteudo .= "<p><strong>Assunto: </strong>$assunto</p>";
        $conteudo .= "<p><strong>Mensagem: </strong>$mensagem</p>";
        $conteudo .= "</body></html>";

        // Enviar o email
        if (mail($para, $assunto, $conteudo, $headers)) {
            echo "Email enviado com sucesso!";
        } else {
            echo "Erro ao enviar o email. Tente novamente mais tarde.";
        }
    } else {
        // Exibir erros
        foreach ($erros as $erro) {
            echo "<p>$erro</p>";
        }
    }
} else {
    echo "Método de requisição inválido.";
}
?>
