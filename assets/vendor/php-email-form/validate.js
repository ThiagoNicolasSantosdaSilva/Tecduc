/**
* PHP Email Form Validation - v3.7
* URL: https://bootstrapmade.com/php-email-form/
* Autor: BootstrapMade.com
*/
(function () {
  "use strict";

  // Seleciona todos os formulários com a classe 'php-email-form'
  let forms = document.querySelectorAll('.php-email-form');

  // Adiciona um listener de evento de submissão para cada formulário
  forms.forEach(function(e) {
    e.addEventListener('submit', function(event) {
      // Previne o comportamento padrão de submissão do formulário
      event.preventDefault();

      let thisForm = this;

      // Obtém o valor do atributo 'action' do formulário
      let action = thisForm.getAttribute('action');
      // Obtém a chave do site reCAPTCHA do atributo 'data-recaptcha-site-key' do formulário
      let recaptcha = thisForm.getAttribute('data-recaptcha-site-key');
      
      // Verifica se a propriedade 'action' está definida
      if (!action) {
        displayError(thisForm, 'A propriedade action do formulário não está definida!');
        return;
      }

      // Exibe o indicador de carregamento e oculta as mensagens de erro e sucesso
      thisForm.querySelector('.loading').classList.add('d-block');
      thisForm.querySelector('.error-message').classList.remove('d-block');
      thisForm.querySelector('.sent-message').classList.remove('d-block');

      // Cria um novo objeto FormData com os dados do formulário
      let formData = new FormData(thisForm);

      // Verifica se o reCAPTCHA está configurado
      if (recaptcha) {
        // Verifica se a API do reCAPTCHA está disponível
        if (typeof grecaptcha !== "undefined") {
          // Prepara o reCAPTCHA para execução
          grecaptcha.ready(function() {
            try {
              // Executa o reCAPTCHA e obtém o token
              grecaptcha.execute(recaptcha, {action: 'php_email_form_submit'})
              .then(token => {
                // Adiciona o token reCAPTCHA ao formData
                formData.set('recaptcha-response', token);
                // Submete o formulário
                php_email_form_submit(thisForm, action, formData);
              });
            } catch (error) {
              // Exibe um erro se ocorrer durante a execução do reCAPTCHA
              displayError(thisForm, error);
            }
          });
        } else {
          // Exibe um erro se a API do reCAPTCHA não estiver carregada
          displayError(thisForm, 'A URL da API do reCAPTCHA não está carregada!');
        }
      } else {
        // Submete o formulário se o reCAPTCHA não estiver configurado
        php_email_form_submit(thisForm, action, formData);
      }
    });
  });

  // Função para submeter o formulário via fetch API
  function php_email_form_submit(thisForm, action, formData) {
    fetch(action, {
      method: 'POST',
      body: formData,
      headers: {'X-Requested-With': 'XMLHttpRequest'}
    })
    .then(response => {
      if (response.ok) {
        return response.text();
      } else {
        throw new Error(`${response.status} ${response.statusText} ${response.url}`);
      }
    })
    .then(data => {
      // Remove o indicador de carregamento
      thisForm.querySelector('.loading').classList.remove('d-block');
      if (data.trim() == 'OK') {
        // Exibe a mensagem de sucesso e reseta o formulário
        thisForm.querySelector('.sent-message').classList.add('d-block');
        thisForm.reset();
      } else {
        // Exibe um erro se a submissão falhar
        throw new Error(data ? data : 'A submissão do formulário falhou e nenhuma mensagem de erro foi retornada de: ' + action);
      }
    })
    .catch((error) => {
      // Exibe um erro se ocorrer durante a submissão
      displayError(thisForm, error);
    });
  }

  // Função para exibir erros
  function displayError(thisForm, error) {
    // Remove o indicador de carregamento e exibe a mensagem de erro
    thisForm.querySelector('.loading').classList.remove('d-block');
    thisForm.querySelector('.error-message').innerHTML = error;
    thisForm.querySelector('.error-message').classList.add('d-block');
  }

})();
