import { getTime } from '/scripts/counter.js'

const timer = document.querySelector('.main-timer')

function showTimer() {
    // console.log(getTime())
    const timeInMinutes = new Date(getTime() * 1000)
    const timeInMinutesFormated = timeInMinutes.toLocaleTimeString('pt-BR', {
        minute: '2-digit',
        second: '2-digit'    
    })

    timer.innerHTML = timeInMinutesFormated
}

export default showTimer