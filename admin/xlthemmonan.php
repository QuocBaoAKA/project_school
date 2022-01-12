<?php
    include("./ketnoi.php");
    session_start();
    $mma = $_POST["txt_ma"];
    $tma = $_POST["txt_tma"];
    $tpdd= $_POST["txt_dd"];
    $gia= $_POST["txt_gia"];
    $sql = "select * from tbl_monan where MaMonAn = '".$mma."'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        // echo "<script language=javascript> alert('Mã món ăn đã tồn tại');
        // </script>";
        $_SESSION['status1'] = "Mã món ăn đã tồn tại";
        header('location: QLMA.php');
        exit(0);
    }
    else if($kq)
    {
        $sql_1 = "insert into tbl_monan values('".$mma."', '".$tma."', '".$tpdd."', '".$gia."')";
        $kq_1 = mysqli_query($kn, $sql_1);
        $_SESSION['status'] = "Thêm thành công";
        header('location: QLMA.php');
        exit(0);

    }
    else{
        $_SESSION['status1'] = "Thêm thất bại";
        header('location: QLMA.php');
        exit(0);
    }
        
?>