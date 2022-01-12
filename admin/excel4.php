<?php
    include("./ketnoi.php");
    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    if(isset($_POST["save-excel"])){
        $file_ext_name =$_POST["export_file"];
        $fileName = "danhsachhocsinh";
        $diem = "SELECT * FROM tbl_hocsinh";
        $query_run = mysqli_query($kn, $diem);

        if(mysqli_num_rows($query_run) > 0){
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', 'Mã học sinh');
            $sheet->setCellValue('B1', 'Họ tên');
            $sheet->setCellValue('C1', 'Mã lớp');
            $sheet->setCellValue('D1', 'Tên lớp');
            $sheet->setCellValue('E1', 'Giới tính');
            $sheet->setCellValue('F1', 'Năm sinh');
            $sheet->setCellValue('G1', 'Địa chỉ');
            $sheet->setCellValue('H1', 'Họ tên cha');
            $sheet->setCellValue('I1', 'Nghề nghiệp');
            $sheet->setCellValue('J1', 'Số điện thoại');
            $sheet->setCellValue('K1', 'Họ tên mẹ');
            $sheet->setCellValue('L1', 'Nghề nghiệp');
            $sheet->setCellValue('M1', 'Số điện thoại');
            $rowCount =2;
            foreach($query_run as $data){
                $sheet->setCellValue('A'.$rowCount, $data['MaHS']);
                $sheet->setCellValue('B'.$rowCount, $data['TenHS']);
                $sheet->setCellValue('C'.$rowCount, $data['MaLop']);
                $sheet->setCellValue('D'.$rowCount, $data['TenLop']);
                $sheet->setCellValue('E'.$rowCount, $data['GioiTinh']);
                $sheet->setCellValue('F'.$rowCount, $data['NamSinh']);
                $sheet->setCellValue('G'.$rowCount, $data['DiaChiHS']);
                $sheet->setCellValue('H'.$rowCount, $data['HoTenCha']);
                $sheet->setCellValue('I'.$rowCount, $data['NgheNghiep']);
                $sheet->setCellValue('J'.$rowCount, $data['SDT']);
                $sheet->setCellValue('K'.$rowCount, $data['HoTenMe']);
                $sheet->setCellValue('L'.$rowCount, $data['NheNghiepMe']);
                $sheet->setCellValue('M'.$rowCount, $data['SDTMe']);
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