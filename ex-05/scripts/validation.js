import { addTask } from "../index.js";

const infoMessage = document.querySelector('.tasklist__info-message');

// Valida se o input recebeu ou não um valor 
export function validateInput(warningMessage, taskInput) {

    // Se o valor do input for vazio, a mensagem aparece
    if(taskInput.value === '') {
        warningMessage.classList.add('show');
    } else {
        warningMessage.classList.remove('show');
        addTask();
        taskInput.value = '';
    };
    
};

// Verifica se o array "tasksArray" está vazio
export function tasklistListener(tasksArray) {
   
    // Se o array estiver vazio, remove a classe ".hide" e mostra a mensagem
    if(tasksArray == '') {
        infoMessage.classList.remove('hide');
    } else {
        infoMessage.classList.add('hide');
    };

};