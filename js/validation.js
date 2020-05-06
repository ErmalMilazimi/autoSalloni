const name = document.getElementById('name');
const email = document.getElementById('email');
const komenti = document.getElementById('komenti');
const form = document.getElementById('form');

var indexN = 0;
var indexE = 0;
var indexK = 0;

form.addEventListener('submit', (e) => {
    checkInput();
    if( indexN == 0 || indexE == 0 || indexK == 0 ) {
        e.preventDefault();
    }
});

name.onblur = function(){
    isName();
}

email.onblur = function (){
    isEmail();
}

komenti.onblur = function(){
    isKoment();
}

function checkInput() {
    isName();
    isEmail();
    isKoment();

    if( indexN > 0 && indexE > 0 && indexK > 0 ){
        window.alert('Mesazhi u dergua me sukses!');
    }
}

function isName(){
    const nameValue = name.value.trim();

    if (nameValue === '') {
        setErrorFor(name, 'Kjo fushe nuk mund te lihet e zbrazet!');
    }else if(nameValue.length < 3 ){
        setErrorFor(name, 'Kjo fushe duhet ti kete tre apo meshum shkonja!')
    } else {
        setSuccessFor(name);
        indexN++;
    }
}

function isEmail(){
    const emailValue = email.value.trim();

    if (emailValue === '') {
        setErrorFor(email, 'Kjo fushe nuk mund te lihet e zbrazet!');
    }else if (!isEmailReg(emailValue)){
        setErrorFor(email, 'Nuk eshte email valide!');
    } else {
        setSuccessFor(email);
        indexE++;
    }
}

function isKoment(){
    const komentiValue = komenti.value.trim();
    if (komentiValue === '') {
        setErrorFor(komenti, 'Kjo fushe nuk mund te lihet e zbrazet!');
    } else {
        setSuccessFor(komenti);
        indexK++;
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