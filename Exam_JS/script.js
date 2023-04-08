let quizArray = [
    {
        question: '1. The capital of Armenia is______',
        level: 1,
        variant1: { answer: 'Gyumri', isRight: false },
        variant2: { answer: 'Vanadzor', isRight: false },
        variant3: { answer: 'Yerevan', isRight: true },
        variant4: { answer: 'Ashtarak', isRight: false }

    },
    {
        question: '2. The capital of USA is______',
        level: 2,
        variant1: { answer: 'New York', isRight: false },
        variant2: { answer: 'Washington', isRight: true },
        variant3: { answer: 'Los Angeles', isRight: false },
        variant4: { answer: 'Chicago', isRight: false }
    },
    {
        question: '3. The capital of Russia is______',
        level: 3,
        variant1: { answer: 'Moscow', isRight: true },
        variant2: { answer: 'Novosibirsk', isRight: false },
        variant3: { answer: 'Samara', isRight: false },
        variant4: { answer: 'Volgograd', isRight: false }

    },
    {
        question: '4. The capital of Brazil is______',
        level: 4,
        variant1: { answer: 'Rio de Janeiro', isRight: false },
        variant2: { answer: 'Belo Horizonte', isRight: false },
        variant3: { answer: 'Porto Alegre', isRight: false },
        variant4: { answer: 'Brasília', isRight: true }
    }
];

let i = 0;
let isStarted = false;
let count;
let isClicked;
let interval;
let isClickedTimer;
let isHelped;

let playerDataBox = document.getElementById('playerData');
let playerQuizBox = document.getElementById('quizBox');
let playerName = document.getElementById('playerName');
let playerSurName = document.getElementById('playerSurName');
let playerAge = parseInt(document.getElementById('playerAge'));
document.getElementById('startBtn').addEventListener('click', startGame);
function startGame() {
    if (playerName.value == '' || playerSurName.value == '' || playerAge.value == '') {
        alert('Lracra dashty');
    } else {
        isStarted = true;
        isHelped = false;
        playerQuizBox.classList.add('game');
        playerDataBox.style.display = 'none';
        drawQuestion();
    };
};

function drawQuestion() {
    startTimer();
    isClicked = false;
    let tmpHtmlQuizBox = '';

    tmpHtmlQuizBox += '<div class="quizGame">' + '<div class="timer" id="timer"></div>' +
        '<div id="help" class="help">Help</div>' +
        '<div id="question" class="questionDiv">' + quizArray[i].question + '</div>' +
        '<div class="variantsBox">' +
        '<div id="variant-1" data-id="variant1">' + quizArray[i].variant1.answer + '</div>' + '<div id="variant-2" data-id="variant2">' + quizArray[i].variant2.answer + '</div>' +
        '<div id="variant-3" data-id="variant3">' + quizArray[i].variant3.answer + '</div>' + '<div id="variant-4" data-id="variant4">' + quizArray[i].variant4.answer + '</div>' +
        '</div></div>' +
        '<div class="moneyBox">' +
        '<p id="levelFour">100.000</p>' +
        '<p id="levelThree">50.000</p>' +
        '<p id="levelTwo">10.000</p>' +
        '<p id="levelOne">5.000</p>' +
        '</div>';

    playerQuizBox.innerHTML = tmpHtmlQuizBox;

    document.getElementById('variant-1').addEventListener('click', chooseItem);
    document.getElementById('variant-2').addEventListener('click', chooseItem);
    document.getElementById('variant-3').addEventListener('click', chooseItem);
    document.getElementById('variant-4').addEventListener('click', chooseItem);

    document.getElementById('help').addEventListener('click', helpMe);
};

function chooseItem() {
    let variant = this.getAttribute('data-id');
    console.log(variant);
    if (quizArray[i][variant].isRight) {
        if (!isClicked) {
            if (quizArray[quizArray.length - 1][variant].isRight) {
                this.style.backgroundColor = 'seagreen';
                setTimeout(youWin, 1000)
                isClicked = true;
            } else if (!isClicked) {
                this.style.backgroundColor = 'seagreen';
                i++;
                setTimeout(drawQuestion, 1000);
                isClicked = true;
                count = 30;
            };
        };
    } else {
        if (!isClicked) {
            this.style.backgroundColor = 'crimson';
            isClicked = true;
            setTimeout(youLose, 1000);
        };
    };
};

function nextQuestion() {
    startTimer();
    i++;
    drawQuestion();
};

function startTimer() {
    count = 30;
    if (!isClickedTimer) {
        interval = setInterval(calcCount, 1000);
    };
    isClickedTimer = true;
};

function calcCount() {
    count--;
    drawTimer();
};

function drawTimer() {
    let timer = document.getElementById('timer');
    let coutStr;
    if (count > 9) {
        coutStr = count;
    } else {
        coutStr = '0' + count;
        timer.style.backgroundColor = 'crimson';
    };
    if (count <= 0) {
        clearInterval(interval);
        setTimeout(youLose, 500);
    };
    timer.innerText = coutStr;
};

function youLose() {
    let loseStr = '';
    document.getElementById('startBtn').style.display = 'none';
    loseStr += '<div class="loseDiv"><p>' + playerSurName.value + ' ' + playerName.value + ' Lose</p></div>';

    document.getElementById('gameResult').innerHTML = loseStr;
    playerQuizBox.style.display = 'none';
};

function youWin() {
    let winStr = '';
    document.getElementById('startBtn').style.display = 'none';
    winStr += '<div class="winDiv"><p>' + playerSurName.value + ' ' + playerName.value + ' Win!</p><button id="finishBtn">Finish</button></div>';

    document.getElementById('gameResult').innerHTML = winStr;
    playerQuizBox.style.display = 'none';

    document.getElementById('finishBtn').addEventListener('click', finishGame);
}

function finishGame() {
    location.reload();
}

function helpMe() {
    if (!isHelped) {
        if (quizArray[i].variant1.isRight) {
            document.getElementById('help').innerText = quizArray[i].variant1.answer;
        } else if (quizArray[i].variant2.isRight) {
            document.getElementById('help').innerText = quizArray[i].variant2.answer;
        } else if (quizArray[i].variant3.isRight) {
            document.getElementById('help').innerText = quizArray[i].variant3.answer;
        } else if (quizArray[i].variant4.isRight) {
            document.getElementById('help').innerText = quizArray[i].variant4.answer;
        }
    } else {
        document.getElementById('help').innerText = 'No help either';
    }
    isHelped = true;
}