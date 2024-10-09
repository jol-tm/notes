<?php
    include_once 'conn.php';

    if (!empty($_POST['email']) && !empty($_POST['pass']))  {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $insert = "INSERT INTO users (email, pass) VALUES ('$email', '$pass')";
        $check = "SELECT (email) FROM users WHERE email = '$email'";

        if ($conn->query($check)->num_rows > 0) {
            echo "Erro ao registrar, esse usuário já pode estar registrado.";
        } else {
            if ($conn->query($insert)) {
                echo "Registrado com sucesso!";
            }
        }
    }

    $conn->close();

?>