<?php
require_once('db_module.php');

$link = NULL;
taoKetNoi($link);

// Câu truy vấn với điều kiện tiêu đề và nội dung bình luận
$sql = "SELECT dg.*, bl.noidung AS 'noidungbinhluan', bt.tieude AS 'tieu de'
        FROM tbl_docgia dg
        JOIN tbl_binhluan bl ON dg.id_docgia = bl.id_docgia
        JOIN tbl_bantin bt ON bl.id_bantin = bt.id_bantin
        WHERE bt.tieude = 'Thoái trào tất yếu của Apple trước cạnh tranh trên thị trường smartphone'
        AND bl.noidung LIKE '%ngốc nghếch%';";

$result = chayTruyVanTraVeDL($link, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Độc giả: " . $row['hoten'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Tiêu đề bài viết: " . $row['tieu de'] . "<br>";
        echo "Bình luận: " . $row['noidungbinhluan'] . "<br><hr>";
    }
} else {
    echo "Không tìm thấy bình luận nào phù hợp.";
}

giaiPhongBoNho($link, $result);
?>
