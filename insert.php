<?php
require_once('db_module.php');
$link = NULL;
taoKetNoi($link);

// Chèn bản tin mới
$sql = "UPDATE tbl_bantin SET tbl_bantin.noidung='AI đang ngày càng có sự tiến bộ phát triển thông minh...' WHERE tbl_bantin.id_bantin=123";
$result = chayTruyVanKhongTraVeDL($link, $sql);

if ($result) {
    echo "Sửa thành công.";
} else {
    echo "Sửa thất bại.";
}

giaiPhongBoNho($link, $result);
?>