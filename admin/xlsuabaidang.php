

<?php
session_start();
include("./ketnoi.php");
    if(isset($_POST['suabd']))
    {
        $id = $_POST["txt_mbd"];
        $tbd = $_POST["txt_tbd"];
        $mbd = $_POST["txt_ngaydang"];
        $theloai = $_POST["txt_tl"];
        $noidung = $_POST["txt_noidung"];
        $pdf_type = $_FILES["txt_tailieu"]["type"];
        $pdf_size = $_FILES["txt_tailieu"]["size"];
        $pdf_tem_loc = $_FILES[ "txt_tailieu"]["tmp_name"];
        $pdf_store ="pdf/".$pdf_type;
        $anh = $_FILES['anh']['name'];
        $anh_tmp_name = $_FILES["anh"]["tmp_name"];
        
        move_uploaded_file($anh_tmp_name, './upload/'.$anh);
        move_uploaded_file($pdf_tem_loc, $pdf_store);
        $query = "UPDATE tbl_baidang SET TenBaiDang ='$tbd', NgayDang ='$mbd', NoiDung ='$noidung', Hinhanh ='$anh', TheLoai ='$theloai', TaiLieu ='$pdf_type'  WHERE MaBaiDang ='$id' ";
        $query_run = mysqli_query($kn, $query);
        if($query_run){
            $_SESSION['message'] = "Thêm dữ liệu thành công!";
            header('Location: ./QLBD.php');
            exit(0);
            
        }
        else{
            $_SESSION['message1'] = "Thêm dữ liệu không thành công!";
            header('Location: ./QLBD.php');
            exit(0);
           
        }   
    }

?>