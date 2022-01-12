<?php
    include("./ketnoi.php");
    $mld= $_POST["txt_mld"];
    $tld= $_POST["txt_tld"];
    $heso= $_POST["txt_heso"];
    $sql = "select * from tbl_loaidiem where MaLoaiDiem= '.$mld.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã loại điểm đã tồn tại');
        </script>";
    }
    else
    {
        $sql_1 = "insert into tbl_loaidiem values('".$mld."', '".$tld."', '".$heso."')";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể thêm loại điểm này" .mysqli_error($kn, $sql_1));

    }
        echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLLD.php';
        </script>";
?>