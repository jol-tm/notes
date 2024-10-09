<?php
    include_once 'conn.php';

    if (!empty($_POST['email']) && !empty($_POST['pass']))  {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $check = "SELECT (email) FROM users WHERE email = '$email' AND pass = '$pass'";

        if ($conn->query($check)->num_rows > 0) {

            session_start();
            $_SESSION['email'] = $email;

            echo "Logged in as " . $_SESSION['email'];
            header("Location: ../userNotes.php");
        } else {
            echo "Email or password incorret :c";
        } 
    }

    $conn->close();

?>