<?php
session_start();
include("./ketnoi.php");
$user_xoa=$_REQUEST["ma_kthu"]; //Nhận giá trị user từ link xóa của quantri.php
$sql="delete from tbl_khoangthu where MaKT='".$user_xoa."'";
$kq=mysqli_query($kn,$sql) or die ("Không thể xuất thông tin này ".mysqli_error($kn, $sql));
if($kq){
    $_SESSION['status'] = "Xóa dữ liệu Thành Công!";
    header("location: QLKHOANGTHU.php");
}
else{
    $_SESSION['status1'] = "Xóa dữ liệu khônh Thành Công!";
    header("location: QLKHOANGTHU.php");
}
?>