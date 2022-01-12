<?php
    session_start();
    include("./ketnoi.php");
    $mgv = $_POST["txt_mgv"];
    $mlh = $_POST["txt_mlh"];
    $mmh = $_POST["txt_mmh"];
    $bd = $_POST["txt_bd"];
    $st = $_POST["txt_st"];
    $th = $_POST["txt_th"];
    $sql_1 = "INSERT INTO tbl_lichgiangday (MaGV, MaLopHoc, MaMonHoc, BuoiDay, SoTiet, TuanHoc) VALUES('".$mgv."', '".$mlh."', '".$mmh."', '".$bd."', '".$st."', '".$th."')";
    $kq = mysqli_query($kn, $sql_1);
    if($kq){
        $_SESSION['status'] = "Thêm thành công";
        header('location: QLLGD.php');
    }
    else
    {
        $_SESSION['status1'] = "Thêm thất bại";
        header('location: QLLGD.php');

    }
?>