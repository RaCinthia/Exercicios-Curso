import toggleContext from '/scripts/toggleContext.js'
import { start_Stop, stop,  setTime } from '/scripts/counter.js'
import showTimer from '/scripts/showTimer.js'

const focusBtn = document.querySelector('#focus')
const shortBtn = document.querySelector('#short')
const longBtn = document.querySelector('#long')
const title = document.querySelector('.main-title')
const buttons = document.querySelectorAll('.controls-button')
const musicInput = document.querySelector('#toggle-music')
const focusMusic = new Audio('assets/audio/focus-audio.mp3')
const startBtn = document.querySelector('.start')

// Torna o loop da música verdadeiro
focusMusic.loop = true

// Ouvinte para o botão "Foco"
focusBtn.addEventListener('click', () => {
    stop()
    setTime(1500)

    showTimer()
    toggleContext('focus', buttons) // Troca o contexto para "focus"
    title.innerHTML = 'Foco'
    focusBtn.classList.add('active') // Adiciona a classe ativo
})

// Ouvinte para o botão "Descanso curto"
shortBtn.addEventListener('click', () => {
    stop()
    setTime(300)
    
    showTimer()
    toggleContext('short', buttons) // Troca o contexto para "short"
    title.innerHTML = 'Descanso curto'
    shortBtn.classList.add('active') // Adiciona a classe ativo
})

// Ouvinte para o botão "Descanso longo"
longBtn.addEventListener('click', () => {
    stop()
    setTime(900)

    showTimer()
    toggleContext('long', buttons) // Troca o contexto para "long"
    title.innerHTML = 'Descanso longo'
    longBtn.classList.add('active') // Adiciona a classe ativo
})

//Ouvinte para o botão de início/pausa => puxa o contador
startBtn.addEventListener('click', () => {
    start_Stop()
})

// Ao mudar o checkbox (true, false | marcado, desmarcado) toca o status da música
musicInput.addEventListener('change', () => {

    // Caso a música esteja pausada, toca ao trocar o estado
    if(focusMusic.paused) {
        focusMusic.play();
        // focusMusic.volume = 0.5 // Define o volume para a metade (50%)
    } else {
        focusMusic.pause();
    }

})

showTimer()