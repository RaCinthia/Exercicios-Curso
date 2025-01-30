
const tasklist = document.querySelector('.tasklist__list');

export function createElement(taskInput) {

    // Elementos a serem criados
    const nodeLi = document.createElement('li');
    const nodeDiv = document.createElement('div');
    const nodeP = document.createElement('p');
    const nodeP_data = document.createElement('p');
    const nodeInput = document.createElement('input');
    
    // Transformando o input em botão, adicionando classe e valor
    nodeInput.type = 'checkbox';
    nodeInput.id = 'check__input';
    nodeInput.classList.add('tasklist__check');
    
    // Adicionando classes aos elementos
    nodeLi.classList.add('tasklist__item');
    nodeDiv.classList.add('tasklist__item__content');
    nodeP.id = 'task__name';
    nodeP_data.classList.add('date');
    
    // Atribuindo os conteúdos da tarefa
    nodeP.textContent = `${taskInput.value}`;
    // toLocaleDateString(idioma, dia da semana)
    let weekday = new Date().toLocaleDateString('pt-BR', {weekday: 'long'});
    let date = new Date().toLocaleDateString('pt-BR');
    let hour = new Date().toLocaleTimeString('pr-BR', {
        hour: "numeric",
        minute: "numeric"
    });

    nodeP_data.textContent = weekday + " (" + date + ") às " + hour;
    
    // Atribuindo os filhos
    nodeDiv.appendChild(nodeP);
    nodeDiv.appendChild(nodeP_data);
    nodeLi.appendChild(nodeDiv);
    nodeLi.appendChild(nodeInput);
    tasklist.appendChild(nodeLi);

}

// Export padrão => por padrão exportará a única função (create Element);
// export default createElement;