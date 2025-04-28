
<?php
require_once('db_module.php');
$link = NULL;
taoKetNoi($link);

// Chèn bản tin mới
$sql = "INSERT INTO tbl_binhluan (tieude, noidung, `like`, thoigian, id_bantin, id_docgia)
VALUES ('Bình luận thêm', 'Bài viết rất hay, Samsung đang trên đà phát triển...', 12, NOW(), 1, 1);
";
$result = chayTruyVanKhongTraVeDL($link, $sql);

if ($result) {
    echo "Chèn binh luan thành công.";
} else {
    echo "Chèn binh luan thất bại.";
}

giaiPhongBoNho($link, $result);
?>