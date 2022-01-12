

<?php
include("./ketnoi.php");
    if(isset($_POST['suahs']))
    {
        $id = $_POST["txt_mhs"];
        $matt = $_POST["txt_mtt"];
        $dd= $_POST["txt_dd"];
        
        $query = "UPDATE tbl_baocaonhanh SET MaTT ='$mtt', DiemDanh ='$dd', WHERE MaBC ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            echo "<script language=javascript> alert('Sửa Thành Công'); window.location ='QLBCN.php';
            </script>";
            
        }
        else{
            echo "<script language=javascript> alert('Sửa báo cáo không thành công'); window.location ='QLBC.php';
            </script>";
           
        }   
    }

?>