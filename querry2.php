<?php
require_once('db_module.php');
$link = NULL;
taoKetNoi($link);

// Ví dụ: Liệt kê các bản tin có từ "công nghệ"
$sql = "SELECT * FROM tbl_bantin WHERE tieude LIKE '%công nghệ%'";
$result = chayTruyVanTraVeDL($link, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Tiêu đề: " . $row['tieude'] . "<br>";
    }
} else {
    echo "Không có bản tin phù hợp.";
}

giaiPhongBoNho($link, $result);
?>