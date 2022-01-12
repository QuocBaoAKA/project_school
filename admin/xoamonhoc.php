<?php
session_start();
include("./ketnoi.php");
$user_xoa=$_REQUEST["ma_mh"]; //Nhận giá trị user từ link xóa của quantri.php
$sql="delete from tbl_monhoc where MaMonHoc='".$user_xoa."'";
$kq=mysqli_query($kn,$sql) or die ("Không thể xuất thông tin này ".mysqli_error($kn, $sql));
if($kq){
    $_SESSION['status'] = "Xóa dữ liệu thành công!";
    header('location: QLMH.php');
}
else{
    $_SESSION['status1'] = "Xóa dữ liệu không thành công!";
    header('location: QLMH.php');
}
?>