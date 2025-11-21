<?php
// 1. Bao gồm file kết nối CSDL của bạn
include 'db_connect.php'; // (Hoặc tên file kết nối của bạn)

// 2. Lấy ID của con vật từ thanh địa chỉ (URL)
// Ví dụ: view_animal.php?id=5
$animal_id = 1; // Đặt một id mặc định
if (isset($_GET['id'])) {
    $animal_id = $_GET['id'];
}

// 3. Viết câu lệnh SQL để lấy CHỈ 1 con vật
// Dùng Prepared Statements để bảo mật
$sql = "SELECT * FROM animal WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $animal_id); // "i" nghĩa là kiểu integer (số)
$stmt->execute();
$result = $stmt->get_result();

// 4. Lấy dữ liệu
$animal = $result->fetch_assoc();

if (!$animal) {
    echo "Không tìm thấy động vật này!";
    exit; // Dừng lại nếu không có con vật
}

// $conn->close(); // Bạn có thể đóng ở cuối file
?>