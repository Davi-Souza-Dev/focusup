// PEGANDO OS INPUTS E VALUES
const btnCancel = document.getElementById("btnCancel");
const timerTag = document.getElementById("timerTag").value;
const done = document.getElementById("done");
const timerClock = document.getElementById("timerClock");
const timeValue = timerClock.getAttribute("value") - 1;
let min = timeValue;
let sec = 59;
let timer;
let timerDone = false;

// INICIANDO O TIMER
const startTimer = () => {
    timer = setInterval(() => {
        if (sec > 0) {
            sec--;
            timerClock.innerHTML = `${String(min).padStart(2, "0")}:${String(
                sec
            ).padStart(2, "0")}`;
            return;
        } else if (min >= 1) {
            min--;
            sec = 59;
            timerClock.innerHTML = `${String(min).padStart(2, "0")}:${String(
                sec
            ).padStart(2, "0")}`;
            return;
        }
        timerDone = true;
        timerStop();
    }, 10);
};

// PARANDO O TIMER
const timerStop = () => {
    clearInterval(timer);
    const form = document.getElementById("formPomodoro");
    form.submit();
};

btnCancel.addEventListener("click", () => {
    let result = window.confirm("Deseja parar o pomodoro?");
    if (result) {
        done.setAttribute("value", false);
        clearInterval(timer);
    }
});

startTimer();
