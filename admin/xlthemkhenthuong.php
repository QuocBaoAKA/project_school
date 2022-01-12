<?php
    session_start();
    include("./ketnoi.php");
    $mkt = $_POST["txt_mkt"];
    $tkt = $_POST["txt_tkt"];
    $tlh = $_POST["txt_tlh"];
    $lkt= $_POST["txt_lkt"];
    $thk= $_POST["txt_thk"];
   

    $sql = "select * from tbl_khenthuong where MaKT = '".$mkt."'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        $_SESSION['status1'] = "Mã khen thưởng đã tồn tại!";
        header('location: QLKHENTHUONG.php');
    }
    else
    {
        $sql_1 = "insert into tbl_khenthuong values('".$mkt."', '".$tkt."', '".$tlh."', '".$lkt."', '".$thk."')";
        $kq_1 = mysqli_query($kn, $sql_1);
        if($kq_1){
            $_SESSION['status'] = "Thêm dữ liệu thành công";
             header('location: QLKHENTHUONG.php');
        }
        else{
            $_SESSION['status1'] = "Thêm dữ liệu không thành công";
            header('location: QLKHENTHUONG.php');
        }

    }
       
?>