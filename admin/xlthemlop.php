<?php
    session_start();
    include("./ketnoi.php");
    $mlh = $_POST["txt_mlh"];
    $tlh = $_POST["txt_tlh"];
    $siso = $_POST["txt_ss"];
    $sql = "select * from tbl_lop where MaLopHoc = '".$mlh."'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        // echo "<script language=javascript> alert('Mã lớp học đã tồn tại');
        // </script>";
            $_SESSION['status1'] = "Mã lớp học đã tồn tại. Vui lòng chọn mã khác!";
            header('Location: ./QLLOP.php');
            exit(0);
         }
    else{
        $sql_1 = "insert into tbl_lop values('".$mlh."', '".$tlh."', '".$siso."' )";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể lớp học này" .mysqli_error($kn, $sql_1));     
        $_SESSION['status'] = "Thêm lớp học thành công!";
        header('Location: ./QLLOP.php');
        exit(0);
    }
?>              