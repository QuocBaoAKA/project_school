<?php
    include("./ketnoi.php");
    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    if(isset($_POST["save-excel"])){
        $file_ext_name =$_POST["export_file"];
        $fileName = "khenthuong_Hocsinh";
        $diem = "SELECT * FROM tbl_khenthuong a, tbl_hocki b WHERE a.MaHK = b.MaHK";
        $query_run = mysqli_query($kn, $diem);

        if(mysqli_num_rows($query_run) > 0){
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', 'Mã khen thưởng');
            $sheet->setCellValue('B1', 'Tên học sinh');
            $sheet->setCellValue('C1', 'Lớp');
            $sheet->setCellValue('D1', 'Loại khen thưởng');
            $sheet->setCellValue('E1', 'Học kì');
            $rowCount =2;
            foreach($query_run as $data){
                $sheet->setCellValue('A'.$rowCount, $data['MaKT']);
                $sheet->setCellValue('B'.$rowCount, $data['TenKT']);
                $sheet->setCellValue('C'.$rowCount, $data['MaLopHoc']);
                $sheet->setCellValue('D'.$rowCount, $data['LoaiKT']);
                $sheet->setCellValue('E'.$rowCount, $data['TenHK']);
                $rowCount++;
            }
            if($file_ext_name == 'xlsx'){
                $writer = new Xlsx($spreadsheet);
                $final_filename = $fileName.'.xlsx';
            }elseif($file_ext_name =='xls') {
                $writer = new Xls($spreadsheet);
                $final_filename = $fileName.'.xls';
            }elseif($file_ext_name =='csv') {
                $writer = new Csv($spreadsheet);
                $final_filename = $fileName.'.csv';
            }
            // $writer->save($final_filename);
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet ');
            header('Content-Disposition: attactment; fileName="'.urlencode($final_filename).'" ');
            $writer->save('php://output');
        }
        else {
            // echo "<script>alert('Xuất thành công'); window.location ='./QLDIEM.php'</script>";
            exit(0);
        }
    }
    

?>