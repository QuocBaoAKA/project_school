<?php
    include("./ketnoi.php");
    $mbc = $_POST["txt_mbcn"];
    $mtt = $_POST["txt_mtt"];
    $diemdanh= $_POST["diemdanh"];
    $sql = "select * from tbl_baocaonhanh where MaBC = '.$mbcn.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã báo cáo đã tồn tại');
        </script>";
    }
    else
    {
        $sql_1 = "insert into tbl_baocaonhanh values('".$mbcn."', '".$mtt."', '".$diemdanh."')";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể thêm báo cáo này" .mysqli_error($kn, $sql_1));

    }
        echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLBCN.php';
        </script>";
?>