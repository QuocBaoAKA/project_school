<?php
    session_start();
    include("./ketnoi.php");
    $mcv = $_POST["txt_mcv"];
    $tcv = $_POST["txt_tcv"];

    $sql = "select * from tbl_chucvu where MaChucVu = '".$mcv."'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        // echo "<script language=javascript> alert('Mã khen thưởng đã tồn tại');
        // </script>";
        $_SESSION['status1'] = "Mã chức vụ đã tồn tại";
        header('location: QLCV.php');
        exit(0);
    }
    else if($kq){

    
        $sql_1 = "insert into tbl_chucvu values('".$mcv."', '".$tcv."')";
        $kq_1 = mysqli_query($kn, $sql_1);
        $_SESSION['status'] = "Thêm thành công";
        header('location: QLCV.php');
        exit(0);
    }
    else{
        $_SESSION['status1'] = "Thêm không thành công";
        header('location: QLCV.php');
        exit(0);
    }  
        
    
?>