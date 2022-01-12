<?php
include("./ketnoi.php");
$user_xoa=$_REQUEST["ma_ma"]; //Nhận giá trị user từ link xóa của quantri.php
$sql="delete from tbl_monan where MaMonAn='".$user_xoa."'";
$kq=mysqli_query($kn,$sql) or die ("Không thể xuất thông tin này ".mysqli_error($kn, $sql));
if($kq){
    $_SESSION['status'] = "Xóa thành công!";
    header("location: QLMA.php");
}
else{
    $_SESSION['status1'] = "Xóa không thành công!";
    header("location: QLMA.php");
}
?>