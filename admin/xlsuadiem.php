<?php
    session_start();
    require("./ketnoi.php");
    if(isset($_POST['suadiem']))
    {    
        $madiem = $_POST['txt_mdiem'];
        $mahs = $_POST['mahs'];
        $lop = $_POST['malop'];
        $hocky = $_POST['hocky'];
        $monhoc = $_POST['monhoc'];
        $diem = $_POST['txt_dm'];
        $diemgk = $_POST['txt_dgk'];
        $diemck = $_POST['txt_ck'];
        $diemtk = $_POST['txt_tk'];
        $kq = $_POST['txt_kq'];

        $query = " UPDATE tbl_diem SET MaHS='$mahs', MaLopHoc='$lop', MaHK='$hocky',MaMonHoc='$monhoc', DiemMieng='$diem', DiemGiuaKy='$diemgk', DiemCuoiKy='$diemck', DiemTongKet='$diemtk', KetQua='$kq' WHERE MaDiem='$madiem' ";
        $result = mysqli_query($kn, $query); 
        if($result)
        {
            $_SESSION['message'] = "Cập nhât dữ liệu thành công!";
            header('Location: ./QLDIEM.php');
            exit(0);
        } 
        else
        {
            $_SESSION['message1'] = "Cập nhật dữ liệu thất bại";
            header('Location: ./QLDIEM.php');
            exit(0);
        }
    }

?>