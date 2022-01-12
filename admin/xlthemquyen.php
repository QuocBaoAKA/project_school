<?php
    session_start();
    include("./ketnoi.php");
    if(isset($_POST["btn_them_quyen"])){

    $mq = $_POST["txt_mq"];
    $tq = $_POST["txt_tq"];

    $sql = "select * from tbl_quyen where MaQuyen = '".$mq."'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        $_SESSION['status1'] = "Mã quyền đã tồn tại";
        header('location: QLQUYEN.php');
        exit(0);
    }
    else if($kq)
    {
        $sql_1 = "insert into tbl_quyen values('".$mq."', '".$tq."')";
        $kq_1 = mysqli_query($kn, $sql_1);
        $_SESSION['status'] = "Thêm quyền thành công";
        header('location: QLQUYEN.php');

    }
    else{
        $_SESSION['status1'] = "Thêm quyền không thành công";
        header('location: QLQUYEN.php');
    }
}
?>