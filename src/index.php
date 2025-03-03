<?php
session_start();
include 'config.php';

if(empty($_SESSION[WP . 'cheacklogin'])) {
    $_SESSION['message'] = 'You are not'
    header("location:{$base_url}/login.php");
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
    
</body>
</html>