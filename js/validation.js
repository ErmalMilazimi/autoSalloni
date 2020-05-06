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
    const nameValue = name.value.trim();
    if (nameValue === '') {
        setErrorFor(name, 'Kjo fushe nuk mund te lihet e zbrazet!');
    }else if(nameValue.length < 3 ){
        setErrorFor(name, 'Emri duhet ti ket meshum se tri shkonja!')
    } else {
        setSuccessFor(name);
    }
}

email.onblur = function (){
    const emailValue = email.value.trim();
    if (emailValue === '') {
        setErrorFor(email, 'Kjo fushe nuk mund te lihet e zbrazet!');
    } else {
        setSuccessFor(email);
    }
}

komenti.onblur = function(){
    const komentiValue = komenti.value.trim();
    if (komentiValue === '') {
        setErrorFor(komenti, 'Kjo fushe nuk mund te lihet e zbrazet!');
    }else {
        setSuccessFor(komenti);
    }
}

function checkInput() {
    const nameValue = name.value.trim();
    const emailValue = email.value.trim();
    const komentiValue = komenti.value.trim();

    if (nameValue === '') {
    }else if(nameValue.length < 3 ){
    } else {
        indexN++;
    }

    if (emailValue === '') {
    } else {
        indexE++;
    }

    if (komentiValue === '') {
    }else {
        indexK++;
    }

    if( indexN > 0 && indexE > 0 && indexK > 0 ){
        window.alert('Mesazhi u dergua me sukses!');
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

// function isEmail(email){
    

//     return /^(([^<>()[]\.,;:s@"]+(.[^<>()[]\.,;:s@"]+)*)|(
//         ".+"))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA
//         -Z-0-9]+.)+[a-zA-Z]{2,}))$/.test(email);
// }