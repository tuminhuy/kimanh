<?php
require 'c:\xampp\htdocs\nienluan-php\db\connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Sử dụng Prepared Statements để ngăn chặn SQL injection
    $stmt = $conn->prepare("INSERT INTO `contact_messages` (`name`, `email`, `message`) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo " - Gửi thông tin thành công";
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    $stmt->close();
}
?>
<br>
<a href="http://localhost/nienluan-php/Lienhe.php"> Quay lại trang </a>