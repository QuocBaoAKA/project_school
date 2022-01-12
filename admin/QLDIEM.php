<?php 
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_diem a, tbl_monhoc b where a.MaMonHoc = b.MaMonHoc";
    $result = mysqli_query($kn,$sql);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị điểm</title>
</head>
    <style>
        .card_table{
            width: 100%;
            margin: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .table.dataTable {
            width: 100%;
            border: 1px solid #f2f2f2;
            font-size: 15px;
            background-color: #ffffff;
            margin-left: 12px;
        }
        .dataTables_filter{
            margin-top: 15px;
            margin-bottom: 1rem;
            padding-right: 5px;
        }
       .dataTables_length{
           margin-top: 15px;
           padding-left: 5px;
       }
        .table th{
            font-size: 16px;
            background-color: #000;
            color: #fff;
            margin-top: 1rem;
        }
        .table tr{
            border-bottom: 1px solid #f2f2f2;
        }
        .header_qlmh{
            width: 80%;
            height: 80px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qlmh .btn_qlmh{
            width: 133px;
            height: 50px;
            background-color: #0066ff;
            border: none;
            border-radius: 15px;
            margin-top: 15px;
            margin-left: 20px;
            color: #fff;
        }
        .td_sua{
            display: flex;
            height: 84.5px;
        }
        .td_sua .a_sua{
            width: 40px;
            height: 30px;
            background-color: #0066ff;
            text-align: center;
            border-radius: 4px;
            margin-right: 4px;
        }
         .a_sua1{
            width: 40px;
            height: 30px;
            background-color: red;
            text-align: center;
            border-radius: 4px;
        }
         .a_sua, .a_sua1 i{
            color: #fff;
            padding-top: 5px;
            font-size: 16px;
        }
        .btn-them-ns {
            width: 250px;
            height: 40px;
            background-color: #0066ff;
            margin: auto;
            border: none;
            border-radius: 6px;
            color: #fff;
        }
        .excel{
            width: 150px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-top: 15px;
        }
        .btn-excel {
            width: 100px;
            padding: 4px;
            border: none;
            border-radius: 5px;
            background-color: #2dc653;
            color: #fff;
        }
        .btn_qlkhth {
            width: 180px;
            padding: 8px;
            border: none;
            border-radius: 5px;
            background-color: #0066ff;
            margin-bottom: 5px;
            color: #fff;
        }
        .alert-success{
            width: 80%;
            background-color: #D4EDDA !important;
            margin: auto;
            margin-bottom: 10px;
        }
        .excel{
            width: 150px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-top: 15px;
        }
        .btn-excel {
            width: 100px;
            padding: 4px;
            border: none;
            border-radius: 5px;
            background-color: #2dc653;
            color: #fff;
        }  
        .excel-form {
            width: 100%;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            margin: auto;
            margin-bottom: 1rem;
            display: flex;
            border-radius: 5px;
            
        }
        .excel-form label{
            padding-top: 20px;
            padding-bottom: 15px;
            padding-left: 8px;
        }
        .excel-form .form-control {
            width: 400px;
            margin-left: 25px;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .excel-form form {
            display: flex;
        }
        .excel-btn {
            width: 150px;
            height: 40px;
            margin-top: 15px;
            margin-left: 15px;
            border: none;
            border-radius: 5px;
            background-color: #31BE7D;
            color: #fff;
        }
        .alert {
            width: 100%;
        }
    </style>
<body>
    <div class="header_qlkhth">
        <a href="themdiem.php">
            <button class="btn_qlkhth">Thêm</button>
        </a>
    </div>
    <div class="excel-form">
        <label>Thêm file excel: </label>
        <form action="./importexcel2.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="import_file" class="form-control" accept=".xls, .xlsx, .csv" required>
            <button type="submit" name="import_file_btn" class="excel-btn">Import</button>
         </form>
    </div>
    <?php
             if(isset($_SESSION['message']))
                        {
                            echo '<div class="alert alert-success alert-dismissible fade show">
                                  <strong>Thông báo!</strong> ' .$_SESSION['message'].'
                                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                              </div>';
                            unset($_SESSION['message']);
                            
                        }
                if(isset($_SESSION['message1'])){
                    echo '<div class="alert alert-danger alert-dismissible fade show">
                                  <strong>Thông báo!</strong> ' .$_SESSION['message1'].'
                                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                              </div>';
                            unset($_SESSION['message1']);
                }
             ?>
    <div class="card_table">
    <table  class="table datatable">
    <thead  class="table-dark">
        <tr>
        <th scope="col">Mã điểm</th>
        <th scope="col">Mã học sinh</th>
        <th scope="col">Mã lớp học</th>
        <th scope="col">Học Kì</th>
        <th scope="col">Môn học</th>
        <th scope="col">Điểm kiểm tra miệng</th>
        <th scope="col">Điểm kiểm tra giữa kì</th>
        <th scope="col">Điểm kiểm tra cuối kì</th>
        <th scope="col">Điểm tổng kết</th>
        <th scope="col">Kết quả</th>
        <th scope="col">Tác vụ</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
			
			 ?>
					<tr>
                        <td><?php echo $row['MaDiem']; ?> </td>			
						<td><?php echo $row['MaHS']; ?></td>
                        <td><?php echo $row['MaLopHoc']; ?></td>
                        <td><?php echo $row['MaHK']; ?></td>
                        <td><?php echo $row['TenMH']; ?></td>
                        <td><?php echo $row['DiemMieng']; ?></td>
                        <td><?php echo $row['DiemGiuaKy']; ?></td>
                        <td><?php echo $row['DiemCuoiKy']; ?></td>
                        <td><?php echo $row['DiemTongKet']; ?></td>
                        <td><?php echo $row['KetQua']; ?></td>
						<td class="td_sua">
                        <a class="a_sua" href="suadiem.php?Ma=<?php echo $row['MaDiem']; ?>"><i class='bx bxs-edit'></i></a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoadiem.php?id=<?php echo $row['MaDiem']; ?>"><i class='bx bx-trash'></i></a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>
    <form action="./excel.php" method="post">
        <span>Xuất file excel</span>
        <select name="export_file" id="" class="excel">
            <option value="xlsx">XLSX</option>
            <option value="xls">XLS</option>
            <option value="csv">CSV</option>
        </select>
        <button type="submit" name="save-excel" class="btn-excel">Xuất File</button>
    </form>
<?php 
    include("./footer.php");
?>