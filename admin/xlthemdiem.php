<?php
    session_start();
    include("./ketnoi.php");
    if(isset($_POST["btn_diem"])){
    $mhs = $_POST["txt_mhs"];
    $ths = $_POST["malophoc"];
    $thk = $_POST["txt_thk"];
    $tmh = $_POST["txt_tmh"];
    $dm = $_POST["txt_dm"];
    $dgk = $_POST["txt_dgk"];
    $dck = $_POST["txt_dck"];
    $dtk = $_POST["txt_dtk"];
    $kq = $_POST["txt_kq"];

   $sql_1 = "INSERT INTO tbl_diem (MaHS, MaLopHoc, MaHK, MaMonHoc, DiemMieng, DiemGiuaKy, DiemCuoiKy, DiemTongKet, KetQua) VALUES ( '".$mhs."', '".$ths."', '".$thk."', '".$tmh."', '".$dm."', '".$dgk."', '".$dck."', '".$dtk."', '".$kq."')";
   $query_run = mysqli_query($kn, $sql_1);
    if($query_run){
        $_SESSION['message'] = "Thêm dữ liệu thành công!";
        header('Location: ./QLDIEM.php');
        exit(0);
    }
    else
    {
        $_SESSION['message1'] = "Thêm Thất Bại";
        header('Location: ./QLDIEM.php');
        exit(0);

    }
    }
        
?>