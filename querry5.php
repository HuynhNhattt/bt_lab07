<?php
require_once('db_module.php');
$link = NULL;
taoKetNoi($link);

// Ví dụ: Liệt kê các bản tin có từ "công nghệ"
$sql = "SELECT bt.*, dm.ten_danhmuc FROM tbl_bantin AS bt JOIN tbl_danhmuc AS dm ON bt.id_danhmuc = dm.id_danhmuc WHERE dm.ten_danhmuc IN ('Giáo dục', 'Đời sống')";
$result = chayTruyVanTraVeDL($link, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id_danhmuc'] . " - Tiêu đề: " . $row['tieude'] . " - Ten danh muc: " . $row['ten_danhmuc'] . "<br>";
    }
} else {
    echo "Không có bản tin phù hợp.";
}

giaiPhongBoNho($link, $result);
?>