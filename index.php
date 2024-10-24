<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Teste Meconect</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    h2 {
        color: #333;
    }

    form {
        display: inline-block;
        text-align: left;
        background-color: #fff;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 250px;
    }

    label {
        margin-top: 10px;
        display: block;
        color: #555;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 90%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 3px;
    }

    input[type="submit"] {
        width: 90%;
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

    .navbar {
        overflow: hidden;
        display: flex;
        justify-content: flex-end;
        padding: 14px 20px;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        padding: 14px 20px;
    }

    .login-button {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }

    .login-button:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>

    <div class="navbar">
        <div class="login">
            <a href="login.php" class="login-button">Login</a>
        </div>
    </div>

    <h2>Cadastro de Usuário</h2>

    <!-- Formulário de Cadastro -->
    <form action="submitCadastro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="name_user" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email_user" required><br><br>

        <label for="codigo">Código Único:</label>
        <input type="text" id="codigo" name="code_user" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="password_user" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

</body>

</html>