// PEGANDO OS INPUTS E VALUES
const btnCancel = document.getElementById("btnCancel");
const timerTag = document.getElementById("timerTag").value;
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
    let formData = new FormData();
    let diaSemana = new Date().getDay();
    const diasSemana = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado', 'Domingo'];
    let day = diasSemana[diaSemana - 1];
    let data = [timeValue,timerTag,timerDone,day];


    const endpoint = "/save";
    const header = {
        method: "POST",
        body: JSON.stringify(data)
    }

    fetch(endpoint,header)
    .then((resp)=>resp.text())
    .then((resp)=>{
        console.log(resp);
    });
}

btnCancel.addEventListener('click',()=>{
    let result = window.confirm('Deseja parar o pomodoro?');
    if(result){
        clearInterval(timer);
    }
}); 

startTimer();