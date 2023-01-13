const mensajeAlerta = document.querySelector('.main__alert');
const closeIcon = document.querySelector('.main__close')

function closeAlert(){
    mensajeAlerta.classList.add("remove")
}

setTimeout(() => {
    mensajeAlerta.classList.add("remove")
}, 2000);


closeIcon.addEventListener("click", closeAlert)