<?php
$host = "localhost"; // หรือที่อยู่ของเซิร์ฟเวอร์
$user = "root"; // ชื่อผู้ใช้ MySQL
$pass = ""; // รหัสผ่าน MySQL (ถ้าว่างให้ใช้ "")
$dbname = "webaapplication"; // ชื่อฐานข้อมูลของคุณ

$conn = mysqli_connect($host, $user, $pass, $dbname);

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
