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
    <form action="dataAcess/login.php" method="post">
        <h2>Login</h2>
        <input type="text" placeholder="Email" name="email" required>
        <input type="password" placeholder="Senha" name="pass" required>
        <button type="submit">Login</button>
    </form>
    <form action="dataAcess/signup.php" method="post">
        <h2>Sign Up</h2>
        <input type="email" placeholder="Email" name="email" required>
        <input type="password" placeholder="Senha" name="pass" required>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>