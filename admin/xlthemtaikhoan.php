<?php
    session_start();
    include("./ketnoi.php");
    if(isset($_POST["themtk"])){
    $tdn = $_POST["txt_tdn"];
    $ttk = $_POST["txt_ttk"];
    $mk = md5($_POST["txt_mk"]);
    $dc = $_POST["txt_dc"];
    $sdt = $_POST["txt_sdt"];
    $mail = $_POST["txt_mail"];
    $gioitinh = $_POST["gioitinh"];
    $ns= $_POST["txt_ns"];
    $quyen = $_POST["txt_tq"];
    $sql_1 = "INSERT INTO tbl_taikhoan (TenDangNhap, HoTen, MatKhau, DiaChi, SDT, Email, GioiTinh, NgaySinh, MaQuyen) VALUES('$tdn','$ttk', $mk,'$dc','$sdt','$mail','$gioitinh','$ns','$quyen')";
    $kq = mysqli_query($kn, $sql_1);
    if($kq){
        $_SESSION['status'] = "Thêm tài khoản thành công";
        header('location: QLTK.php');
    }
    else
    {
        $_SESSION['status1'] = "Thêm tài khoản không thành công";
        header('location: QLTK.php');
    }
}
?>