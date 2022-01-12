<?php
    include("./ketnoi.php");
    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    if(isset($_POST["save-excel"])){
        $file_ext_name =$_POST["export_file"];
        $fileName = "danhsach_suckhoe_Hocsinh";
        $sql = "select * from tbl_hocsinh hs, tbl_tinhhinhsuckhoe sk WHERE sk.MaHS  = hs.MaHS";
        $query_run = mysqli_query($kn, $sql);

        if(mysqli_num_rows($query_run) > 0){
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', 'ID');
            $sheet->setCellValue('B1', 'Tên học sinh');
            $sheet->setCellValue('C1', 'Mã lớp');
            $sheet->setCellValue('D1', 'Sức khỏe');
            $sheet->setCellValue('E1', 'Chiều cao');
            $sheet->setCellValue('F1', 'Cân nặng');
            $sheet->setCellValue('G1', 'Nhiệt độ');
            $rowCount =2;
            foreach($query_run as $data){
                $sheet->setCellValue('A'.$rowCount, $data['MaTHSK']);
                $sheet->setCellValue('B'.$rowCount, $data['TenHS']);
                $sheet->setCellValue('C'.$rowCount, $data['MaHS']);
                $sheet->setCellValue('D'.$rowCount, $data['SucKhoe']);
                $sheet->setCellValue('E'.$rowCount, $data['ChieuCao']);
                $sheet->setCellValue('F'.$rowCount, $data['CanNang']);
                $sheet->setCellValue('G'.$rowCount, $data['NhietDo']);
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