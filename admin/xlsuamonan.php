
<?php
include("./ketnoi.php");
session_start();
    if(isset($_POST['suamonan']))
    {
        $id = $_POST["txt_ma"];
        $ten = $_POST["txt_tma"];
        $tlh = $_POST["txt_dd"];
        $lkt= $_POST["txt_price"];
    
        $query = "UPDATE tbl_monan SET TenMonAn ='$ten', ThanhPhanDD ='$tlh', Gia ='$lkt' WHERE MaMonAn ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            $_SESSION['status'] = "Cập nhật món ăn thành công!";
            header('Location: ./QLMA.php');
            exit(0);
            
        }
        else{
            $_SESSION['status1'] = "cập nhật món ăn không thành công!";
            header('Location: ./QLMA.php');
            exit(0);
           
        }   
    }

?>