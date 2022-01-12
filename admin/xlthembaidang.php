<?php
    session_start();
    include("./ketnoi.php");
    if (isset($_POST['btn_hs'])) {
    $tbd = $_POST["txt_tbd"];
    $ngayd = $_POST["txt_nd"];
    $loai= $_POST["txt_tl"];
    $noidung= $_POST["txt_noidung"];
    $image = $_FILES["hinh"]["name"];
    $image_tmp_name = $_FILES["hinh"]["tmp_name"];
    $pdf = $_FILES["file_pdf"]["name"];
    $pdf_type = $_FILES["file_pdf"]["type"];
    $pdf_size = $_FILES["file_pdf"]["size"];
    $pdf_tem_loc = $_FILES[ "file_pdf"]["tmp_name"];
    $pdf_store ="./pdf/".$pdf;
    $query = "INSERT INTO tbl_baidang (TenBaiDang, NgayDang, NoiDung, Hinhanh, TheLoai, TaiLieu) VALUES ('$tbd','$ngayd', '$noidung', '$image','$loai', '$pdf')";
    $query_run = mysqli_query($kn, $query);
    move_uploaded_file($image_tmp_name, './upload/'.$image);
    move_uploaded_file($pdf_tem_loc, $pdf_store);
    if($query_run)
    {
        
        $_SESSION['message'] = "Thêm dữ liệu thành công!";
        header('Location: ./QLBD.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Thêm Thất Bại";
        header('Location: ./QLBD.php');
        exit(0);
    }
    // if($anh != null)
	// {
	// 	$path = "upload/";
	// 	$tmp_name = $_FILES['hinh']['tmp_name'];
	// 	$anh = $_FILES['hinh']['name'];
	// 	move_uploaded_file($tmp_name,$path.$anh);
    //     $sql_1 = "insert into tbl_baidang values('".$tbd."', '".$ngayd."', '".$loai."', '".$noidung."','".$anh."' )";
    //     echo "<script language=javascript>
    //     alert('Thêm thành công');
        
    //     </script>";
    // }
    // else{
    //     echo "<script language=javascript>
    //     alert('Thêm không thành công');
        
    //     </script>";
    // }
    
}
?>