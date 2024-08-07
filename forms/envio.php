<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $assunto = htmlspecialchars($_POST['assunto']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    $recaptchaResponse = $_POST['recaptcha-response'];

    // Verifica o reCAPTCHA
    $recaptchaSecret = 'YOUR_RECAPTCHA_SECRET_KEY'; // Substitua pela sua chave secreta do reCAPTCHA
    $recaptchaURL = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptchaData = [
        'secret' => $recaptchaSecret,
        'response' => $recaptchaResponse
    ];
    $recaptchaOptions = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($recaptchaData)
        ]
    ];
    $recaptchaContext = stream_context_create($recaptchaOptions);
    $recaptchaResult = file_get_contents($recaptchaURL, false, $recaptchaContext);
    $recaptchaResult = json_decode($recaptchaResult, true);

    if ($recaptchaResult['success'] == false) {
        echo 'Erro ao validar o reCAPTCHA!';
        exit;
    }

    if ($email) {
        $to = "seuemail@dominio.com"; // Substitua pelo seu email
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $email_subject = "Contato de: $nome - $assunto";
        $email_body = "
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

        if (mail($to, $email_subject, $email_body, $headers)) {
            echo 'OK';
        } else {
            echo 'Erro ao enviar a mensagem!';
        }
    } else {
        echo 'Email inválido.';
    }
} else {
    echo 'Método de requisição inválido.';
}
?>
