<?php
    include("./ketnoi.php");
    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    if(isset($_POST["save-excel"])){
        $file_ext_name =$_POST["export_file"];
        $fileName = "Diem_Hocsinh";
        $diem = "SELECT * FROM tbl_diem";
        $query_run = mysqli_query($kn, $diem);

        if(mysqli_num_rows($query_run) > 0){
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', 'Mã học sinh');
            $sheet->setCellValue('B1', 'Mã lớp');
            $sheet->setCellValue('C1', 'Học kỳ');
            $sheet->setCellValue('D1', 'Môn học');
            $sheet->setCellValue('E1', 'Điểm miệng');
            $sheet->setCellValue('F1', 'Điểm giữa kỳ');
            $sheet->setCellValue('G1', 'Điểm cuối kỳ');
            $sheet->setCellValue('H1', 'Điểm tổng kết');
            $sheet->setCellValue('I1', 'Thành tích');
            $rowCount =2;
            foreach($query_run as $data){
                $sheet->setCellValue('A'.$rowCount, $data['MaHS']);
                $sheet->setCellValue('B'.$rowCount, $data['MaLopHoc']);
                $sheet->setCellValue('C'.$rowCount, $data['MaHK']);
                $sheet->setCellValue('D'.$rowCount, $data['MaMH']);
                $sheet->setCellValue('E'.$rowCount, $data['DiemMieng']);
                $sheet->setCellValue('F'.$rowCount, $data['DiemGiuaKy']);
                $sheet->setCellValue('G'.$rowCount, $data['DiemCuoiKy']);
                $sheet->setCellValue('H'.$rowCount, $data['DiemTongKet']);
                $sheet->setCellValue('I'.$rowCount, $data['KetQua']);
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