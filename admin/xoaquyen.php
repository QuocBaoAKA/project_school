<?php
session_start();
include("./ketnoi.php");
$user_xoa=$_REQUEST["id"]; //Nhận giá trị user từ link xóa của quantri.php
$sql="delete from tbl_quyen where MaQuyen='".$user_xoa."'";
$kq=mysqli_query($kn,$sql) or die ("Không thể xuất thông tin này ".mysqli_error($kn, $sql));
if($kq){
    $_SESSION['status'] = "Xóa quyền thành công!";
    header('Location: ./QLQUYEN.php');
    exit(0);
}
else{
    $_SESSION['status1'] = "Xóa quyền không thành công!";
    header('Location: ./QLQUYEN.php');
    exit(0);
}
?>