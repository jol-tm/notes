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

        echo "<h1>" . $_SESSION['email'] . " Notes</h1>";
    ?>
    <form id="inputNewNote" action="dataAcess/newNote.php" method="post">
        <input type="text" name="noteContent" placeholder="Insert note here..."><button>+</button>
        <form id="formNotes" action="dataAcess/notes.php" method="post">
    </form>
        <?php
            include_once 'dataAcess/conn.php';

            $select = "SELECT content FROM notes WHERE owner = '$owner'";
            $result = $conn->query($select);
            
            while ($fetch = mysqli_fetch_assoc($result)) {
                echo "<div class='note'>" . $fetch['content'] . "</div>";
            }

            $conn->close();
        ?>
    </form>
</body>
</html>