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

        echo "<h1>" . $_SESSION['email'] . " Notes</h1>";
    ?>
    <form id="formNotes" action="dataAcess/notes.php" method="post">
        
        <?php

            echo "<div class='note'>conteudo</div>" ;

        ?>
    </form>
</body>
</html>