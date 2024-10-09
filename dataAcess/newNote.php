<?php
    include_once 'conn.php';

    session_start();
    $owner = $_SESSION['email'];

    if (!empty($_POST['noteContent']))  {
        $note = $_POST['noteContent'];

        $insert = "INSERT INTO notes (owner, content) VALUES ('$owner', '$note')";

        if ($conn->query($insert)) {
            echo "Noted successfully!";
            header("Location: ../userNotes.php");
        } else {
            echo "Err";
        }
    }

    $conn->close();

?>