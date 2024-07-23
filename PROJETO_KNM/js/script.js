// script.js
const checkbox = document.querySelector('#termos');
const button = document.querySelector('button[type="submit"]');

checkbox.addEventListener('change', function () {
    button.disabled = !this.checked;
});

document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault();

    let email = document.getElementById('email').value;
    let password = document.getElementById('senha').value;

    let emailError = document.getElementById('emailError');
    let passwordError = document.getElementById('passwordError');

    emailError.textContent = '';
    passwordError.textContent = '';

    let isValid = true;

    // Validação de e-mail
    if (!validateEmail(email)) {
        emailError.textContent = 'Por favor, insira um e-mail válido.';
        emailError.style.display = 'block';
        isValid = false;
    } else {
        emailError.style.display = 'none';
    }

    // Validação de senha
    if (password.length < 8) {
        passwordError.textContent = 'A senha deve ter pelo menos 8 caracteres.';
        passwordError.style.display = 'block';
        isValid = false;
    } else {
        passwordError.style.display = 'none';
    }

    if (isValid) {
        // Enviar o formulário ou realizar a ação desejada
        alert('Login realizado com sucesso!');
        // Você pode redirecionar o usuário ou fazer uma requisição para o servidor aqui
    }
});

function validateEmail(email) {
    // Expressão regular para validar o formato do e-mail
    let re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(email);
}

document.addEventListener('DOMContentLoaded', function () {
    const toggleSenha = document.querySelector("#toggleSenha");
    const senha = document.querySelector("#senha");

    toggleSenha.addEventListener("click", function () {
        const type = senha.type === "password" ? "text" : "password";
        senha.type = type;
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
});