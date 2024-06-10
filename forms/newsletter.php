<?php
  /**
  * Requer a biblioteca "PHP Email Form"
  * A biblioteca "PHP Email Form" está disponível apenas na versão pro do template
  * A biblioteca deve ser carregada em: vendor/php-email-form/php-email-form.php
  * Para mais informações e ajuda: https://bootstrapmade.com/php-email-form/
  */

  // Substitua contact@example.com pelo seu endereço de e-mail real de recebimento
  $receiving_email_address = 'contact@example.com';

  // Verifica se o arquivo da biblioteca existe
  if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    // Inclui a biblioteca
    include($php_email_form);
  } else {
    // Termina o script se a biblioteca não puder ser carregada
    die('Não foi possível carregar a biblioteca "PHP Email Form"!');
  }

  // Cria uma nova instância do formulário de email
  $contact = new PHP_Email_Form;
  // Habilita o envio de email via AJAX
  $contact->ajax = true;
  
  // Define o endereço de email de destino
  $contact->to = $receiving_email_address;
  // Define o nome do remetente a partir do campo "name" do formulário
  $contact->from_name = $_POST['name'];
  // Define o email do remetente a partir do campo "email" do formulário
  $contact->from_email = $_POST['email'];
  // Define o assunto do email
  $contact->subject = "Nova Inscrição: " . $_POST['email'];

  // Descomente o código abaixo se você quiser usar SMTP para enviar emails. É necessário inserir as credenciais corretas de SMTP
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // Adiciona a mensagem ao email
  $contact->add_message($_POST['email'], 'Email');

  // Envia o email e exibe o resultado
  echo $contact->send();
?>
