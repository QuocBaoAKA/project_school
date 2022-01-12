<?php
    include("./ketnoi.php");
    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    if(isset($_POST["save-excel"])){
        $file_ext_name =$_POST["export_file"];
        $fileName = "danhsachnhaphoc";
        $diem = "SELECT * FROM tbl_phieudangkynhaphoc";
        $query_run = mysqli_query($kn, $diem);

        if(mysqli_num_rows($query_run) > 0){
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', 'Số Thứ tự');
            $sheet->setCellValue('B1', 'Họ tên phụ huynh');
            $sheet->setCellValue('C1', 'Giới tính');
            $sheet->setCellValue('D1', 'Địa chỉ');
            $sheet->setCellValue('E1', 'Email');
            $sheet->setCellValue('F1', 'Năm sinh');
            $sheet->setCellValue('G1', 'Số điện thoại');
            $sheet->setCellValue('H1', 'Họ tên học sinh');
            $sheet->setCellValue('I1', 'Cấp học');
            $sheet->setCellValue('J1', 'Ghi chú');
            $rowCount =2;
            foreach($query_run as $data){
                $sheet->setCellValue('A'.$rowCount, $data['MaDK']);
                $sheet->setCellValue('B'.$rowCount, $data['HoTenPhuHuynh']);
                $sheet->setCellValue('C'.$rowCount, $data['GioiTinh']);
                $sheet->setCellValue('D'.$rowCount, $data['DiaChi']);
                $sheet->setCellValue('E'.$rowCount, $data['Mail']);
                $sheet->setCellValue('F'.$rowCount, $data['NamSinh']);
                $sheet->setCellValue('G'.$rowCount, $data['SDT']);
                $sheet->setCellValue('H'.$rowCount, $data['HoTenHS']);
                $sheet->setCellValue('I'.$rowCount, $data['CapHoc']);
                $sheet->setCellValue('I'.$rowCount, $data['GhiChu']);
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