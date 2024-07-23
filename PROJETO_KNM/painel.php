<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KNM HelpDesk</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type=".png" href="img/logo-removebg-preview.png">
    </head>

    <body>
        <h1>BEM VINDO, <?php echo $_SESSION['nome']; ?></h1>

    </body>