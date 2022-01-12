<?php
    include("./ketnoi.php");
    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    if(isset($_POST["save-excel"])){
        $file_ext_name =$_POST["export_file"];
        $fileName = "NhanSu";
        $diem = "SELECT * FROM tbl_nhansu hs, tbl_chucvu sk WHERE sk.MaChucVu = hs.MaChucVu";
        $query_run = mysqli_query($kn, $diem);

        if(mysqli_num_rows($query_run) > 0){
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', 'Mã nhân sự');
            $sheet->setCellValue('B1', 'Họ tên');
            $sheet->setCellValue('C1', 'CMND/CCCD');
            $sheet->setCellValue('D1', 'Giới tính');
            $sheet->setCellValue('E1', 'Quê quán');
            $sheet->setCellValue('F1', 'Điện thoại');
            $sheet->setCellValue('G1', 'Dân tộc');
            $sheet->setCellValue('H1', 'Ngày sinh');
            $sheet->setCellValue('I1', 'Chức vụ');
            $rowCount =2;
            foreach($query_run as $data){
                $sheet->setCellValue('A'.$rowCount, $data['MaNV']);
                $sheet->setCellValue('B'.$rowCount, $data['HoTenNV']);
                $sheet->setCellValue('C'.$rowCount, $data['CMND']);
                $sheet->setCellValue('D'.$rowCount, $data['GioiTinh']);
                $sheet->setCellValue('E'.$rowCount, $data['QueQuan']);
                $sheet->setCellValue('F'.$rowCount, $data['DienThoai']);
                $sheet->setCellValue('G'.$rowCount, $data['DanToc']);
                $sheet->setCellValue('H'.$rowCount, $data['NgaySinh']);
                $sheet->setCellValue('I'.$rowCount, $data['TenDN']);
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