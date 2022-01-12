

<?php
include("./ketnoi.php");
    session_start();
    if(isset($_POST['suaquyen']))
    {
        $id = $_POST["txt_mq"];
        $ten = $_POST["txt_tq"];
        
    
        $query = "UPDATE tbl_quyen SET TenQuyen ='$ten'  WHERE MaQuyen ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            $_SESSION['status'] = "Cập nhật quyền thành công!";
            header('Location: ./QLQUYEN.php');
            exit(0);
            
        }
        else{
            $_SESSION['status1'] = "Cập nhật quyền không thành công!";
            header('Location: ./QLQUYEN.php');
            exit(0);
           
        }   
    }

?>