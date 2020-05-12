document.getElementById('login').addEventListener('click',function(){
    document.querySelector('.popup-model').style.display='flex';
});

document.querySelector('.close').addEventListener('click',function(){
    document.querySelector('.popup-model').style.display='none';
});

const name = document.getElementById('name');
const form = document.getElementById('form');

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

//     if (nameValue === '') {
//         setErrorFor(name, 'Kjo fushe nuk mund te lihet e zbrazet!');
//         return false;
//     }else if(nameValue.length < 3 ){
//         setErrorFor(name, 'Kjo fushe duhet ti kete tre apo meshum shkonja!')
//         return false;
//     } else {
//         setSuccessFor(name);
//         return true;
//     }
// }