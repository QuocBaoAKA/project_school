<?php
    include("./ketnoi.php");
    $mtt = $_POST["txt_mtt"];
    $tentt = $_POST["txt_tentt"];
    $sql = "select * from tbl_trangthai where MaTT = '.$mtt.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã trạng thái đã tồn tại');
        </script>";
    }
    else
    {
        $sql_1 = "insert into tbl_trangthai values('".$mtt."', '".$tentt."')";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể thêm trạng thái này" .mysqli_error($kn, $sql_1));

    }
        echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLTT.php';
        </script>";
?>