document.getElementById('users').addEventListener('click', function () {
    document.querySelector('.veturatDash').classList.add('hidden');
    document.querySelector('.contactDash').classList.add('hidden');
    document.querySelector('.usersDash').classList.remove('hidden');

});

document.getElementById('veturat').addEventListener('click', function () {
    document.querySelector('.usersDash').classList.add('hidden');
    document.querySelector('.contactDash').classList.add('hidden');
    document.querySelector('.veturatDash').classList.remove('hidden');

});

document.getElementById('contact').addEventListener('click', function () {
    document.querySelector('.veturatDash').classList.add('hidden');
    document.querySelector('.usersDash').classList.add('hidden');
    document.querySelector('.contactDash').classList.remove('hidden');

});