<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type=".png" href="img/logo-removebg-preview.png">

    </head>

    <body>
        <div class="container">
            <img src="img/logo-removebg-preview.png" />
            <h1>KNM</h1>
            <p>Help Desk e Atendimento Online</p>

            <form action="#">
                <label for="email"><b>E-mail:</b></label>
                <input type="email" id="email" name="email" required>
                <span class="error" id="emailError"></span>

                <label for="senha"><b>Senha:</b></label>
                <input type="password" id="senha" name="senha" required minlength="8">
                <span class="error" id="passwordError"></span>


                <a href="Esqueceu_senha.php" class="esqueci-senha">Esqueceu a senha?</a>
                <a href="Cadastro.php" target="_blank" class="Cadastre-se">Cadastre-se</a>

                <button type="submit">Conectar</button>


                <label for="termos">
                    <input type="checkbox" id="termos" name="termos" required>
                    Aceito os <a href="termos.php">Termos de Uso</a>
                </label>

            </form>
        </div>
        <!-- <div class="mensagem">
            <label for="Bemvindo">Bem-vindo(a) ao KNM </label>
        </div> -->
        <!-- <div class="positivo">
            <label for="Chamados"><br>Que os vossos chamados não tenham B.O hoje, amém!<br>:)</br></label>
            </div> -->
        <script src="cript.js"></script>
    </body>

</html>