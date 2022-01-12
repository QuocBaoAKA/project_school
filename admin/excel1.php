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
            $MaKT = $row["0"];
            $TenKT = $row["1"];
            $SoTien = $row["2"];

            $checkStudent ="SELECT MaKT FROM tbl_khoangthu WHERE MaKT = '$MaKT'";
            $checkStudent_result = mysqli_query($kn, $checkStudent);

            if(mysqli_num_rows($checkStudent_result) > 0){
                $up_query = "UPDATE tbl_khoangthu SET TenKT ='$TenKT', SoTien ='$SoTien' WHERE MaKT ='$MaKT'";
                $up_query =mysqli_query($kn, $up_query);
                $msg = 1;
            }
            else
            {
                $in_query ="INSERT INTO tbl_khoangthu (MaKT, TenKT, SoTien) VALUES ('$MaKT', '$TenKT', '$SoTien')";
                $in_result = mysqli_query($kn, $in_query);
                $msg =1;
            }
        }
        if(isset($msg)){
            $_SESSION["status"] ="Thêm file thành công";
            header("location: QLKHOANGTHU.php");
        }
        else{
            $_SESSION["status1"] ="Thêm file không thành công";
            header("location: QLKHOANGTHU.php");
        }
        
    }
    else{
        $_SESSION["status1"] ="File không đúng định dạng";
            header("location: QLKHOANGTHU.php");
            exit(0);
         }
    }

?>