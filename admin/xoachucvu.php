<?php
session_start();
include("./ketnoi.php");
$user_xoa=$_REQUEST["ma_cv"]; //Nhận giá trị user từ link xóa của quantri.php
$sql="delete from tbl_chucvu where MaChucVu='".$user_xoa."'";
$kq=mysqli_query($kn,$sql) or die ("Không thể xuất thông tin sản phẩm ".mysqli_error($kn, $sql));
if($kq){
    $_SESSION['status'] = "Xóa dữ liệu thành công!";
    header('Location: QLCV.php');
    exit(0);
}
else{
    $_SESSION['status'] = "Xóa dữ liệu không thành công!";
    header('Location: QLCV.php');
    exit(0);
}
?>