<?php
    include_once 'conn.php';

    if (!empty($_GET['id']))  {

        $delete = "DELETE FROM notes WHERE id = '$_GET['id']'";

        if ($conn->query($delete)) {
            echo "Deleted successfully!";
            header("Location: ../userNotes.php");
        } else {
            echo "Err";
        }
    }

    $conn->close();

?>