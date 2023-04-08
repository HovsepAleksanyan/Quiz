document.getElementById('signUpBtn').addEventListener('mouseover', changeOn);
document.getElementById('signUpBtn').addEventListener('mouseout', changeOff);

document.getElementById('logInBtn').addEventListener('mouseover', changeOn);
document.getElementById('logInBtn').addEventListener('mouseout', changeOff);

document.getElementById('viewBtn').addEventListener('mouseover', vBtnActive);  
document.getElementById('viewBtn').addEventListener('mouseout', vBtnDisActive);

function changeOn() {
    this.classList.add("border-success");
}

function changeOff() {
    this.classList.remove("border-success");
}

function vBtnActive() {
    this.classList.add('border-primary');
}

function vBtnDisActive() {
    this.classList.remove("border-primary");
}