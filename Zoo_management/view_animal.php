<?php
session_start();
include 'db_connect.php'; 
$animal_id = 1; // Đặt một ID mặc định để test
if (isset($_GET['id'])) {
    $animal_id = $_GET['id']; // Lấy ID từ (ví dụ: view_animal.php?id=5)
}

// 4. Chuẩn bị và thực thi truy vấn an toàn
$sql = "SELECT * FROM animal WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $animal_id);
$stmt->execute();
$result = $stmt->get_result();
$animal = $result->fetch_assoc();

// 5. Kiểm tra xem có tìm thấy con vật không
if (!$animal) {
    echo "Lỗi: Không tìm thấy động vật với ID này.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chi tiết: <?php echo $animal['ten']; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        /* CSS để tùy chỉnh phần thông tin */
        .animal-card-info {
            margin-bottom: 15px;
            font-size: 1.1em;
        }
        .animal-card-info label {
            font-weight: bold;
            color: #555;
            display: inline-block;
            width: 150px; /* Căn lề cho đẹp */
        }
        .animal-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">

        <div class="col-md-6">
            <h3>Hình ảnh</h3>
            <?php if (!empty($animal['hinh_anh'])): ?>
                <img src="<?php echo $animal['hinh_anh']; ?>" 
                     alt="<?php echo $animal['ten']; ?>" 
                     class="animal-image">
            <?php else: ?>
                <p>(Không có ảnh)</p>
            <?php endif; ?>
        </div>

        <div class="col-md-6">
            <h2>Animal Detail</h2>

            <div class="animal-card-info">
                <label>Name:</label>
                <span><?php echo $animal['ten']; ?></span>
            </div>
            
            <div class="animal-card-info">
                <label>Species:</label>
                <span><?php echo $animal['loai']; ?></span>
            </div>
            
            <div class="animal-card-info">
                <label>Area:</label>
                <span><?php echo $animal['khu_vuc']; ?></span>
            </div>
            
            <div class="animal-card-info">
                <label>Date of birth:</label>
                <span><?php echo $animal['ngay_sinh']; ?></span>
            </div>
            
            <div class="animal-card-info">
                <label>Sex:</label>
                <span><?php echo $animal['gioi_tinh']; ?></span>
            </div>
            
            <div class="animal-card-info">
                <label>Health condition:</label>
                <span><?php echo $animal['suc_khoe']; ?></span>
            </div>

            <a href="dashboard.php" class="btn btn-primary">Quay lại</a>
            
        </div> </div> </div> <?php
// Đóng kết nối
$stmt->close();
$conn->close();
?>

</body>
</html>