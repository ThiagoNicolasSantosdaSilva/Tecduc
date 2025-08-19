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

  <section class="services-section" aria-label="Serviços oferecidos">
    <div class="container">
      <!-- Título da seção -->
      <h2 class="section-title">Nossos Serviços</h2>
      <!-- Texto introdutório -->
      <p class="section-intro">Oferecemos soluções completas para indústrias e empresas, garantindo qualidade, segurança e eficiência em cada serviço prestado.</p>

      <div class="services-grid">

        <article class="service-card" tabindex="0" role="group" aria-labelledby="servico1-titulo">
          <i class="fas fa-fire-alt" aria-hidden="true"></i>
          <h3 id="servico1-titulo">Isolamento Térmico</h3>
          <p>Soluções eficientes para retenção térmica e proteção industrial.</p>
          <a href="#" role="button">Saiba Mais</a>
        </article>

        <article class="service-card" tabindex="0" role="group" aria-labelledby="servico2-titulo">
          <i class="fas fa-paint-roller" aria-hidden="true"></i>
          <h3 id="servico2-titulo">Pintura Industrial</h3>
          <p>Pintura de alta durabilidade para ambientes industriais e prediais.</p>
          <a href="#" role="button">Saiba Mais</a>
        </article>

        <article class="service-card" tabindex="0" role="group" aria-labelledby="servico3-titulo">
          <i class="fas fa-industry" aria-hidden="true"></i>
          <h3 id="servico3-titulo">Caldeiraria</h3>
          <p>Fabricação e manutenção de estruturas metálicas seguras.</p>
          <a href="#" role="button">Saiba Mais</a>
        </article>

        <article class="service-card" tabindex="0" role="group" aria-labelledby="servico4-titulo">
          <i class="fas fa-search-plus" aria-hidden="true"></i>
          <h3 id="servico4-titulo">Inspeção de Pintura</h3>
          <p>Controle de qualidade para máxima durabilidade dos revestimentos.</p>
          <a href="#" role="button">Saiba Mais</a>
        </article>

        <article class="service-card" tabindex="0" role="group" aria-labelledby="servico5-titulo">
          <i class="fas fa-broom" aria-hidden="true"></i>
          <h3 id="servico5-titulo">Limpeza Pós-Obra</h3>
          <p>Organização e higienização completa após reformas e manutenções.</p>
          <a href="#" role="button">Saiba Mais</a>
        </article>

        <article class="service-card" tabindex="0" role="group" aria-labelledby="servico6-titulo">
          <i class="fas fa-tools" aria-hidden="true"></i>
          <h3 id="servico6-titulo">Inspeção de Equipamentos</h3>
          <p>Verificação técnica para garantir segurança e confiabilidade.</p>
          <a href="#" role="button">Saiba Mais</a>
        </article>

        <article class="service-card" tabindex="0" role="group" aria-labelledby="servico7-titulo">
          <i class="fas fa-mountain" aria-hidden="true"></i>
          <h3 id="servico7-titulo">Alpinismo / Resgate</h3>
          <p>Serviços em altura com equipe especializada em acesso por cordas.</p>
          <a href="#" role="button">Saiba Mais</a>
        </article>

        <article class="service-card" tabindex="0" role="group" aria-labelledby="servico8-titulo">
          <i class="fas fa-hammer" aria-hidden="true"></i>
          <h3 id="servico8-titulo">Manutenção Geral</h3>
          <p>Serviços de manutenção preventiva e corretiva para indústrias.</p>
          <a href="#" role="button">Saiba Mais</a>
        </article>

      </div>
    </div>

    <style>
      .services-section {
        background-color: #fff;
        padding: 80px 30px;
      }

      /* Container centraliza todo o conteúdo */
      .container {
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
        /* Centraliza título, texto e grid */
      }

      .section-title {
        font-size: 2.8rem;
        color: #222;
        margin-bottom: 20px;
      }

      .section-intro {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 60px;
        line-height: 1.6;
      }

      .services-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
      }

      @media (max-width: 992px) {
        .services-grid {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      @media (max-width: 576px) {
        .services-grid {
          grid-template-columns: 1fr;
        }
      }

      .service-card {
        background-color: #f8f8f8;
        border-radius: 14px;
        padding: 28px 20px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
      }

      .service-card:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
      }

      .service-card i {
        font-size: 40px;
        color: #4caf50;
        margin-bottom: 18px;
      }

      .service-card h3 {
        font-size: 22px;
        margin-bottom: 12px;
        color: #222;
      }

      .service-card p {
        font-size: 15px;
        margin-bottom: 18px;
        color: #555;
        line-height: 1.5;
      }

      .service-card a {
        display: inline-block;
        padding: 10px 18px;
        background-color: #4caf50;
        color: #fff;
        font-weight: 600;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
      }

      .service-card a:hover {
        background-color: #388e3c;
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(56, 142, 60, 0.3);
      }
    </style>
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
          A TecDuc é especializada em soluções industriais, oferecendo serviços de manutenção, inspeção e treinamentos técnicos.
        </p>
        <p>
          Nosso objetivo é unir inovação, qualidade e acessibilidade para transformar ideias em realidade e preparar pessoas e negócios para o futuro.
        </p>
        <a href="sobre.php" class="btn-quem-somos" role="button">Quem Somos</a>
      </div>
    </div>
  </section>

  <section class="partners-equipment">
    <div class="container">

      <!-- Empresas Parceiras -->
      <div class="partners">
        <h2 class="section-title">Empresas que Atendemos</h2>
        <p class="section-intro">Atuamos junto a grandes indústrias, garantindo qualidade, eficiência e segurança em cada projeto.</p>

        <div class="partners-logos">
          <div class="partner-card">
            <img src="assets/img/logo/arlanxeo.svg" alt="Arlanxeo Brasil">
          </div>
          <div class="partner-card">
            <img src="https://dummyimage.com/220x100/cccccc/000000.png&text=Empresa+2" alt="Empresa 2">
          </div>
          <div class="partner-card">
            <img src="https://dummyimage.com/220x100/cccccc/000000.png&text=Empresa+3" alt="Empresa 3">
          </div>
          <div class="partner-card">
            <img src="https://dummyimage.com/220x100/cccccc/000000.png&text=Empresa+4" alt="Empresa 4">
          </div>
        </div>
      </div>

      <!-- Locação de Equipamentos -->
      <div class="equipments">
        <h2 class="section-title">Locação de Equipamentos</h2>
        <p class="section-intro">Oferecemos equipamentos modernos e seguros para inspeção industrial e serviços especializados.</p>

        <div class="equipment-grid">
          <div class="equipment-card">
            <i class="fas fa-search"></i>
            <h3>Equipamentos de Inspeção</h3>
            <p>Ferramentas avançadas para inspeção de qualidade, medição e análise de processos industriais.</p>
          </div>
          <div class="equipment-card">
            <i class="fas fa-cogs"></i>
            <h3>Máquinas de Jato</h3>
            <p>Equipamentos para jateamento e preparação de superfícies com máxima eficiência e segurança.</p>
          </div>
          <div class="equipment-card">
            <i class="fas fa-tools"></i>
            <h3>Ferramentas Elétricas</h3>
            <p>Variedade de ferramentas para manutenção e reparos industriais, prontas para locação.</p>
          </div>
          <div class="equipment-card">
            <i class="fas fa-lift"></i>
            <h3>Plataformas Elevatórias</h3>
            <p>Equipamentos seguros para trabalhos em altura, oferecendo mobilidade e estabilidade.</p>
          </div>
        </div>
      </div>


    </div>

    <style>
      .partners-equipment {
        background: #f9f9f9;
        padding: 80px 20px;
      }

      .partners-equipment .container {
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
      }

      .section-title {
        font-size: 2.5rem;
        margin-bottom: 15px;
        color: #222;
      }

      .section-intro {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 50px;
      }

      /* Logos de empresas */
      .partners-logos {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: center;
        margin-bottom: 80px;
      }

      .partner-card {
        display: flex;
        justify-content: center;
        /* centraliza horizontalmente */
        align-items: center;
        /* centraliza verticalmente, se houver altura definida */
        padding: 20px;
        background-color: #f8f8f8;
        border-radius: 12px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      }

      .partner-card img {
        max-width: 180px;
        height: auto;
        display: block;
        margin: 0 auto;
        /* centraliza a imagem dentro do flex container */
      }


      .partner-card:hover {
        transform: scale(1.05);
      }



      /* Equipamentos */
      .equipment-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
      }

      .equipment-card {
        background: #fff;
        border-radius: 14px;
        padding: 30px 20px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .equipment-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
      }

      .equipment-card i {
        font-size: 40px;
        color: #4caf50;
        margin-bottom: 18px;
      }

      .equipment-card h3 {
        font-size: 20px;
        margin-bottom: 12px;
        color: #222;
      }

      .equipment-card p {
        font-size: 15px;
        color: #555;
        line-height: 1.6;
      }
    </style>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9a4f3e1b2b.js" crossorigin="anonymous"></script>
  </section>
  <!-- Seção Galeria -->
  <section class="gallery-section" aria-label="Galeria de Fotos">
    <h2 class="section-title">Nossa Galeria</h2>
    <p class="section-intro">Confira alguns dos nossos trabalhos e projetos realizados com excelência.</p>

    <div class="gallery-grid">
      <div class="gallery-card">
        <img src="https://via.placeholder.com/300x200" alt="Projeto 1">
      </div>
      <div class="gallery-card">
        <img src="https://via.placeholder.com/300x200" alt="Projeto 2">
      </div>
      <div class="gallery-card">
        <img src="https://via.placeholder.com/300x200" alt="Projeto 3">
      </div>
      <div class="gallery-card">
        <img src="https://via.placeholder.com/300x200" alt="Projeto 4">
      </div>
      <div class="gallery-card">
        <img src="https://via.placeholder.com/300x200" alt="Projeto 5">
      </div>
      <div class="gallery-card">
        <img src="https://via.placeholder.com/300x200" alt="Projeto 6">
      </div>
    </div>

    <style>
      .gallery-section {
        background-color: #fff;
        padding: 80px 30px;
        text-align: center;
      }

      .gallery-section .section-title {
        font-size: 2.8rem;
        color: #222;
        margin-bottom: 15px;
      }

      .gallery-section .section-intro {
        font-size: 1.2rem;
        color: #555;
        margin-bottom: 40px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
      }

      .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
      }

      .gallery-card {
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .gallery-card img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease;
      }

      .gallery-card:hover img {
        transform: scale(1.05);
      }

      .gallery-card:hover {
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
      }

      /* Responsivo: 2 colunas tablets */
      @media (max-width: 992px) {
        .gallery-grid {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      /* Responsivo: 1 coluna mobile */
      @media (max-width: 576px) {
        .gallery-grid {
          grid-template-columns: 1fr;
        }
      }
    </style>
  </section>
      
</main>

<?php include 'includes/footer.php'; ?>