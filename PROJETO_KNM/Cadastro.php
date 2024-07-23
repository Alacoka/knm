<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel="stylesheet" href="css/Cadastro.css">
        <link rel="shortcut icon" type="image/png" href="img/logo-removebg-preview.png">
    </head>

    <body>
        <div class="container">
            <img src="img/logo-removebg-preview.png" id="img" />
            <h1>Cadastre-se</h1>
            <form action="inseriruser.php" id="cadastroForm" method="POST">
                <label for="nome">Nome de usuário:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required placeholder="exemplo@gmail.com">

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required minlength="8">

                <label for="confirmarSenha">Confirmar Senha:</label>
                <input type="password" id="confirmarSenha" name="confirmarSenha" required minlength="8">

                <button type="submit">Gravar</button>
                <span class="error" id="formError" style="display:none; color:red;"></span>
            </form>
        </div>
        <script>
            document.getElementById('cadastroForm').addEventListener('submit', function (event) {
                event.preventDefault();

                let nome = document.getElementById('nome').value.trim();
                let email = document.getElementById('email').value.trim();
                let senha = document.getElementById('senha').value;
                let confirmarSenha = document.getElementById('confirmarSenha').value;
                let formError = document.getElementById('formError');
                let submitButton = document.querySelector('button[type="submit"]');

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

                // Aguarda um momento para garantir que a submissão não ocorra múltiplas vezes
                setTimeout(function () {
                    // Submete o formulário
                    event.target.submit();
                }, 50);
            });
        </script>
    </body>

</html>