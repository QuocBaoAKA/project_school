<?php
    include("./ketnoi.php");
    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    if(isset($_POST["save-excel"])){
        $file_ext_name =$_POST["export_file"];
        $fileName = "thucdon_Hocsinh";
        $diem = "SELECT * FROM tbl_thucdon a, tbl_monan b WHERE a.MaMonAn = b.MaMonAn";
        $query_run = mysqli_query($kn, $diem);

        if(mysqli_num_rows($query_run) > 0){
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', 'Mã thực đơn');
            $sheet->setCellValue('B1', 'Thời gian');
            $sheet->setCellValue('C1', 'Buổi ăn');
            $sheet->setCellValue('D1', 'Món ăn');
            $sheet->setCellValue('E1', 'Số lượng');
            $rowCount =2;
            foreach($query_run as $data){
                $sheet->setCellValue('A'.$rowCount, $data['MaTD']);
                $sheet->setCellValue('B'.$rowCount, $data['ThoiGian']);
                $sheet->setCellValue('C'.$rowCount, $data['BuoiAn']);
                $sheet->setCellValue('D'.$rowCount, $data['TenMonAn']);
                $sheet->setCellValue('E'.$rowCount, $data['SoLuongPhan']);
               
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