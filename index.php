<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Teste Meconect</title>
    <style>
    body {
        text-align: center;
    }

    form {
        display: inline-block;
        text-align: left; 
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 250px;
    }

    label {
        margin-top: 10px;
        display: block;
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
        border-radius: 5px;
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