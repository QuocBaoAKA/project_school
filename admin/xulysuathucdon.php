
<?php
include("./ketnoi.php");
    if(isset($_POST['suathucdon']))
    {
        $id = $_POST["txt_mtd"];
        $tg = $_POST["txt_tg"];
        $ba = $_POST["txt_ba"];
        $tma = $_POST["txt_tma"];
        $slp = $_POST["txt_slp"];
     
    
        $query = "UPDATE tbl_thucdon SET ThoiGian ='$tg', BuoiAn ='$ba', MaMonAn ='$tma', SoLuongPhan ='$slp'  WHERE MaTD ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            echo "<script language=javascript> alert('Sửa Thành Công'); window.location ='QLTD.php';
            </script>";
            
        }
        else{
            echo "<script language=javascript> alert('Sửa học sinh không thành công'); window.location ='QLTD.php';
            </script>";
           
        }   
    }

?>