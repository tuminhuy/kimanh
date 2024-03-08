<?php
include 'connect.php'; // File chứa kết nối đến cơ sở dữ liệu

// Truy vấn SQL để lấy tất cả sản phẩm
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Kiểm tra và hiển thị danh sách sản phẩm
if ($result->num_rows > 0) {
    while ($product = $result->fetch_assoc()) {
        echo '<div class="product">';
        echo '<h2>' . $product['ten_sp'] . '</h2>';
        echo '<img src="' . $product['link_hinh_anh'] . '" alt="' . $product['ten_sp'] . '">';
        echo '<p>Giá: $' . $product['gia'] . '</p>';
        echo '<p>' . $product['mo_ta'] . '</p>';
        // Thêm các thông tin khác cần hiển thị
        echo '</div>';
    }
} else {
    echo 'Không có sản phẩm.';
}

$conn->close();
?>
