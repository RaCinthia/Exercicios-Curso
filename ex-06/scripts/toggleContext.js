const html = document.querySelector('html')
const bannerImg = document.querySelector('#bannerImg')

// Recebe o contexto e troca os elementos conforme o tema 
export function toggleContext(context, buttons) {

    buttons.forEach((context) => {
        context.classList.remove('active')
    })
    
    html.setAttribute('data-context', context)
    bannerImg.setAttribute('src', `/assets/images/${context}.png`)
}

export default toggleContext;