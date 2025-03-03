<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // เข้ารหัสรหัสผ่าน
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $date_of_birth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $sql = "INSERT INTO user (username, password, firstname, lastname, phone_number, date_of_birth, address) 
            VALUES ('$username', '$password', '$firstname', '$lastname', '$phone_number', '$date_of_birth', '$address')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "ลงทะเบียนสำเร็จ! กรุณาเข้าสู่ระบบ";
        header("Location: login.php");
    } else {
        $_SESSION['message'] = "เกิดข้อผิดพลาด: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">สมัครสมาชิก</h2>
        <?php if (!empty($_SESSION['message'])): ?>
            <div class="alert alert-warning"><?= $_SESSION['message']; unset($_SESSION['message']); ?></div>
        <?php endif; ?>

        <form action="register.php" method="post">
            <div class="mb-3">
                <label>Username</label>
                <input type="email" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Firstname</label>
                <input type="text" name="firstname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Lastname</label>
                <input type="text" name="lastname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Phone Number</label>
                <input type="number" name="phone_number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Address</label>
                <input type="text" name="address" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>

            
        </form>
    </div>
</body>
</html>
