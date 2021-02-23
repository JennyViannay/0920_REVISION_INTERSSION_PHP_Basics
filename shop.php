<?php 
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shop</title>
</head>
<body>
    <h1>SHOP</h1>
</body>
</html>