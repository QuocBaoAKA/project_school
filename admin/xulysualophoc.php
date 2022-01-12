

<?php
include("./ketnoi.php");
    session_start();
    if(isset($_POST['sualop']))
    {
        $id = $_POST["txt_mlh"];
        $ten = $_POST["txt_tlh"];
        $ss= $_POST["txt_ss"];
       
    
        $query = "UPDATE tbl_lop SET TenLop ='$ten', SiSo ='$ss'  WHERE MaLopHoc ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            // echo "<script language=javascript> alert('Sửa Thành Công'); window.location ='QLLOP.php';
            // </script>";
            $_SESSION['status'] = "Cập nhật lớp học thành công!";
            header('Location: ./QLLOP.php');
            exit(0);
            
        }
        else{
            $_SESSION['status1'] = "Cập nhật lớp học không thành công!";
            header('Location: ./QLLOP.php');
            exit(0);
           
        }   
    }

?>