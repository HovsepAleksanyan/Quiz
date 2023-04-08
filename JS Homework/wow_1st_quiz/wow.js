let collection = [
    {
        question: 'The capital of Armenia is______',
        variants: [
            { answer: 'Gyumri', isRight: false },
            { answer: 'Vanadzor', isRight: false },
            { answer: 'Yerevan', isRight: true },
            { answer: 'Ashtarak', isRight: false }
        ]
    },
    {
        question: 'The capital of USA is______',
        variants: [
            { answer: 'New York', isRight: false },
            { answer: 'Washington', isRight: true },
            { answer: 'Los Angeles', isRight: false },
            { answer: 'Chicago', isRight: false }
        ]
    },
    {
        question: 'The capital of Russia is______',
        variants: [
            { answer: 'Moscow', isRight: true },
            { answer: 'Novosibirsk', isRight: false },
            { answer: 'Samara', isRight: false },
            { answer: 'Saint Petersburg', isRight: false }
        ]
    },
    {
        question: 'The capital of Brazil is______',
        variants: [
            { answer: 'Rio de Janeiro', isRight: false },
            { answer: 'Belo Horizonte', isRight: false },
            { answer: 'Porto Alegre', isRight: false },
            { answer: 'Brasília', isRight: true }
        ]
    }
];

console.log(collection[0].variants[0].answer);

document.getElementById('start-Btn').addEventListener('click', startGame);

let isClicked;
let isStarted = false;
function startGame() {
    document.getElementById('game').style.display = 'none'
    document.getElementById('questionsBox').style.display = 'block';

    isStarted = true;
    drawQuestions();
}

let i;
let item = JSON.parse(localStorage.getItem('itemData'));
if (item != null) {
    i = item;
    document.getElementById('start-Btn').innerText = 'Continue Game';
} else {
    document.getElementById('start-Btn').innerText = 'Start Game'
    i = 0;
}
drawQuestions()
function drawQuestions() {
    isClicked = false;
    let tmpHtml = '';

    tmpHtml += '<div id="question" class="questionDiv">' + collection[i].question + '</div>' +
        '<div class="variantsBox">' +
        '<div id="variant-1" data-id="0">' + collection[i].variants[0].answer + '</div>' + '<div id="variant-2" data-id="1">' + collection[i].variants[1].answer + '</div>' +
        '<div id="variant-3" data-id="2">' + collection[i].variants[2].answer + '</div>' + '<div id="variant-4" data-id="3">' + collection[i].variants[3].answer + '</div>' +
        '</div>';
    document.getElementById('questionsBox').innerHTML = tmpHtml;

    if (isStarted) {
        window.onbeforeunload = localStorage.setItem('itemData', JSON.stringify(i));
    }

    document.getElementById('variant-1').addEventListener('click', chooseItem);
    document.getElementById('variant-2').addEventListener('click', chooseItem);
    document.getElementById('variant-3').addEventListener('click', chooseItem);
    document.getElementById('variant-4').addEventListener('click', chooseItem);

}

function chooseItem() {
    let index = this.getAttribute('data-id');
    if (collection[i].variants[index].isRight) {
        if (!isClicked) {
            if (collection[i].variants[index].answer == 'Brasília') {
                this.style.backgroundColor = 'seagreen';
                setTimeout(winner, 1000);
                isClicked = true;
            }
            else if (!isClicked) {
                this.style.backgroundColor = 'seagreen';
                setTimeout(nextQuestion, 1000);
                isClicked = true;
            }
        }
    } else {
        if (!isClicked) {
            this.style.backgroundColor = 'crimson';
            setTimeout(loser, 1000);
        }
        isClicked = true;
    }
}

function nextQuestion() {
    i++;
    drawQuestions();
}
function loser() {
    document.getElementById('loserDiv').style.display = 'block';
    document.getElementById('questionsBox').style.display = 'none';
    localStorage.clear();
}
function winner() {
    document.getElementById('winnerDiv').style.display = 'block';
    document.getElementById('questionsBox').style.display = 'none';
    localStorage.clear();
}

function refreshPage() {
    location.reload();
}