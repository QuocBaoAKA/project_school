<?php
    session_start();
    include("admin/ketnoi.php");
    if(isset($_POST["btn-gui-ts"])){
    $cm = $_POST["txt-cm"];
    $mail = $_POST["txt-mail"];
    $dc = $_POST["txt-dc"];
    $date = $_POST["txt-date"];
    $sdt = $_POST["txt-sdt"];
    $hs = $_POST["txt-hs"];
    $gt = $_POST["radio-gt"];
    $lc = $_POST["radio-mn"];
    $ghichu = $_POST["txt-gc"];
    $query = "INSERT INTO tbl_phieudangkynhaphoc (HoTenPhuHuynh, SDT, DiaChi, Mail, HoTenHS, NamSinh, GioiTinh, CapHoc, GhiChu) VALUES ('$cm','$sdt', '$dc', '$mail','$hs', '$date', '$gt', '$lc', '$ghichu' )";
    $kq = mysqli_query($kn, $query);
    if($kq)
    {
        // echo "<script>alert('Thêm thông tin thành công. Nhà trường sẽ liên hệ với quý phụ huynh trong thời gian sớm nhất'); window.location='tuyensinhtructuyen.php'</script>";
        $_SESSION['message'] = "Thêm thông tin thành công. Nhà trường sẽ liên hệ với quý phụ huynh trong thời gian sớm nhất!";
        header('Location: tuyensinhtructuyen.php');
        exit(0);
    }
    else
    {
        $_SESSION['message1'] = "Dữ liệu nhập vào không thành công. Vui lòng kiểm tra lại!";
        header('Location: tuyensinhtructuyen.php');
        exit(0);
        // echo "<script>alert('Dữ liệu nhập vào không thành công. Vui lòng kiểm tra lại!'); window.location='tuyensinhtructuyen.php'</script>";
    }
}
?>