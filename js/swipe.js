const btnLogin = document.querySelector('.btn-signup');
const btnRegister = document.querySelector('.btn-register');

const signup = document.querySelector('.signup');
const register = document.querySelector('.register');

btnLogin.classList.add('.active');
register.classList.add('.hidden');

btnLogin.addEventListener('click', () => {
    btnLogin.classList.add('active');
    btnRegister.classList.remove('active');
    signup.classList.remove('hidden');
    register.classList.add('hidden');
})

btnRegister.addEventListener('click', () => {
    btnLogin.classList.remove('active');
    btnRegister.classList.add('active');
    signup.classList.add('hidden');
    register.classList.remove('hidden');
})