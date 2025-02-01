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
// INICIANDO O TIMER
const startTimer = () => {
    timer = setInterval(()=>{
        if(sec > 0){
            sec--;
            timerClock.innerHTML = sec > 10 ? `${min}:${sec}` : `${min}:0${sec}`;
            return;
        }else if(min >=1){
            min--;
            sec = 59;
            timerClock.innerHTML = min > 10 ? `${min}:${sec}` : `0${min}:${sec}`;
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

btnCancel.addEventListener('click',()=>{
    let result = window.confirm('Deseja parar o pomodoro?');
    if(result){
        done.setAttribute("value",false);
        clearInterval(timer);
    }
}); 

startTimer();