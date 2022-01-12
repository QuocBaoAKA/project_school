<?php
    session_start();
    include("./ketnoi.php");
    $mtd = $_POST["txt_mtd"];
    $tg = $_POST["txt_tg"];
    $ba = $_POST["txt_ba"];
    $tma = $_POST["txt_tma"];
    $slp = $_POST["txt_slp"];
   
   

    $sql = "select * from tbl_thucdon where MaTD = '".$mtd."'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        $_SESSION['message1'] = "Mã đã tồn tại!";
        header('Location: ./QLTD.php');
        exit(0);
    }
    else
    {
        $sql_1 = "insert into tbl_thucdon values('".$mtd."', '".$tg."', '".$ba."', '".$tma."', '".$slp."')";
        $kq_1 = mysqli_query($kn, $sql_1);
        $_SESSION['message'] = "Thêm dữ liệu thành công!";
        header('Location: ./QLTD.php');
        exit(0);

    }
        // echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLTD.php';
        // </script>";
        $_SESSION['message1'] = "Thêm dữ liệu không thành công!";
        header('Location: ./QLTD.php');
        exit(0);
?>