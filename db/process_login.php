<?php
session_start(); // Bắt đầu phiên đăng nhập

require 'c:\xampp\htdocs\nienluan-php\db\connect.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Thực hiện xác thực đăng nhập, sử dụng phương pháp an toàn như password_hash và password_verify
    $sql = "SELECT * FROM `tbl-user` WHERE username = '$username'";

    $result = $conn->query($sql);

    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        echo "Password from form: $password<br>";
        echo "Password from database: " . $row['password'] . "<br>";

        if (password_verify($password, $row['password'])) {
            // Đăng nhập thành công
            $_SESSION['username'] = $username;
            header("Location: welcome.php"); // Chuyển hướng đến trang chào mừng
            exit();
        } else {
            echo "Sai mật khẩu";
        }
    } else {
        echo "Không tìm thấy tên đăng nhập: $username";
    }
}
?>
