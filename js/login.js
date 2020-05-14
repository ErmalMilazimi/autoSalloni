document.getElementById('login').addEventListener('click', function () {
    document.querySelector('.popup-model').style.display = 'flex';
});

document.querySelector('.close').addEventListener('click', function () {
    document.querySelector('.popup-model').style.display = 'none';
});

document.getElementById('logp').addEventListener('click', function () {
    document.querySelector('.register-content').classList.add('hidden');
    document.querySelector('.login-content').classList.remove('hidden');

});

document.getElementById('regp').addEventListener('click', function () {
    document.querySelector('.register-content').classList.remove('hidden');
    document.querySelector('.login-content').classList.add('hidden');
});

// validation format

const name = document.getElementById('name');
const password = document.getElementById('password');
const form1 = document.getElementById('form1');

form1.addEventListener('submit', (e) => {
    if( !isName() || !isPassord() ) {
        e.preventDefault();
    }
});

name.onblur = function(){
    isName();
}

password.onblur = function(){
    isPassord();
}

function isName(){
    const nameValue = name.value.trim();

    if (nameValue === '') {
        setErrorFor(name, 'Kjo fushe nuk mund te lihet e zbrazet!');
        return false;
    }else if(nameValue.length < 3 ){
        setErrorFor(name, 'Kjo fushe duhet ti kete tre apo meshum shkonja!')
        return false;
    } else {
        setSuccessFor(name);
        return true;
    }
}

function isPassord(){
    const pass = password.value.trim();
    if (pass === '') {
        setErrorFor(password, 'Kjo fushe nuk mund te lihet e zbrazet!');
        return false;
    }else if(pass.length < 5){
        setErrorFor(password, 'Passwordi gabim!');
        return false;
    } else {
        setSuccessFor(password);
        return true;
    }
}

function setErrorFor(input, message) {
    const inputKlasa = input.parentElement;
    const small = inputKlasa.querySelector('small');

    small.innerText = message;

    inputKlasa.className = 'inputKlasa error';
}

function setSuccessFor(input){
    const inputKlasa = input.parentElement;
    inputKlasa.className = 'inputKlasa success';
}

// forma e dyte

const name2 = document.getElementById('name2');
const email2 = document.getElementById('email2');
const password2 = document.getElementById('password2');
const form2 = document.getElementById('form2');

form2.addEventListener('submit', (e) => {
    if( !isName2() || !isEmail2() || !isPassord2() ) {
        e.preventDefault();
    }
});


name2.onblur = function(){
    isName2();
}

email2.onblur = function (){
    isEmail2();
}

password2.onblur = function(){
    isPassord2();
}

function isName2(){
    const nameValue2 = name2.value.trim();

    if (nameValue2 === '') {
        setErrorFor2(name2, 'Kjo fushe nuk mund te lihet e zbrazet!');
        return false;
    }else if(nameValue2.length < 3 ){
        setErrorFor2(name2, 'Kjo fushe duhet ti kete tre apo meshum shkonja!')
        return false;
    } else {
        setSuccessFor2(name2);
        return true;
    }
}

function isEmail2(){
    const emailValue2 = email2.value.trim();

    if (emailValue2 === '') {
        setErrorFor2(email2, 'Kjo fushe nuk mund te lihet e zbrazet!');
        return false;
    }else if (!isEmailReg2(emailValue2)){
        setErrorFor2(email2, 'Nuk eshte email valide!');
        return false;
    } else {
        setSuccessFor2(email2);
        return true;
    }
}

function isPassord2(){
    const pass2 = password2.value.trim();
    if (pass2 === '') {
        setErrorFor(password2, 'Kjo fushe nuk mund te lihet e zbrazet!');
        return false;
    }else if(pass2.length < 5){
        setErrorFor(password2, 'Passwordi gabim!');
        return false;
    } else {
        setSuccessFor(password2);
        return true;
    }
}

function setErrorFor2(input, message) {
    const inputKlasa = input.parentElement;
    const small = inputKlasa.querySelector('small');

    small.innerText = message;

    inputKlasa.className = 'inputKlasa error';
}

function setSuccessFor2(input){
    const inputKlasa = input.parentElement;
    inputKlasa.className = 'inputKlasa success';
}

function isEmailReg2(emailInput){
    var reg = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
	   return reg.test( emailInput );	
}