<?php
session_start();

if (!isset($_SESSION["usuario_logado"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Página Privada</title>
    <style>
 body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    input[type="submit"] {
        padding: 10px;
        margin-top: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
</head>
<body>

    <h2>Bem-vindo à Página Privada!</h2>
    <p>Você está logado como: <?php echo $_SESSION["usuario_logado"]; ?></p>

    <form action="logout.php" method="POST">
        <input type="submit" value="Sair">
    </form>

</body>
</html>
