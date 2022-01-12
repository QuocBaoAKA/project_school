

<?php
include("./ketnoi.php");
    session_start();
    if(isset($_POST['suakhenthuong']))
    {
        $id = $_POST["txt_mkt"];
        $ten = $_POST["txt_tkt"];
        $tlh = $_POST["txt_tlh"];
        $lkt= $_POST["txt_lkt"];
        $thk= $_POST["txt_thk"];
    
        $query = "UPDATE tbl_khenthuong SET TenKT ='$ten', MaLopHoc ='$tlh', LoaiKT ='$lkt', MaHK ='$thk'  WHERE MaKT ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            $_SESSION['status'] = "Cập nhật dữ liệu thành công!";
            header('location: QLKHENTHUONG.php');
            
        }
        else{
            $_SESSION['status1'] = "Cập nhật dữ liệu không thành công!";
            header('location: QLKHENTHUONG.php');
           
        }   
    }

?>