<?php
session_start();
if(isset($_SESSION['user'])){
    echo "<script> window.location.href='logout';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>welcome <?=$_SESSION['user'];?></h2>
    <a href="logout.php">logout</a>
</body>
</html>