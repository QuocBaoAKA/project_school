

<?php
include("./ketnoi.php");
session_start();
    if(isset($_POST['suachucvu']))
    {
        $id = $_POST["txt_mcv"];
        $ten = $_POST["txt_tcv"];
        
    
        $query = "UPDATE tbl_chucvu SET TenDN ='$ten'  WHERE MaChucVu ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            $_SESSION['status'] = "Cập nhật dữ liệu thành công!";
            header('Location: QLCV.php');
            exit(0);
            
        }
        else{
            $_SESSION['status1'] = "Cập nhật dữ liệu không thành công!";
            header('Location: QLCV.php');
            exit(0);
           
        }   
    }

?>