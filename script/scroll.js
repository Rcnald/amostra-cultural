// Script para o botão de voltar ao topo

const scrollAnima = document.querySelector('[data-anima="scroll"]')

const metadeWindow = window.innerHeight * 19

console.log(metadeWindow)

const animarScroll = () => {
    const topoItem = scrollAnima.getBoundingClientRect().top

    const itemVisivel = topoItem - metadeWindow < 0

    if (itemVisivel) {
        scrollAnima.classList.add('show-button')
    } else {
        scrollAnima.classList.remove('show-button')
    }

}

window.addEventListener('scroll', animarScroll)

// Scroll suave

const linkInterno = document.querySelector('[data-scroll="suave"] a[href^="#"]')

const scrollTop = (event) => {
    event.preventDefault()

    const href = event.currentTarget.getAttribute('href')

    const topo = document.querySelector(href)

    topo.scrollIntoView({
        behavior: 'smooth',
        block: 'start',
    })
    console.log(href)
}

linkInterno.addEventListener('click', scrollTop)