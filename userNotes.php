<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Notes</title>
</head>
<body>
    <?php
        session_start();
        $owner = $_SESSION['email'];

        if (empty($owner)){
            header("Location: index.php");
        }

        echo "<h1 id='userTitle'>" . $_SESSION['email'] . " Notes</h1>";
    ?>
    <form id="inputNewNote" action="dataAcess/newNote.php" method="post">
        <input max="255" type="text" name="noteContent" placeholder="Insert note here..." required><button>+</button>
        <form id="formNotes" action="dataAcess/notes.php" method="post">
    </form>
    <form action="" method="post">
        <?php
            include_once 'dataAcess/conn.php';

            $select = "SELECT content, id FROM notes WHERE owner = '$owner'";
            $result = $conn->query($select);
            
            while ($fetch = mysqli_fetch_assoc($result)) {
                $content = $fetch['content'];
                $id = $fetch['id'];
                echo "<div class='note'>$content<a class='deleteBtn' href='dataAcess/deleteNote.php?id=$id'>X</a></div>";
            }

            $conn->close();
        ?>
    </form>
</body>
</html>