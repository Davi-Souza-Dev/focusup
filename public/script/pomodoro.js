// PEGANDO OS INPUTS E VALUES
const btnCancel = document.getElementById("btnCancel");
const timerTag = document.getElementById("timerTag").value;
const done = document.getElementById("done");
const timerClock = document.getElementById("timerClock");
const timeValue = timerClock.getAttribute('value');
let min = timeValue - 1;
let sec = 59;
let timer;
let timerDone = false;

// CIRCULO DE PROGRESSO
let totalTime = min * 60 + sec;
let remainingTime = totalTime;
const progressBar = document.querySelector(".progress-bar");


// INICIANDO O TIMER
const startTimer = () => {
    timer = setInterval(()=>{
        if(sec > 0){
            sec--;
            timerClock.innerHTML = `${String(min).padStart(2, '0')}:${String(sec).padStart(2, '0')}`;
            updateProgress();
            return;
        }else if(min >=1){
            min--;
            sec = 59;
            timerClock.innerHTML = `${String(min).padStart(2, '0')}:${String(sec).padStart(2, '0')}`;
            updateProgress();
            return;
        }

        timerDone = true;
        timerStop();
    },1);
}

// PARANDO O TIMER
const timerStop = () =>{
    clearInterval(timer);
   
    const form = document.getElementById("formPomodoro");
    form.submit();
}

// ATUALIZAR o CIRCULO DE PROGRESSO
const updateProgress = () => {
    let progress = (remainingTime / totalTime) * 502;
    progressBar.style.strokeDashoffset = progress;
};

btnCancel.addEventListener('click',()=>{
    let result = window.confirm('Deseja parar o pomodoro?');
    if(result){
        done.setAttribute("value",false);
        clearInterval(timer);
    }
}); 

startTimer();