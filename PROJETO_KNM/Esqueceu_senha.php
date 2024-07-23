<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recuperação de Senha</title>
        <link rel="stylesheet" href="css/Esqueceu senha.css">
        <link rel="shortcut icon" type="image/png" href="img/logo-removebg-preview.png">
    </head>

    <body>
        <div class="container">
            <img src="img/logo-removebg-preview.png" alt="Logo KNM">
            <h1>Recuperação de Senha</h1>
            <p>Por favor, informe seu e-mail para que possamos enviar um link para a troca de senha.</p>

            <form action="#">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                <span class="error" id="emailError"></span>

                <button type="submit">Enviar Link de Reset</button>
            </form>
        </div>
        <script src="script.js"></script>
    </body>

</html>