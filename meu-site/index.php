<?php include 'includes/header.php'; ?>

<main>

  <!-- Seção Hero -->
  <section class="hero">
    <div class="hero-content">
      <h1>Tecduc Manutenção e Serviços</h1>
      <p>
        Soluções inteligentes para ambientes industriais em constante
        <span class="typed-text"></span><span class="cursor" aria-hidden="true">|</span>
      </p>
      <a href="sobre.php" class="saiba-mais-btn" role="button">Saiba mais</a>
    </div>
  </section>

  <!-- Seção Serviços com Carrossel -->
  <section class="services-section" aria-label="Serviços oferecidos">
    <div class="carousel-wrapper">
      <div class="services-container" id="carousel">
        <!-- Cada card de serviço -->
        <article class="service-card" tabindex="0" role="group" aria-labelledby="servico1-titulo">
          <i class="fas fa-fire-alt" aria-hidden="true"></i>
          <h3 id="servico1-titulo">Isolamento Térmico</h3>
          <p>Proteção eficiente contra variações extremas de temperatura.</p>
          <a href="#" role="button">Saiba mais</a>
        </article>

        <article class="service-card" tabindex="0" role="group" aria-labelledby="servico2-titulo">
          <i class="fas fa-paint-roller" aria-hidden="true"></i>
          <h3 id="servico2-titulo">Pintura</h3>
          <p>Acabamentos profissionais com alta durabilidade e proteção.</p>
          <a href="#" role="button">Saiba mais</a>
        </article>

        <article class="service-card" tabindex="0" role="group" aria-labelledby="servico3-titulo">
          <i class="fas fa-mountain" aria-hidden="true"></i>
          <h3 id="servico3-titulo">Alpinismo Industrial</h3>
          <p>Acesso em altura com segurança para serviços complexos.</p>
          <a href="#" role="button">Saiba mais</a>
        </article>

        <article class="service-card" tabindex="0" role="group" aria-labelledby="servico4-titulo">
          <i class="fas fa-search-plus" aria-hidden="true"></i>
          <h3 id="servico4-titulo">Inspeção de Pintura</h3>
          <p>Garantia da qualidade em cada etapa do processo de pintura.</p>
          <a href="#" role="button">Saiba mais</a>
        </article>

        <article class="service-card" tabindex="0" role="group" aria-labelledby="servico5-titulo">
          <i class="fas fa-tools" aria-hidden="true"></i>
          <h3 id="servico5-titulo">Equipamentos</h3>
          <p>Manutenção e operação de máquinas industriais críticas.</p>
          <a href="#" role="button">Saiba mais</a>
        </article>

        <article class="service-card" tabindex="0" role="group" aria-labelledby="servico6-titulo">
          <i class="fas fa-plus" aria-hidden="true"></i>
          <h3 id="servico6-titulo">Outro Serviço</h3>
          <p>Descrição futura ou espaço reservado para novos serviços.</p>
          <a href="#" role="button">Saiba mais</a>
        </article>
      </div>
    </div>
  </section>

  <!-- Seção Quem Somos -->
  <section class="quem-somos" aria-labelledby="quem-somos-titulo">
    <div class="conteudo">
      <div class="imagem">
        <img src="assets/img/empresa.jpg" alt="Imagem ilustrativa da empresa Tecduc">
      </div>
      <div class="texto">
        <h2 id="quem-somos-titulo">Sobre a Empresa</h2>
        <p>
          A TecDuc é uma empresa especializada em soluções tecnológicas e educacionais. Atuamos com desenvolvimento de sites, sistemas personalizados, consultorias em TI, além de treinamentos e cursos voltados para capacitação profissional.
        </p>
        <p>
          Nosso objetivo é unir inovação, qualidade e acessibilidade para transformar ideias em realidade e preparar pessoas e negócios para o futuro.
        </p>
        <a href="sobre.php" class="btn-quem-somos" role="button">Quem Somos</a>
      </div>
    </div>
  </section>

  <!-- Seção Nossos Serviços em Grid -->
  <section class="servicos" aria-label="Lista de serviços">
    <h2>Nossos Serviços</h2>
    <div class="servicos-grid">
      <a href="#" class="card-servico" role="button">Isolamento Térmico</a>
      <a href="#" class="card-servico" role="button">Pintura</a>
      <a href="#" class="card-servico" role="button">Caldeiraria</a>
      <a href="#" class="card-servico" role="button">Inspeção de Pintura</a>
      <a href="#" class="card-servico" role="button">Limpeza Pós-Obra</a>
      <a href="#" class="card-servico" role="button">Serviços Prediais</a>
      <a href="#" class="card-servico" role="button">Inspeção de Equipamentos</a>
      <a href="#" class="card-servico" role="button">Alpinismo / Resgate</a>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>