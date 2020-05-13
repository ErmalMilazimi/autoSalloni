document.getElementById('login').addEventListener('click',function(){
    document.querySelector('.popup-model').style.display='flex';
});

document.querySelector('.close').addEventListener('click',function(){
    document.querySelector('.popup-model').style.display='none';
});

document.getElementById('logp').addEventListener('click',function(){
    document.querySelector('.register-content').classList.add('hidden');
    document.querySelector('.login-content').classList.remove('hidden');

    document.getElementById('logform').addEventListener('submit', (e) => {
        if( !isName() ){
            e.preventDefault();
        }

        name.onblur = function(){
            isName();
        }

        function isName(){
            var emri = document.getElementById('nameLog').value.trim();

            if (emri === '') {
                setErrorFor(name, 'Kjo fushe nuk mund te lihet e zbrazet!');
                return false;
            } else {
                return true;
            }
        }
    });

});

document.getElementById('regp').addEventListener('click',function(){
    document.querySelector('.register-content').classList.remove('hidden');
    document.querySelector('.login-content').classList.add('hidden');
});

function setErrorFor(input, message) {
    const inputKlasa = input.parentElement;
    const small = inputKlasa.querySelector('small');

    small.innerText = message;

    inputKlasa.className = 'inputKlasa error';
}

// function setSuccessFor(input){
//     const inputKlasa = input.parentElement;
//     inputKlasa.className = 'inputKlasa success';
// }


// const name = document.getElementById('name');
// const form = document.getElementById('form');

// form.addEventListener('submit', (e) => {
//     if( !isName() ) {
//         e.preventDefault();
//     }
// });

// name.onblur = function(){
//     isName();
// }

// function isName(){
//     const nameValue = name.value.trim();

    // if (nameValue === '') {
    //     setErrorFor(name, 'Kjo fushe nuk mund te lihet e zbrazet!');
    //     return false;
//     }else if(nameValue.length < 3 ){
//         setErrorFor(name, 'Kjo fushe duhet ti kete tre apo meshum shkonja!')
//         return false;
//     } else {
//         setSuccessFor(name);
//         return true;
//     }
// }