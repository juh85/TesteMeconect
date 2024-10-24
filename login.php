<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
 body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
        text-align: center;
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
    </style>
</head>

<body>
    <h2>Login de Usuário</h2>

    <form action="validaLogin.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>

</html>