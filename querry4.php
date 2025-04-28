<?php
require_once('db_module.php');
$link = NULL;
taoKetNoi($link);
// Truy vấn theo tiêu đề bài viết cụ thể
$sql = "SELECT * FROM `tbl_bantin`
        WHERE tieude = 'Sự thay đổi cách thức mua sắm của khách hàng trong thời kì thương mại điện tử';";
$result = chayTruyVanTraVeDL($link, $sql);
if ($result && mysqli_num_rows($result) > 0) {
   
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID bài viết: " . $row['id_bantin'] . "<br>";
        echo "Tiêu đề: " . $row['tieude'] . "<br>";
       
        echo "Nội dung: " . $row['noidung'] . "<br>";
        echo "Lượt like: " . $row['like'] . "<br>";
        echo "Nguon tin: " . $row['nguontin'] . "<br>";
        echo "Tu khoa : " . $row['tukhoa'] . "<br>";
    }
} else {
    echo "Không tìm thấy bài viết phù hợp.";
}
giaiPhongBoNho($link, $result);
?>
