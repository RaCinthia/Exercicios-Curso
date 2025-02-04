import showTimer from '/scripts/showTimer.js'

let intervalId = null

const beep = new Audio('assets/audio/beep.mp3')
const alarm = new Audio('assets/audio/alarm.mp3')
const start_Pause = document.querySelector('.start span')
const iconStartPauseBtn = document.querySelector('.start i')

let timeInSeconds = 1500

// Inicia ou pausa o contador
function start_Stop() {

    // Se houver valor para intervalId (diferente de null), entra aqui
    if(intervalId) {
        stop()
        beep.play()
        return
    } else {
        // Troca o contexto do botão para "Pausar"
        start_Pause.textContent = "Pausar"
        iconStartPauseBtn.classList.remove('fa-play')
        iconStartPauseBtn.classList.add('fa-pause')
    }

    beep.play()
    intervalId = setInterval(counter, 1000) // No intervalo de um segundo, roda a função

}

// Contador responsável pela contagem regressiva
const counter = () => {

    // Verificação: caso menor que 0, interrompe a contagem
    if(timeInSeconds <= 0) {
        stop()
        alarm.play()
        return
    } else {
        timeInSeconds --
        showTimer(timeInSeconds)
    }

}

// Interrompe o contador
function stop() {

    clearInterval(intervalId) // Interrompe a execução do que for informado
    intervalId = null

    // Troca o contexto do botão para "Começar"
    start_Pause.textContent = "Começar"
    iconStartPauseBtn.classList.remove('fa-pause')
    iconStartPauseBtn.classList.add('fa-play')

}

function setTime(seconds) {
    timeInSeconds = seconds
}

function getTime() {
    return timeInSeconds
}

export { start_Stop, setTime, getTime, stop }