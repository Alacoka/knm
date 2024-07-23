<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/logo-removebg-preview.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                padding-top: 100px;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgb(0, 0, 0);
                background-color: rgba(0, 0, 0, 0.4);
            }

            .modal-content {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
            }

            .close {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: black;
                text-decoration: none;
                cursor: pointer;
            }

            .password-container {
                position: relative;
                width: 100%;
            }

            #senha {
                padding-right: 30px;
                /* Ajuste para dar espaço para o ícone */
            }

            #toggleSenha {
                position: absolute;
                right: 20px;
                top: calc(50% -7px);
                transform: translateY(-50%);
                cursor: pointer;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <img src="img/logo-removebg-preview.png" />
            <h1>KNM</h1>
            <p>Help Desk e Atendimento Online</p>

            <form id="loginForm" action="login.php" method="POST">
                <label for="email"><b>E-mail:</b></label>
                <input type="email" id="email" name="email" required>
                <span class="error" id="emailError"></span>

                <label for="senha"><b>Senha:</b></label>
                <div class="password-container">
                    <input type="password" id="senha" name="senha" required minlength="8">
                    <i class="fas fa-eye" id="toggleSenha"></i>
                </div>
                <span class="error" id="passwordError"></span>

                <a href="Esqueceu_senha.php" class="esqueci-senha">Esqueceu a senha?</a>
                <a href="Cadastro.php" target="_blank" class="Cadastre-se">Cadastre-se</a>

                <button type="submit">Entrar</button>

                <label for="termos">
                    <input type="checkbox" id="termos" name="termos" required>
                    Aceito os <a href="termos.php">Termos de Uso</a>
                </label>
            </form>
        </div>
        <div id="termsModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h1>Termos de Uso</h1>
                <p>
                    <!-- Termos de uso aqui -->
                </p>
            </div>
        </div>

        <script>
            // Pega o modal
            var modal = document.getElementById("termsModal");

            // Pega o link que abre o modal
            var btn = document.querySelector("a[href='termos.php']");

            // Pega o elemento <span> que fecha o modal
            var span = document.getElementsByClassName("close")[0];

            // Quando o usuário clicar no link, abre o modal
            btn.onclick = function (event) {
                event.preventDefault();
                modal.style.display = "block";
            }

            // Quando o usuário clicar no <span> (x), fecha o modal
            span.onclick = function () {
                modal.style.display = "none";
            }

            // Quando o usuário clicar fora do modal, fecha o modal
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            // Adiciona funcionalidade para mostrar/ocultar senha
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
        </script>
    </body>

</html>