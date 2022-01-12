<?php
    session_start();
    include("./ketnoi.php");
    $mns = $_POST["mans"];
    $hoten = $_POST["tenns"];
    $cmnd = $_POST["cmnd"];
    $GT = $_POST["gioitinh"];
    $quequan = $_POST["quequan"];
    $dienthoai = $_POST["dt"];
    $ngaysinh = $_POST["ngaysinh"];
    $dantoc = $_POST["dantoc"];
    $chucvu = $_POST["chucvu"];
    $sql = "select * from tbl_nhansu where MaNV = '".$mns."'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        $_SESSION['message2'] = "Mã nhân sự đã tồn tài!";
        header('Location: ./QLNS.php');
        exit(0);
    }
    else
    {
        $sql_1 = "INSERT INTO tbl_nhansu (MaNV, HoTenNV, CMND, GioiTinh, QueQuan, DienThoai,NgaySinh, DanToc, MaChucVu ) values('".$mns."', '".$hoten."', '".$cmnd."', '".$GT."', '".$quequan."', '".$dienthoai."', '".$ngaysinh."', '".$dantoc."','".$chucvu."')";
        $kq_1 = mysqli_query($kn, $sql_1);
        $_SESSION['message'] = "Thêm dữ liệu thành công!";
        header('Location: ./QLNS.php');
        exit(0);
        
    }
    $_SESSION['message1'] = "Thêm dữ liệu không thành công!";
    header('Location: ./QLNS.php');
    exit(0);
?>