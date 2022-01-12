<?php
session_start();
//upload.php
require("./ketnoi.php");
include './vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
if(isset($_POST["import_file_btn"]))
    {
        $allowed_ext = array('xls','csv', 'xlsx');
        $fileName = $_FILES["import_file"]["name"];
        $checking = explode(".", $fileName);
        $file_ext =end($checking);
        if(in_array($file_ext, $allowed_ext))
        {   

        $targetPath =$_FILES["import_file"]["tmp_name"];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($targetPath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        foreach($data as $row){
            $MaHS = $row["0"];
            $TenHS = $row["1"];
            $MaLop = $row["2"];
            $TenLop = $row["3"];
            $GioiTinh = $row["4"];
            $NamSinh = $row["5"];
            $DiaChiHS = $row["6"];
            $HoTenCha = $row["7"];
            $NgheNghiep = $row["8"];
            $SDT = $row["9"];
            $HoTenMe = $row["10"];
            $NheNghiepMe = $row["11"];
            $SDTMe = $row["12"];

            $checkStudent ="SELECT MaHS FROM tbl_hocsinh WHERE MaHS = '$MaHS'";
            $checkStudent_result = mysqli_query($kn, $checkStudent);

            if(mysqli_num_rows($checkStudent_result) > 0){
                $up_query = "UPDATE tbl_hocsinh SET TenHS ='$TenHS', MaLop ='$MaLop', TenLop ='$TenLop', GioiTinh='$GioiTinh', NamSinh='$NamSinh', DiaChiHS ='$DiaChiHS', HoTenCha='$HoTenCha', NgheNghiep='$NgheNghiep', SDT='$SDT', HoTenMe='$HoTenMe', NheNghiepMe='$NheNghiepMe', SDTMe='$SDTMe' WHERE MaHS ='$MaHS'";
                $up_query =mysqli_query($kn, $up_query);
                $msg = 1;
            }
            else
            {
                $in_query ="INSERT INTO tbl_hocsinh (MaHS, TenHS, MaLop, TenLop, GioiTinh, NamSinh, DiaChiHS, HoTenCha, NgheNghiep, SDT, HoTenMe, NheNghiepMe, SDTMe) VALUES ('$MaHS', '$TenHS', '$MaLop', '$TenLop', '$GioiTinh', '$NamSinh', '$DiaChiHS', '$HoTenCha', '$NgheNghiep', '$SDT', '$HoTenMe', '$NheNghiepMe', '$SDTMe')";
                $in_result = mysqli_query($kn, $in_query);
                $msg =1;
            }
        }
        if(isset($msg)){
            $_SESSION["message"] ="Thêm file thành công";
            header("location: QLHS.php");
        }
        else{
            $_SESSION["smessage1"] ="Thêm file không thành công";
            header("location: QLHS.php");
        }
        
    }
    else{
        $_SESSION["message1"] ="File không đúng định dạng";
            header("location: QLHS.php");
            exit(0);
         }
    }

?>