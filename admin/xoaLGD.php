<?php
session_start();
include("./ketnoi.php");
$user_xoa=$_REQUEST["ma_tk"]; //Nhận giá trị user từ link xóa của quantri.php
$sql="DELETE FROM tbl_lichgiangday WHERE MaGiangDay='".$user_xoa."'";
$kq=mysqli_query($kn,$sql);
if($kq){
    $_SESSION['status'] = "Xóa dữ liệu thành công";
    header('location: QLLGD.php');
    exit(0);
} 
else{
    $_SESSION['status1'] = "Xóa dữ liệu không thành công";
    header('location: QLLGD.php');
    exit(0);
}   
?>