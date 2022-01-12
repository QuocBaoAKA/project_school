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
            $MaDiem = $row["0"];
            $MaHS = $row["1"];
            $MaLopHoc = $row["2"];
            $MaHK = $row["3"];
            $MaMH = $row["4"];
            $DiemMieng = $row["5"];
            $DiemGiuaKy = $row["6"];
            $DiemCuoiKy = $row["7"];
            $DiemTongKet = $row["8"];
            $KetQua = $row["9"];

            $checkStudent ="SELECT MaDiem FROM tbl_diem WHERE MaDiem = '$MaDiem'";
            $checkStudent_result = mysqli_query($kn, $checkStudent);

            if(mysqli_num_rows($checkStudent_result) > 0){
                $up_query = "UPDATE tbl_diem SET MaHS ='$MaHS', MaLopHoc ='$MaLopHoc', MaHK ='$MaHK', MaMH='$MaMH', DiemMieng ='$DiemMieng', DiemGiuaKy ='$DiemGiuaKy', DiemCuoiKy='$DiemCuoiKy', DiemTongKet='$DiemTongKet', KetQua='$KetQua' WHERE MaDiem ='$MaDiem'";
                $up_query =mysqli_query($kn, $up_query);
                $msg = 1;
            }
            else
            {
                $in_query ="INSERT INTO tbl_diem (MaHS, MaLopHoc, MaHK, MaMH, DiemMieng, DiemGiuaKy, DiemCuoiKy, DiemTongKet, KetQua) VALUES ( '$MaHS', '$MaLopHoc', '$MaHK', '$MaMH', '$DiemMieng', '$DiemGiuaKy', '$DiemCuoiKy', '$DiemTongKet', '$KetQua')";
                $in_result = mysqli_query($kn, $in_query);
                $msg =1;
            }
        }
        if(isset($msg)){
            $_SESSION["message"] ="Thêm file thành công";
            header("location: QLDIEM.php");
        }
        else{
            $_SESSION["smessage1"] ="Thêm file không thành công";
            header("location: QLDIEM.php");
        }
        
    }
    else{
        $_SESSION["message1"] ="File không đúng định dạng";
            header("location: QLDIEM.php");
            exit(0);
         }
    }

?>