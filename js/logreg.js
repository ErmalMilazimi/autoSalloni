const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const form1 = document.getElementById('form1');
const form2 = document.getElementById('form2');

form1.addEventListener('submit', (e) => {
    if( !isName() || !isPassord() ) {
        e.preventDefault();
    }
});

form2.addEventListener('submit', (e) => {
    if( !isName() || !isPassord() || !isEmail() ) {
        e.preventDefault();
    }
});


name.onblur = function(){
    isName();
}

email.onblur = function (){
    isEmail();
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

function isEmail(){
    const emailValue = email.value.trim();

    if (emailValue === '') {
        setErrorFor(email, 'Kjo fushe nuk mund te lihet e zbrazet!');
        return false;
    }else if (!isEmailReg(emailValue)){
        setErrorFor(email, 'Nuk eshte email valide!');
        return false;
    } else {
        setSuccessFor(email);
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

function isEmailReg(emailInput){
    var reg = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
	   return reg.test( emailInput );	
}