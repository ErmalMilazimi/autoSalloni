const name = document.getElementById('name');
const email = document.getElementById('email');
const komenti = document.getElementById('komenti');
const form = document.getElementById('form');
var index = 0;

form.addEventListener('submit', (e) => {
    checkInput();
    if( index < 3) {
        e.preventDefault();
    }
});

function checkInput() {
    const nameValue = name.value.trim();
    const emailValue = email.value.trim();
    const komentiValue = komenti.value.trim();

    if (nameValue === '') {
        setErrorFor(name, 'Kjo fushe nuk mund te lihet e zbrazet!');
    } else {
        setSuccessFor(name);
        index++;
    }

    if (emailValue === '') {
        setErrorFor(email, 'Kjo fushe nuk mund te lihet e zbrazet!');
    } else {
        setSuccessFor(email);
        index++;
    }

    if (komentiValue === '') {
        setErrorFor(komenti, 'Kjo fushe nuk mund te lihet e zbrazet!');
    }else {
        setSuccessFor(komenti);
        index++;
    }

    if( index == 3 ){
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