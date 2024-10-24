<?php
session_start();
include 'conexao.php';

$email = trim($_POST["email"]);
$senha = trim($_POST["password"]);

$sqlSelect = "SELECT name_user FROM users WHERE email_user = '$email' and password_user ='$senha'";
$result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $_SESSION["usuario_logado"] = $row['name_user'];
    header("Location: paginaPrivada.php");
    exit();
} else {
    echo "Email ou senha invalido";
}

$conn->close();
