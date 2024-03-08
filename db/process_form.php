<?php
include 'connect.php'; // Kết nối đến cơ sở dữ liệu

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $location = $_POST['location'];
    $num_people = $_POST['num_people'];
    $departure_date = $_POST['departure_date'];
    $return_date = $_POST['return_date'];

    // Chuẩn bị truy vấn SQL
    $sql = "INSERT INTO travel_data (location, num_people, departure_date, return_date) VALUES ('$location', $num_people, '$departure_date', '$return_date')";

    // Thực hiện truy vấn
    if ($conn->query($sql) === TRUE) {
        echo " - Đăng ký thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

// Đóng kết nối
$conn->close();
?>
<a href="http://localhost/nienluan-php/index.php"> Quay lại Trang chủ</a>