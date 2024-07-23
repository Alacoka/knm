<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel="shortcut icon" type="image/png" href="img/logo-removebg-preview.png">
        <link rel="stylesheet" href="">
    </head>

    <body>
        <?php
        if ($_POST["nome"] != "") {
            include_once "factory/conexao.php";
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $senha_criptografada = password_hash($senha, PASSWORD_BCRYPT);
            $sql = "insert into tbuser(nome,email,senha)
       values('$nome','$email','$senha')";
            $query = mysqli_query($conn, $sql);
            echo "
                
                <main class='container'>
                <img src='img/logo-removebg-preview.png' />
                Dados gravados com sucesso!<br/>";
            echo "<form action='index.php'>
                    <button type='submit'>Voltar</button></main>";
        } else {
            echo "Dados não cadastrados!";
        }
        ?>
        <style>
            body {
                font-family: sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-image: linear-gradient(to right, #00008d, #367cdd);
                user-select: none;
            }

            .container {
                width: 400px;
                /* margin-top: 250px;
                margin-left: 485px; */
                display: flex;
                flex-direction: column;
                font-size: 25px;
                justify-content: center;
                align-items: center;
                padding: 30px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 15px 15px 20px rgb(0, 0, 0);
                text-align: center;
            }

            button[type="submit"] {
                background-color: #040672;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-bottom: 10px;
                width: 200px;
                margin-top: 17px;
            }

            button[type="submit"]:disabled {
                opacity: 0.5;
                cursor: default;

            }

            img {
                width: 100px;
                display: block;
                height: auto;
            }
        </style>
    </body>

</html>