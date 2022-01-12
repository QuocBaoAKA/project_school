<?php
    session_start();
    include("./ketnoi.php");
    if(isset($_POST['suamh'])){
    $mmh = $_POST["txt_mmh"];
    $tmh = $_POST["txt_tmh"];
    $sotiet = $_POST["txt_st"];
    $query = "UPDATE tbl_monhoc SET TenMH ='$tmh', SoTiet ='$sotiet' WHERE MaMonHoc ='$mmh' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            $_SESSION['status'] = "Cập nhật môn học thành công";
            header('location: QLMH.php');
        }
        else{
            $_SESSION['status1'] = "Cập nhật môn học thất bại";
            header('location: QLMH.php');
           
        }   
    }   
?>