<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Notes</title>
</head>
<body>
    <h1>Welcome to Notes!</h1>
    <form action="" method="post">
        <input type="text" placeholder="Email" name="email" required>
        <input type="password" placeholder="Senha" name="pass" required>
        <button type="submit">Entrar</button>
    </form>
    <?php
        include_once 'conn.php';

        if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pass']) && !empty($_POST['pass'])) {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
        }

        $insert = "INSERT INTO users (email, pass) VALUES ('$email', '$pass')";
        $check = "SELECT (email) FROM users WHERE email = '$email'";

        if ($conn->query($check)->num_rows > 0) {
            echo "Erro ao registrar, esse usuário já pode estar registrado.";
        } else {
            if ($conn->query($insert)) {
                echo "Registrado com sucesso!";
            }
        }
        $conn->close();

    ?>
</body>
</html>