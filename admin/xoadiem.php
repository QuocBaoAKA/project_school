<?php
session_start();
include("./ketnoi.php");
        $user_xoa=$_REQUEST["id"]; //Nhận giá trị user từ link xóa của quantri.php
        $query = "DELETE FROM tbl_diem WHERE MaDiem ='$user_xoa' ";
        $result = mysqli_query($kn, $query); 
        if($result)
        {
            $_SESSION['message'] = "Xóa dữ liệu thành công";
            header('location: QLDIEM.php');
        } 
        else
        {
            $_SESSION['message1'] = "Xóa dữ liệu không thành công!";
            header('location: QLDIEM.php');
        }
?>