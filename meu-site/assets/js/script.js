// =======================
// Texto digitado automático
// =======================

console.log("JS carregado!");

const palavras = ["evolução", "movimento", "transformação", "crescimento"];
let palavraIndex = 0;
let charIndex = 0;
let digitando = true;
const typedText = document.querySelector(".typed-text");

function digitar() {
  const palavra = palavras[palavraIndex];

  if (digitando) {
    // Digitando a palavra
    if (charIndex < palavra.length) {
      typedText.textContent += palavra.charAt(charIndex++);
      setTimeout(digitar, 100);
    } else {
      // Pausa após digitar a palavra completa
      digitando = false;
      setTimeout(digitar, 1500);
    }
  } else {
    // Apagando a palavra
    if (charIndex > 0) {
      typedText.textContent = palavra.substring(0, --charIndex);
      setTimeout(digitar, 50);
    } else {
      // Próxima palavra
      digitando = true;
      palavraIndex = (palavraIndex + 1) % palavras.length;
      setTimeout(digitar, 300);
    }
  }
}

// Inicia o efeito quando DOM estiver carregado
document.addEventListener("DOMContentLoaded", digitar);

// =======================
// Botão voltar ao topo
// =======================

// Mostrar botão quando rolar 200px para baixo
window.onscroll = function () {
  const btn = document.getElementById("btn-topo");
  if (
    document.body.scrollTop > 200 ||
    document.documentElement.scrollTop > 200
  ) {
    btn.style.display = "block";
  } else {
    btn.style.display = "none";
  }
};

// Função para rolar suavemente para o topo
function voltarAoTopo() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

// =======================
// Menu radial (ícones redes sociais)
// =======================

function toggleRadialMenu() {
  document.querySelector(".menu-radial").classList.toggle("active");
}

// =======================
// Carrossel automático da seção de serviços
// =======================

const carousel = document.getElementById("carousel");
const cardWidth = 320; // largura do card + gap (ajuste se necessário)
const totalCards = carousel.children.length;
const maxScroll = cardWidth * (totalCards - 3); // considerando 3 cards visíveis, ajuste se necessário

let scrollPosition = 0;

setInterval(() => {
  scrollPosition += cardWidth;

  // Se passar do máximo, reseta a posição para 0
  if (scrollPosition > maxScroll) {
    // Remove transição para o "pulo" instantâneo
    carousel.style.transition = "none";
    carousel.style.transform = `translateX(0px)`;
    scrollPosition = 0;

    // Força reflow para que a transição funcione após resetar
    carousel.offsetHeight;

    // Reativa a transição para os próximos movimentos
    carousel.style.transition = "transform 1s ease";
  } else {
    carousel.style.transform = `translateX(${-scrollPosition}px)`;
  }
}, 2000);

// Inicializa a transição para o primeiro movimento
carousel.style.transition = "transform 1s ease";
