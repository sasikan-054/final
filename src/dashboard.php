<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>ยินดีต้อนรับ, <?= $_SESSION['user']['username']; ?>!</h1>
    <a href="logout.php">ออกจากระบบ</a>
</body>
</html>
