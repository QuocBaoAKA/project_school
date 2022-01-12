<?php
    include("./ketnoi.php");
    $mhk = $_POST["txt_mhk"];
    $thk = $_POST["txt_thk"];
    $mkt = $_POST["txt_mkt"];
    $sql = "select * from tbl_hocki where MaHK = '.$mhk.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã học kỳ đã tồn tại');
        </script>";
    }
    else
    {
        $sql_1 = "insert into tbl_hocki values('".$mhk."', '".$thk."', '".$mkt."' )";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể thêm học kỳ này" .mysqli_error($kn, $sql_1));

    }
       
    echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLHK.php';
        </script>";
?>