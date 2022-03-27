/////////////// search
function search_book() {
    let input = document.getElementById('searchbar').value
    input = input.toLowerCase();
    let x = document.getElementsByClassName('flexCardsearch');

    for (i = 0; i < x.length; i++) {
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display = "none";
        }
        else {
            x[i].style.display = "block";
        }
    }
}
////////////////////// add to cart

const display=document.getElementById("counter");

function clickCounter(){
    if(typeof(Storage) !== "undefined"){
        if(localStorage.clickcount){
            localStorage.clickcount=Number(localStorage.clickcount)+1;
        }
        else{
            localStorage.clickcount=1;
        }
        display.innerHTML=localStorage.clickcount;
    }
}
display.innerHTML = localStorage.clickcount;
// var count = 0;

// function add() {
//     count++;
//     localStorage.setItem('counter', count);

//     document.getElementById("counter").innerHTML = count;
// }
//////////////////////////////////////////////// steper
const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum++;
        updateFormSteps();
        updateProgressbar();
    });
});

prevBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum--;
        updateFormSteps();
        updateProgressbar();
    });
});

function updateFormSteps() {
    formSteps.forEach((formStep) => {
        formStep.classList.contains("form-step-active") &&
            formStep.classList.remove("form-step-active");
    });

    formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
    progressSteps.forEach((progressStep, idx) => {
        if (idx < formStepsNum + 1) {
            progressStep.classList.add("progress-step-active");
        } else {
            progressStep.classList.remove("progress-step-active");
        }
    });

    const progressActive = document.querySelectorAll(".progress-step-active");

    progress.style.width =
        ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}

//////////////////////////////
/////////////////////// multi languge
function togglestyle() {
    var styles = document.getElementsByTagName('link')[0];


    if (styles.getAttribute('href') == 'css/style.css') {
        styles.setAttribute('href', 'css/styleEN.css');


    }
    else {
        styles.setAttribute('href', 'css/style.css');

    }
}


