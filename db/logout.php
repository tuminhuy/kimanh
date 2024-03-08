<?php
session_start();
session_destroy(); // Hủy phiên đăng nhập
header("dangnhap.php"); // Chuyển hướng về trang đăng nhập
exit();
?>