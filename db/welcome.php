<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: dangnhap.php"); // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mừng</title>
</head>
<body>
    <h2>Xin chào, <?php echo $username; ?>!</h2>
    <p>Chào mừng bạn đã đăng nhập thành công.</p>

    <!-- Các hoạt động sau đăng nhập có thể thực hiện ở đây -->

    <a href="logout.php">Đăng xuất</a>
</body>
</html>
