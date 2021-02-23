<?php
session_start();

$user = [
    'email' => 'user@user.com',
    'password' => md5('password')
];

require 'function.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $error = handleForm($_POST, $user);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Hello 
        <?php if (isset($_SESSION['user'])) echo $_SESSION['user']['email'] ?>
    </h1>
    <?php if (isset($_SESSION['user'])) { ?>
        <p>Bienvenue sur votre compte</p>
        <p><a href="shop.php">Shop</a></p>
        <p><a href="logout.php">Logout</a></p>
    <?php } else { ?>
    <form method="POST">
        <label for="email">Email :</label>
        <input type="text" name="email">
        <label for="password">Password :</label>
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
    <p><?php if (!empty($error)) echo $error ?></p>
    <?php } ?>
</body>
</html>