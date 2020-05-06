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
        setErrorFor(name, 'Emri duhet ti ket meshum se tri shkonja!')
    } else {
        setSuccessFor(name);
        indexN++;
    }
}

function isEmail(){
    const emailValue = email.value.trim();
    let em =  emailValue.split('@');
    let em1 = em[1];

    if (emailValue === '') {
        setErrorFor(email, 'Kjo fushe nuk mund te lihet e zbrazet!');
    }else if(!emailValue.includes('@') || em1.length < 3 ){
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

// function isEmail(email){
    

//     return /^(([^<>()[]\.,;:s@"]+(.[^<>()[]\.,;:s@"]+)*)|(
//         ".+"))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA
//         -Z-0-9]+.)+[a-zA-Z]{2,}))$/.test(email);
// }