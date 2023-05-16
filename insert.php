<?php
// Kết nối đến database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "account";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Lấy dữ liệu từ form đăng nhập
$username = $_POST['username'];
$password = $_POST['password'];

// Insert dữ liệu vào bảng user
$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Thêm dữ liệu thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
}

// Đóng kết nối
mysqli_close($conn);
?>