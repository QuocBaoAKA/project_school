

<?php
include("./ketnoi.php");
    session_start();
    if(isset($_POST['suask']))
    {
        $id = $_POST["txt_mhs"];
        $ten = $_POST["mahocsinh"];
        $ss= $_POST["txt_sk"];
        $ssa= $_POST["txt_cc"];
        $ss1= $_POST["txt_tlh"];
        $ss2 =$_POST["txt_ns"];
    
        $query = "UPDATE tbl_tinhhinhsuckhoe SET MaHS ='$ten', SucKhoe ='$ss', ChieuCao ='$ssa', CanNang ='$ss1', NhietDo ='$ss2'  WHERE MaTHSK ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            // echo "<script language=javascript> alert('Sửa Thành Công'); window.location ='QLTHSK.php';
            // </script>";
            $_SESSION['status'] = "Cập nhật dữ liệu thành công";
            header('location: QLTHSK.php');
            
        }
        else{
            $_SESSION['status'] = "Cập nhật dữ liệu không thành công";
            header('location: QLLGD.php');
           
        }   
    }

?>