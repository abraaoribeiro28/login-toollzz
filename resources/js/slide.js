const slides = document.querySelectorAll('.slide');
const prevButton = document.querySelector('#prev');
const nextButton = document.querySelector('#next');
const slidesContainer = document.querySelector('.slides');
const totalSlides = slides.length
let currentIndex = 0;
let interval;

function showIndicator(index) {
    const indicators = document.querySelectorAll('.indicator');
    indicators.forEach(element => {
       element.classList.remove('active')
    });
    indicators[index].classList.add('active')
}

/**
 * Exibe o slide com o índice fornecido.
 * @param {number} index - O índice do slide a ser exibido.
 */
function showSlide(index ) {
    if (index >= totalSlides) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = totalSlides - 1;
    } else {
        currentIndex = index;
    }
    slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
    showIndicator(currentIndex);
}

/**
 * Reinicia o intervalo de exibição dos slides.
 * Limpa o intervalo atual e define um novo intervalo para exibir o próximo slide a cada 5 segundos.
 */
function restartShowSlide() {
    clearInterval(interval)
    interval = setInterval(function() {
        showSlide(currentIndex + 1);
    }, 5000);
}

/**
 * Cria indicadores de navegação para os slides.
 * @param {number} amount - A quantidade de indicadores a serem criados.
 */
function createIndicators(amount) {
    for (let i = 0; i < amount; i++) {
        const indicatorsElement = document.querySelector('.indicators');
        const indicator = document.createElement('div');

        indicator.classList.add('indicator');
        if (i === 0) indicator.classList.add('active');
        indicator.onclick = () => {
            restartShowSlide();
            showSlide(i);
        }

        indicatorsElement.appendChild(indicator);
    }
}

prevButton.addEventListener("click", function() {
    restartShowSlide()
    showSlide(currentIndex - 1);
});

nextButton.addEventListener("click", function() {
    restartShowSlide()
    showSlide(currentIndex + 1);
});

createIndicators(totalSlides);
restartShowSlide();
