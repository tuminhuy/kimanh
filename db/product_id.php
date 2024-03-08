<?php
include 'connect.php'; // Đảm bảo rằng bạn đã kết nối đến cơ sở dữ liệu

// Kiểm tra xem có tham số product_id hay không
if (isset($_GET['product_id'])) {
    // Sử dụng biến $conn từ file connect.php
    $product_id = mysqli_real_escape_string($conn, $_GET['product_id']);

    // Thực hiện truy vấn cơ sở dữ liệu để lấy thông tin sản phẩm
    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $product = $result->fetch_assoc();
            // Hiển thị thông tin chi tiết của sản phẩm
            echo '<h1>' . $product['ten_sp'] . '</h1>';
            echo '<p>Giá: ' . $product['gia'] . '</p>';
            echo '<p>Mô tả: ' . $product['mo_ta'] . '</p>';
            echo '<img src="' . $product['link_hinh_anh'] . '" alt="' . $product['ten_sp'] . '">';
            echo '<audio controls>';
            echo '  <source src="' . $product['link_audio'] . '" type="audio/mp3">';
            echo '  Your browser does not support the audio element.';
            echo '</audio>';
            // ... Hiển thị các thông tin khác của sản phẩm
        } else {
            echo "Không tìm thấy sản phẩm.";
        }
    } else {
        echo "Lỗi truy vấn: " . $conn->error;
    }
} else {
    echo "Không có thông tin sản phẩm.";
}

$conn->close();
?>
