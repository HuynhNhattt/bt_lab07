<?php
require_once('db_module.php');
$link = NULL;
taoKetNoi($link);

$sql = "SELECT * 
FROM tbl_bantin 
ORDER BY `like` DESC 
LIMIT 10;
";

$result = chayTruyVanTraVeDL($link, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id_bantin'] . " - Tiêu đề: " . $row['tieude'] . " - Lượt like: " . $row['like'] . "<br>";
    }
} else {
    echo "Không có dữ liệu hoặc truy vấn lỗi.";
}

giaiPhongBoNho($link, $result);
