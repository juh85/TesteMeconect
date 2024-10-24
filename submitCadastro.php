<?php
include 'conexao.php';

$nome = trim($_POST["name_user"]);
$email = trim($_POST["email_user"]);
$codigo = trim($_POST["code_user"]);
$senha = trim($_POST["password_user"]);

$api_url = "https://jsonplaceholder.typicode.com/posts/1";
$response = file_get_contents($api_url);
if ($response === FALSE) {
    die("Erro ao acessar a API.");
}

$data = json_decode($response, true); 
if (isset($data["title"])) {
    $titulo = $data["title"];
} else {
    die("Erro: Campo 'title' não encontrado na resposta da API.");
}

$sqlInsert = "insert into users (name_user, email_user, password_user, title_user, code_user)
values ('$nome', '$email','$senha' , '$titulo', '$codigo')";


if ($conn->query($sqlInsert) === TRUE) {
    echo "Cadastro realizado com sucesso.";
} else {
    echo "Falha ao cadastrar, Tente novamente.";
}

$conn->close();


