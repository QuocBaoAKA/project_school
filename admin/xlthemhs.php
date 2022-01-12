<?php
    session_start();
    include("./ketnoi.php");
    $mhs = $_POST["txt_mhs"];
    $ths = $_POST["txt_ths"];
    $mlh = $_POST["malophoc"];
    $tlh = $_POST["txt_tlh"];
    $gioitinh= $_POST["gioitinh"];
    $namsinh = $_POST["txt_ns"];
    $diachi = $_POST["txt_dc"];
    $tencha = $_POST["txt_tencha"];
    $nghenghiep = $_POST["txt_ng"];
    $sdt = $_POST["txt_sdt"];
    $tenme = $_POST["txt_me"];
    $nghenghiepme = $_POST["txt_nnm"];
    $phone = $_POST["txt_phone"];

    $sql = "select * from tbl_hocsinh where MaHS = '.$mhs.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã học sinh đã tồn tại');
        </script>";
    }
    else
    {
        $sql_1 = "insert into tbl_hocsinh values('".$mhs."', '".$ths."', '".$mlh."', '".$tlh."', '".$gioitinh."', '".$namsinh."', '".$diachi."', '".$tencha."', '".$nghenghiep."', '".$sdt."', '".$tenme."', '".$nghenghiepme."', '".$phone."')";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể thêm học sinh này" .mysqli_error($kn, $sql_1));

    }
        // echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLHS.php';
        // </script>";
        $_SESSION['status'] = "Thêm thành công";
        header('location: QLHS.php');
?>