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