<?php
    include_once 'conn.php';

    if (!empty($_GET['id']))  {
        $id = $_GET['id'];
        $delete = "DELETE FROM notes WHERE id = $id";

        if ($conn->query($delete)) {
            echo "Deleted successfully!";
            header("Location: ../userNotes.php");
        } else {
            echo "Err";
        }
    }

    $conn->close();

?>