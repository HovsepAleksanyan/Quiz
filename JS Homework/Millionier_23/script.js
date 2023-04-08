let quizArray = [
    {
        question: 'The capital of Armenia is______',
        variant1: { answer: 'Gyumri', isRight: false },
        variant2: { answer: 'Vanadzor', isRight: false },
        variant3: { answer: 'Yerevan', isRight: true },
        variant4: { answer: 'Ashtarak', isRight: false }

    },
    {
        question: 'The capital of USA is______',
        variant1: { answer: 'New York', isRight: false },
        variant2: { answer: 'Washington', isRight: true },
        variant3: { answer: 'Los Angeles', isRight: false },
        variant4: { answer: 'Chicago', isRight: false }
    },
    {
        question: 'The capital of Russia is______',
        variant1: { answer: 'Moscow', isRight: true },
        variant2: { answer: 'Novosibirsk', isRight: false },
        variant3: { answer: 'Samara', isRight: false },
        variant4: { answer: 'Volgograd', isRight: false }

    },
    {
        question: 'The capital of Brazil is______',
        variant1: { answer: 'Rio de Janeiro', isRight: false },
        variant2: { answer: 'Belo Horizonte', isRight: false },
        variant3: { answer: 'Porto Alegre', isRight: false },
        variant4: { answer: 'Brasília', isRight: true }
    }
];


let i;
let local = JSON.parse(localStorage.getItem('itemData'));
let localQuiz = JSON.parse(localStorage.getItem('quizDataStarted'));
if (local != null) {
    i = local;
} else {
    i = 0;
}

let count;
let interval;
let isClicked;
let isRestarted = false;
let isStarted = false;
let isClickedTimer;
let buttonStart = document.getElementById('startBtn');
let questionBox = document.getElementById('questionBox');
let result = document.getElementById('resultQuizes');

if (localQuiz) {
    startQuiz()
}

buttonStart.addEventListener('click', startQuiz);

function startQuiz() {
    result.style.display = 'none';
    buttonStart.style.display = 'none';
    questionBox.style.display = 'block';

    lose = false;
    isStarted = true;
    drawQuiz();
}

function drawQuiz() {
    isClicked = false;
    let tmpHtml = '';
    startTimer();
    tmpHtml += '<p id="quizTimer" class="time" onclick="startTimer()"></p><div id="question" class="question">' + quizArray[i].question + '</div>' +
        '<div id="answersBox" class="answerBox">' +
        '<div id="answer-1" data-id="variant1">' + quizArray[i].variant1.answer + '</div>' +
        '<div id="answer-2" data-id="variant2">' + quizArray[i].variant2.answer + '</div>' +
        '<div id="answer-3" data-id="variant3">' + quizArray[i].variant3.answer + '</div>' +
        '<div id="answer-4"  data-id="variant4">' + quizArray[i].variant4.answer + '</div>' +
        '</div>';

    questionBox.innerHTML = tmpHtml;


    if (isStarted) {
        window.onbeforeunload = localStorage.setItem('itemData', JSON.stringify(i));
        window.onbeforeunload = localStorage.setItem('quizDataStarted', JSON.stringify(isStarted));
    }

    document.getElementById('answer-1').addEventListener('click', answerChoosed);
    document.getElementById('answer-2').addEventListener('click', answerChoosed);
    document.getElementById('answer-3').addEventListener('click', answerChoosed);
    document.getElementById('answer-4').addEventListener('click', answerChoosed);
}

function answerChoosed() {
    let variant = this.getAttribute('data-id');
    if (quizArray[i][variant].isRight) {
        if (!isClicked) {
            if (quizArray[quizArray.length - 1][variant].isRight) {
                this.style.backgroundColor = 'seagreen';
                setTimeout(youAreWin, 1000);
                isClicked = true;
            } else if (!isClicked) {
                this.style.backgroundColor = 'seagreen';
                i++;
                setTimeout(drawQuiz, 1000);
                isClicked = true;
                count = 32;
            }
        }
    } else {
        if (!isClicked) {
            this.style.backgroundColor = 'crimson';
            isClicked = true;
            setTimeout(gameOver, 1000);
        }
    }
}

let localOver = JSON.parse(localStorage.getItem('gameOver'));
if (localOver != null) {
    if (localOver == true) {
        gameOver();
    }
} else {
    localOver = false;
}

let localWin = JSON.parse(localStorage.getItem('gameWin'));
if (localWin != null) {
    if (localWin = true) {
        youAreWin();
    }
} else {
    localWin = false;
}

function gameOver() {
    document.getElementById('questionBox').style.display = 'none';
    document.getElementById('resultQuizes').style.display = 'block';
    document.getElementById('gameOver').style.display = 'block';

    localStorage.setItem('gameOver', JSON.stringify(true));
    clearInterval(interval);
}

function youAreWin() {
    document.getElementById('questionBox').style.display = 'none';
    document.getElementById('gameOver').style.display = 'none';
    document.getElementById('resultQuizes').style.display = 'block';
    document.getElementById('winnerGame').style.display = 'block';

    localStorage.setItem('gameWin', JSON.stringify(true));
    clearInterval(interval);
}

function restartQuiz() {
    i = 0;
    count = 30;
    isRestarted = true;
    localStorage.setItem('gameOver', JSON.stringify(false));

    startTimer();
    startQuiz();
}

function finishQuiz() {
    localStorage.clear();
    location.reload();
}

function startTimer() {
    let localCount = JSON.parse(localStorage.getItem('timerData'));
    if (localCount != null) {
        count = localCount;
    } else {
        count = 31;
    }
    if (isRestarted) {
        count = 31;
    }
    if (!isClickedTimer) {
        interval = setInterval(calcCounter, 1000);
    }
    isClickedTimer = true;
}
function calcCounter() {
    count--;
    window.onbeforeunload = localStorage.setItem('timerData', JSON.stringify(count));
    drawTimer();
}
function drawTimer() {
    let timer = document.getElementById('quizTimer');
    let countStr = '00';

    if (count < 0) {
        count = 30;
    }
    if (count > 9) {
        countStr = count;
    } else {
        countStr = '0' + count;
        timer.style.backgroundColor = 'red';
        if (count == 0) {
            count == 31;
            gameOver();
        }
    }

    timer.innerText = countStr;
}