var sectionTimer = document.getElementById('timersSection');
var buttonAdd = document.getElementById('addBtn');

var myArray = [];
var isClicked = false;
var interval;

buttonAdd.addEventListener('click', addTimer);

function addTimer() {
    var tmpObj = {
        secondCount: 0,
        minuteCount: 0,
        hourCount: 0,
        isStarted: false,
        isReseted: false
    };
    myArray.push(tmpObj);

    if (!isClicked) {
        interval = setInterval(calcTimer, 1000);
    }
    isClicked = true;
}

function calcTimer() {
    for (var i in myArray) {
        if (myArray[i].isStarted) {
            myArray[i].secondCount++;
            if (myArray[i].secondCount > 59) {
                myArray[i].minuteCount++;
                myArray[i].secondCount = 0
            }
            if (myArray[i].minuteCount > 59) {
                myArray[i].hourCount++;
                myArray[i].minuteCount = 0;
            }
        }
    }
    drawTimer()
}

function drawTimer() {
    var tmpHtml = '';

    var second = '';
    var minute = '';
    var hour = '';

    for (var i in myArray) {
        if (myArray[i].secondCount == 0) {
            second = '00';
        }
        else if (myArray[i].secondCount <= 9) {
            second = '0' + myArray[i].secondCount;
        } else {
            second = myArray[i].secondCount;
        }

        if (myArray[i].minuteCount == 0) {
            minute = '00'
        } else if (myArray[i].minuteCount <= 9) {
            minute = '0' + myArray[i].minuteCount;
        } else {
            minute = myArray[i].minuteCount;
        }

        if (myArray[i].hourCount == 0) {
            hour = '00';
        } else if (myArray[i].hourCount <= 9) {
            hour = '0' + myArray[i].hourCount;
        } else {
            hour = myArray[i].hourCount;
        }

        saveTimer();

        function saveTimer() {
            localStorage.setItem('timer-N-' + i, second);
        }

        tmpHtml +=
            '<div id="timerItem" class="box">' +
            '<p id="timer' + i + '">' + hour + ':' + minute + ':' + second + '</p>' +
            '<button id="' + 'timer-Start-' + i + '" data-index="' + i + '">Start</button>' +
            '<button id="' + 'timer-Pause-' + i + '" data-index="' + i + '">Pause</button>' +
            '<button id="' + 'timer-Reset-' + i + '" data-index="' + i + '">Reset</button>' +
            '</div>'
    }
    sectionTimer.innerHTML = tmpHtml

    for (var i in myArray) {
        document.getElementById('timer-Start-' + i).addEventListener('click', timerStart);
        document.getElementById('timer-Pause-' + i).addEventListener('click', timerPause);
        document.getElementById('timer-Reset-' + i).addEventListener('click', timerReset);
    }
}

function timerStart() {
    var startBtnIndex = this.getAttribute('data-index');
    myArray[startBtnIndex].isStarted = true;
}
function timerPause() {
    var pauseBtnIndex = this.getAttribute('data-index');
    myArray[pauseBtnIndex].isStarted = false;
}
function timerReset() {
    var resetBtnIndex = this.getAttribute('data-index');
    myArray[resetBtnIndex].secondCount = 0;
    myArray[resetBtnIndex].minuteCount = 0;
    myArray[resetBtnIndex].hourCount = 0;
}