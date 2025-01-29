// MODAL DAS CONFIGURAÇÔES DO POMODORO
const containerTimer = document.getElementById('containerTimer');
const modalConfig = document.getElementById('configForm');
const btnConfig = document.getElementById('timerConfig');

console.log(containerTimer);
console.log(modalConfig);
console.log(btnConfig);
btnConfig.addEventListener("click",()=>{
    modalConfig.style.display = modalConfig.style.display == 'nome' ? 'flex' : 'none';
    containerTimer.style.display = containerTimer.style.display == 'flex' ? 'none' : 'flex';
});