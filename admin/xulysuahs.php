
<?php
include("./ketnoi.php");
    session_start();
    if(isset($_POST['suahs']))
    {
        $id = $_POST["txt_mhs"];
        $ths = $_POST["txt_ths"];
        $mlh = $_POST["txt_mlh"];
        $tlh = $_POST["txt_tlh"];
        $gioitinh= $_POST["newField10"];
        $namsinh = $_POST["txt_ns"];
        $diachi = $_POST["txt_dc"];
        $tencha = $_POST["txt_tencha"];
        $nghenghiep = $_POST["txt_ng"];
        $sdt = $_POST["txt_sdt"];
        $tenme = $_POST["txt_me"];
        $nghenghiepme = $_POST["txt_nnm"];
        $phone = $_POST["txt_phone"];
    
        $query = "UPDATE tbl_hocsinh SET TenHS ='$ths', MaLop ='$mlh', TenLop ='$tlh', GioiTinh ='$gioitinh', NamSinh='$namsinh', DiaChiHS='$diachi', HoTenCha='$tencha', NgheNghiep='$nghenghiep', SDT='$sdt', HoTenMe='$tenme', NheNghiepMe='$nghenghiepme', SDTMe='$phone'  WHERE MaHS ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            $_SESSION['status'] = "Sửa dữ liệu thành công";
            header('location: QLHS.php');
            
        }
        else{
            $_SESSION['status1'] = "Sữa dữ liệu không thành công";
            header('location: QLHS.php');
           
        }   
    }

?>