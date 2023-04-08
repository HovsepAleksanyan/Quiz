let secondCount;
let interval;
startTimer();
if (localStorage.getItem('secondTimer') == null) {
    secondCount = 0;
} else {
    secondCount = parseInt(localStorage.getItem('secondTimer'));
}

function startTimer() {
    interval = setInterval(calcTimer, 1000);
}

function calcTimer() {
    secondCount++;
    window.onbeforeunload = localStorage.setItem('secondTimer', secondCount.toString());
    drawTimer();
}

function drawTimer() {
    let second = secondCount % 60;
    let minute = Math.floor(secondCount / 60);

    let secondStr,
        minuteStr,
        hourStr;

    if (second == 0) {
        secondStr = '00';
    } else if (second <= 9) {
        secondStr = '0' + second;
    } else {
        secondStr = second.toString();
    }

    if (minute == 0) {
        minuteStr = '00';
    } else if (minute <= 9) {
        minuteStr = '0' + minute;
    } else {
        minuteStr = minute.toString();
    }
    if (minute > 5) {
        minute = 0;
        minuteStr = '00';
    }

    document.getElementById('timer').innerHTML = minuteStr + ':' + secondStr;
}