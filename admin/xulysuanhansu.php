

<?php
    session_start();
    include("./ketnoi.php");
    if(isset($_POST['suanhansu']))
    {
        $id = $_POST["txt_mnv"];
        $ten = $_POST["txt_tnv"];
        $cmnd = $_POST["txt_cmnd"];
        $gt= $_POST["newField10"];
        $qq = $_POST["txt_qq"];
        $dth = $_POST["txt_dth"];
        $dt = $_POST["txt_dt"];
        $ns = $_POST["txt_ns"];
        $mcv = $_POST["txt_mcv"];
       
        $query = "UPDATE tbl_nhansu SET HoTenNV ='$ten', CMND='$cmnd', GioiTinh ='$gt', QueQuan='$qq', DienThoai='$dth', DanToc='$dt', NgaySinh='$ns', MaChucVu='$mcv' WHERE MaNV ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if($query_run){
            $_SESSION['message'] = "Cập nhật dữ liệu thành công!";
            header('Location: ./QLNS.php');
            exit(0);
            
        }
        else{
            $_SESSION['message1'] = "Cập nhật dữ liệu không thành công!";
            header('Location: ./QLNS.php');
            exit(0);
           
        }   
    }

?>