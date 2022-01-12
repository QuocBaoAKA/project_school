<?php
    include("./ketnoi.php");
    $mdk = $_POST["txt_mdk"];
    $mtk = $_POST["txt_mtk"];
    $tdn = $_POST["txt_tdn"];
    $gt= $_POST["txt_gt"];
    $dc = $_POST["txt_dc"];
    $ns = $_POST["txt_ns"];
    $htc = $_POST["txt_htc"];
    $nnc = $_POST["txt_nnc"];
    $sdtc = $_POST["txt_sdtc"];
    $htm = $_POST["txt_htm"];
    $nnm = $_POST["txt_nnm"];
    $sdtm = $_POST["txt_sdtm"];
    $gc = $_POST["txt_gc"];
    

    $sql = "select * from tbl_phieudangkynhaphoc where MaDK = '.$mdk.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã phiếu này đã tồn tại');
        </script>";
    }
    else
    {
        $sql_1 = "insert into tbl_phieudangkynhaphoc values('".$mdk."', '".$mtk."', '".$tdn."', '".$gt."', '".$dc."', '".$ns."', '".$htc."', '".$nnc."', '".$sdtc."', '".$htm."', '".$nnm."', '".$sdtm."', '".$gc."')";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể thêm phiếu này" .mysqli_error($kn, $sql_1));

    }
        echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLPDKNH.php';
        </script>";
?>