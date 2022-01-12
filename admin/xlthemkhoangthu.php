<?php
    session_start();
    include("./ketnoi.php");
    if(isset($_POST["btn_kt"])){

    $mkthu = $_POST["txt_kt"];
    $tkthu = $_POST["txt_tkt"];
    $sotien= $_POST["txt_st"];
    $sql = "select * from tbl_khoangthu where MaKT = '".$mkthu."'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        $_SESSION['status1'] = "Mã khoảng thu đã tồn tại!";
        header("location: QLKHOANGTHU.php");
    }
    else if($kq)
    {
        $sql_1 = "insert into tbl_khoangthu (MaKT, TenKT, SoTien) values('".$mkthu."', '".$tkthu."', '".$sotien."')";
        $kq_1 = mysqli_query($kn, $sql_1);
        $_SESSION['status'] = "Thêm khoảng thu Thành công!";
        header("location: QLKHOANGTHU.php");
   

    }
    else
    {
        $_SESSION['status1'] = "Thêm thất bại!";
        header("location: QLKHOANGTHU.php");

    }
}
?>