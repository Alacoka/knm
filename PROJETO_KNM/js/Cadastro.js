document.getElementById('cadastroForm').addEventListener('submit', function (event) {
    event.preventDefault();

    let nome = document.getElementById('nome').value.trim();
    let email = document.getElementById('email').value.trim();
    let senha = document.getElementById('senha').value;
    let confirmarSenha = document.getElementById('confirmarSenha').value;
    let formError = document.getElementById('formError');
    // let submitButton = document.querySelector('button[type="submit"]');

    formError.textContent = '';
    formError.style.display = 'none';

    console.log('Senha:', senha);
    console.log('Confirmar Senha:', confirmarSenha);

    // Validação de senhas
    if (senha !== confirmarSenha) {
        console.log('As senhas não coincidem.');
        formError.textContent = 'As senhas não coincidem.';
        formError.style.display = 'block';
        return;
    } else {
        console.log('As senhas coincidem.');
    }

    // Desativa o botão de submissão para evitar múltiplos envios
    submitButton.disabled = true;
    submitButton.textContent = 'Gravando...';

    // Submete o formulário
    event.target.submit();
});
