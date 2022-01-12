

<?php
    include("./ketnoi.php");
    session_start();
    if(isset($_POST['suataikhoan']))
    {
        $id = $_POST["txt_mtk"];
        $tendn = $_POST["txt_tdn"];
        $tentk = $_POST["txt_ttk"];
        $quyen = $_POST["txt_tq"];
        $dc = $_POST["txt_dc"];
        $sdt = $_POST["txt_sdt"];
        $gt = $_POST["txt_gt"];
        $ns = $_POST["txt_ns"];
    
        $query = "UPDATE tbl_taikhoan SET TenDangNhap ='$tendn', HoTen ='$tentk', DiaChi ='$dc', SDT ='$sdt', GioTinh ='$gt', NgaySinh ='$ns', MaQuyen ='$quyen' WHERE MaTK ='$id'";
        $query_run = mysqli_query($kn, $query);
        if($query_run){
            $_SESSION['status'] = "Cập nhật tài khoản thành công!";
            header('Location: QLTK.php');
            exit(0);   
        }
        else{
            $_SESSION['status1'] = "Cập nhật tài khoản không thành công!";
            header('Location: QLTK.php');
            exit(0);  
        }   
    }

?>