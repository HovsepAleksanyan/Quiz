document.getElementById('addBtn').addEventListener('click', addTimer);

let myArr;
if (JSON.parse(localStorage.getItem('timerData')) != null) {
    myArr = JSON.parse(localStorage.getItem('timerData'));
} else {
    myArr = [];
}


let isClicked = false;

function addTimer() {
    let tmpObj = {
        counter: 0,
        second: 0,
        minute: 0,
        isStopped: false
    };

    myArr.push(tmpObj);

    startTimer();
}

function startTimer() {
    if (!isClicked) {
        setInterval(calcTimer, 1000);
    }
    isClicked = true
}

function calcTimer() {
    for (let i in myArr) {
        if (!myArr[i].isStopped) {
            myArr[i].counter++;
        }
    }
    window.onbeforeunload = localStorage.setItem('timerData', JSON.stringify(myArr));
    drawTimer();
}

function drawTimer() {
    let tmpHtml = '';
    let sec;
    let min;
    let minStr = '00';
    let secStr = '00';

    for (let i in myArr) {
        sec = myArr[i].counter % 60;
        min = Math.floor(myArr[i].counter / 60);

        if (sec < 10) {
            secStr = '0' + sec;
        } else {
            secStr = sec.toString();
        }

        if (min < 10) {
            minStr = '0' + min;
        } else {
            minStr = min.toString();
        }

        tmpHtml += '<p id="timer-id-' + i + '" class="timerStr">' + minStr + ':' + secStr + '</p>' + '<button id="stopBtn-' + i + '" data-id="' + i + '">Stop</button>' + '<br>';
    }

    document.getElementById('itemCollection').innerHTML = tmpHtml;

    for (let i in myArr) {
        document.getElementById('stopBtn-' + i).addEventListener('click', stopTimer);
    }

}

startTimer();
function stopTimer() {
    let index = this.getAttribute('data-id');
    myArr[index].isStopped = true;
}