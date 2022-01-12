<?php
    session_start();
    include("./ketnoi.php");
    $mathsk = $_POST["txt_mathsk"];
    $mhs = $_POST["mahocsinh"];
    $sk = $_POST["txt_sk"];
    $chc = $_POST["txt_chc"];
    $cn = $_POST["txt_cn"];
    $nhd = $_POST["txt_nhd"];
    $sql = "select * from tbl_tinhhinhsuckhoe where MaTHSK = '.$mathsk.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã tình hình đã tồn tại');
        </script>";
    }
    else
    {
        $sql_1 = "insert into tbl_tinhhinhsuckhoe values('".$mathsk."','".$mhs."', '".$sk."', '".$chc."', '".$cn."', '".$nhd."' )";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể thêm học kỳ này" .mysqli_error($kn, $sql_1));

    }
    
    $_SESSION["status"] ="Thêm thành công";
    header("location: QLTHSK.php");
    // echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLTHSK.php';
    //     </script>";
?>