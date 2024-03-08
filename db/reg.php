<?php
require 'c:\xampp\htdocs\nienluan-php\db\connect.php';

if (isset($_POST['btn-reg'])) {
    echo "- Đã đăng ký";
    

    // Kiểm tra sự tồn tại của 'username' và 'password'
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['Password']) ? $_POST['Password'] : ''; // Sửa tên trường 'password'
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : ''; // Sửa tên trường '$address'

    if (!empty($username) && !empty($password)) {
        echo "<pre>";
        print_r($_POST);

        // Mã hóa mật khẩu
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Thêm các trường khác vào câu SQL
        $sql = "INSERT INTO `tbl-user` (`fullname`, `username`, `password`, `email`, `address`) 
                VALUES ('$fullname', '$username', '$hashed_password', '$email', '$address')";

        if ($conn->query($sql) === true) {
            echo "Lưu dữ liệu thành công";
        } else {
            echo "Lỗi: " . $conn->error;
        }
        
    } else {
        echo "Bạn cần điền đầy đủ thông tin trước khi đăng ký";
    }
}
?>
<a href="http://localhost/nienluan-php/dangky.php"> Quay lại trang đăng kí </a>
