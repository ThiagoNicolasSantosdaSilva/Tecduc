<footer style="padding: 20px; text-align: center; background-color: #f0f0f0;">
  <p>&copy; <?php echo date('Y'); ?> - Todos os direitos reservados</p>
</footer>

<div class="menu-radial">
  <button class="radial-toggle" onclick="toggleRadialMenu()">☰</button>
  <div class="radial-icons">
    <a href="https://wa.me/5511999999999" target="_blank" class="icon radial whatsapp" title="WhatsApp">
      <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg" alt="WhatsApp">
    </a>
    <a href="https://www.linkedin.com/in/seulinkedin" target="_blank" class="icon radial linkedin" title="LinkedIn">
      <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/linkedin.svg" alt="LinkedIn">
    </a>
    <a href="mailto:seuemail@exemplo.com" class="icon radial email" title="E-mail">
      <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/gmail.svg" alt="Email">
    </a>
  </div>
</div>
<button onclick="voltarAoTopo()" id="btn-topo" title="Voltar ao topo">↑</button>  
<!-- Cookie Consent Pop-up -->
<div id="cookie-consent" class="cookie-consent">
  <div class="cookie-card">
    <button class="close-btn" aria-label="Fechar aviso">&times;</button>
    <h3>Gerenciar Consentimento</h3>
    <p>
      Para fornecer as melhores experiências, usamos tecnologias como cookies para armazenar e/ou acessar informações do dispositivo. 
      O consentimento para essas tecnologias nos permitirá processar dados como comportamento de navegação ou IDs exclusivos neste site. 
      Não consentir ou retirar o consentimento pode afetar negativamente certos recursos e funções.
    </p>
    <div class="btn-group">
      <button id="accept-btn">Aceitar</button>
      <button id="deny-btn">Negar</button>
      <button id="later-btn">Mais tarde</button>
    </div>
    <p class="privacy-text">
      <a href="pagina-de-termos.html" target="_blank" rel="noopener noreferrer">Termos e Política de Privacidade</a>
    </p>
  </div>
</div>

<style>
  /* Container do pop-up fixo no canto */
  #cookie-consent.cookie-consent {
    position: fixed;
    bottom: 20px;
    right: 20px;
    max-width: 320px;
    background: #222;
    color: #eee;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.5);
    font-family: Arial, sans-serif;
    z-index: 9999;
    animation: slideUp 0.5s ease forwards;
  }

  /* Card interno */
  .cookie-card {
    padding: 20px 25px 15px 25px;
    position: relative;
    text-align: center;
  }

  /* Título */
  .cookie-card h3 {
    margin-bottom: 15px;
    font-size: 18px;
    font-weight: bold;
    color: #4CAF50; /* verde */
  }

  /* Texto do aviso */
  .cookie-card p {
    font-size: 13px;
    line-height: 1.4;
    margin-bottom: 20px;
    color: #ccc;
  }

  /* Botões grupo */
  .btn-group {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-bottom: 15px;
  }

  /* Botões */
  .btn-group button {
    background-color: #4CAF50;
    border: none;
    color: white;
    font-size: 13px;
    padding: 8px 14px;
    border-radius: 6px;
    cursor: pointer;
    flex: 1;
    transition: background-color 0.3s ease;
  }

  .btn-group button#deny-btn {
    background-color: #a94442; /* vermelho escuro */
  }

  .btn-group button#later-btn {
    background-color: #888; /* cinza */
  }

  .btn-group button:hover {
    filter: brightness(1.1);
  }

  /* Link termos e política */
  .privacy-text {
    font-size: 11px;
    color: #999;
  }

  .privacy-text a {
    color: #ccc;
    text-decoration: underline;
  }

  .privacy-text a:hover {
    color: #4CAF50;
  }

  /* Botão fechar no canto superior direito do card */
  .close-btn {
    position: absolute;
    top: 8px;
    right: 8px;
    background: transparent;
    border: none;
    font-size: 22px;
    color: #aaa;
    cursor: pointer;
    transition: color 0.3s ease;
  }

  .close-btn:hover {
    color: white;
  }

  /* Animação entrada */
  @keyframes slideUp {
    from {
      opacity: 0;
      transform: translateY(100%);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<script>
  // Função para esconder o pop-up
  function hideConsent() {
    const consent = document.getElementById('cookie-consent');
    consent.style.display = 'none';
  }

  // Verifica se já existe resposta no localStorage
  const consentGiven = localStorage.getItem('cookieConsent');

  // Se já respondeu, não mostra o pop-up
  if (!consentGiven) {
    document.getElementById('cookie-consent').style.display = 'block';
  } else {
    hideConsent();
  }

  // Botões
  document.querySelector('#accept-btn').addEventListener('click', () => {
    localStorage.setItem('cookieConsent', 'accepted');
    hideConsent();
    // Aqui você pode adicionar código para ativar cookies, scripts etc.
  });

  document.querySelector('#deny-btn').addEventListener('click', () => {
    localStorage.setItem('cookieConsent', 'denied');
    hideConsent();
    // Aqui você pode desabilitar cookies não essenciais
  });

  document.querySelector('#later-btn').addEventListener('click', () => {
    // Só fecha, não salva resposta para perguntar depois
    hideConsent();
  });

  document.querySelector('.close-btn').addEventListener('click', () => {
    // Fechar o pop-up, mas perguntar novamente na próxima visita
    hideConsent();
  });
</script>

</body>
</html>