let questionArray = [
    {
        question: 'Vorn e Hayastani Mayraqaxaqy?',
        variant1: {
            answer: 'Gyumri',
            isRight: false,
        },
        variant2: {
            answer: 'Yerevan',
            isRight: true,
        },
        variant3: {
            answer: 'Abovyan',
            isRight: false,
        },
        variant4: {
            answer: 'Vanadzor',
            isRight: false,
        }
    },
    {
        question: 'Vorn e USA-i Mayraqaxay?',
        variant1: {
            answer: 'New York',
            isRight: false,
        },
        variant1: {
            answer: 'Los Angeles',
            isRight: false,
        },
        variant1: {
            answer: 'London',
            isRight: false,
        },
        variant1: {
            answer: 'Washingthon',
            isRight: true,
        }
    },
    {
        question: 'Mat e, mat e qani mat e?',
        variant1: {
            answer: '4',
            isRight: false,
        },
        variant2: {
            answer: '7',
            isRight: true,
        },
        variant1: {
            answer: '9',
            isRight: false,
        },
        variant1: {
            answer: '1',
            isRight: false,
        },
    }
];

document.getElementById('startBtn').addEventListener('click', startGame);

function startGame() {
    this.classList.add('started');

    let question = document.getElementById('question');
    let variant1 = document.getElementById('variant-1');
    let variant2 = document.getElementById('variant-2');
    let variant3 = document.getElementById('variant-3');
    let variant4 = document.getElementById('variant-4');

    let i = 0;
    while (i < questionArray.length) {
        question.innerText = questionArray[0].question;
        variant1.innerText = questionArray[0].variant1.answer;
        variant2.innerText = questionArray[0].variant2.answer;
        variant3.innerText = questionArray[0].variant3.answer;
        variant4.innerText = questionArray[0].variant4.answer;

        i++;
    }
}


function chooseVariant(self) {
    let index = self.getAttribute('data-id');
}