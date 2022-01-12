<?php 
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_hocsinh hs, tbl_tinhhinhsuckhoe sk WHERE sk.MaHS  = hs.MaHS";
    $query_pro = mysqli_query($kn,$sql) or die("lỗi");
    // $sql = 
    //     "SELECT * FROM tbl_tinhhinhsuckhoe
    //     LEFT JOIN tbl_hocsinh ON tbl_tinhhinhsuckhoe.MaHS = tbl_hocsinh.MaHS
    //     UNION
    //     SELECT * FROM tbl_hocsinh
    //     LEFT JOIN tbl_tinhhinhsuckhoe ON tbl_hocsinh.MaHS = tbl_tinhhinhsuckhoe.MaHS";
    //     // "SELECT MaTHSK, MaHS, HoTenHS, SucKhoe, ChieuCao, CanNang, NhietDo FROM tbl_tinhhinhsuckhoe INNER JOIN tbl_hocsinh ON tbl_tinhhinhsuckhoe.MaHS = tbl_hocsinh.MaHS";
    //     // "SELECT * FROM tbl_tinhhinhsuckhoe AS a INNER JOIN tbl_hocsinh AS b ON(a.MaHS == b.MaHS)";
    //     $query_pro = mysqli_query($kn,$sql) or die("lỗi");
    //     $row_pro = mysqli_fetch_row($query_pro); 
    //         echo "<pre>";
    // print_r($row_pro);
    // die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị sức khỏe</title>
</head>
    <style>
        .card_table{
            width: 90%;
            margin: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .table.dataTable {
            width: 100%;
            border: 1px solid #f2f2f2;  
            background-color: #ffffff;
           
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
            font-size: 12px;
            background-color: #000;
            color: #fff;
            margin-top: 1rem;
        }
        .table tr{
            border-bottom: 1px solid #f2f2f2;
        }
        .header_qlbd{
            width: 80%;
            height: 80px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qlbd .btn_qlbd{
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
            width: 60px;
            height: 30px;
            background-color: #0066ff;
            text-align: center;
            border-radius: 2px;
            margin-right: 8px;
            color: #fff;
        }
         .a_sua1{
            width: 60px;
            height: 30px;
            background-color: #FF3547;
            text-align: center;
            border-radius: 2px;
        }
         .a_sua, .a_sua1 i{
            color: #fff;
            padding-top: 5px;
            font-size: 16px;
        }
        .table-dark tr th{
            font-size: 16px;
        }
        .txt_cn {
            display: -webkit-box;
            width: 50px;
            line-height: 25px;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            background:blue;
        }
        .alert-success{
            margin-bottom: 10px;
            margin-top: 10px;
            width: 90%;
            margin: auto;

        }
        .btn_qlsk {
            width: 150px;
            height: 40px;
            border-radius: 5px;
            border: none;
            background-color: #0066ff;
            color: #fff;
            margin-bottom: 20px;
            margin-left: 3.5rem;
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
            width: 90%;
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
        .form-ex {
            width: 90%;
            margin: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;  
            margin-top: 1rem;
            border-radius: 5px;
        }
        .form-ex select{
            margin-bottom: 15px;
        }
        .alert {
            margin-bottom: 15px;
        }
    </style>
<body>
    <div class="header_qlsk">
        <a href="./themthsk.php">
            <button class="btn_qlsk">Thêm</button>
        </a>
    </div>

    <!-- <div class="excel-form">
        <label>Thêm file excel: </label>
        <form action="./excelEx.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="import_file" class="form-control" required>
            <button type="submit" name="import_file_btn" class="excel-btn">Import</button>
         </form>
    </div> -->

    <?php  
    if(isset($_SESSION['status']))
    {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thông báo !</strong> <?= $_SESSION['status']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
        unset($_SESSION['status']);
    }
    if(isset($_SESSION['status1']))
    {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Thông báo !</strong> <?= $_SESSION['status1']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
        unset($_SESSION['status1']);
    }
?>
    <div class="card_table">
    <table class="table datatable">
    <thead class="table-dark">
        <tr>
        <th scope="col">Mã tình hình sức khỏe</th>
        <th scope="col">Tên học sinh</th>
        <th scope="col">Mã học sinh</th>
        <th scope="col">Sức khỏe</th>
        <th scope="col">Chiều cao</th>
        <th scope="col">Cân nặng</th>
        <th scope="col">Nhiệt độ</th>
        <th scope="col">Tác vụ</th>

        </tr>
    </thead> <?php while ($row = mysqli_fetch_array($query_pro)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaTHSK']; ?> </td>
                        <td><?php echo $row['TenHS']; ?></td>
                        <td><?php echo $row['MaHS']; ?></td>
						<td><?php echo $row['SucKhoe']; ?></td>
                        <td><?php echo $row['ChieuCao']; ?></td>
                        <td><?php echo $row['CanNang']; ?></td>
                        <td><?php echo $row['NhietDo']; ?></td>


						<td class="td_sua">
                            <a class="a_sua" href="suathsk.php?Ma=<?php echo $row['MaTHSK']; ?>"><i class='bx bxs-edit'></i></a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoathsk.php?ma_sk=<?php echo $row['MaTHSK']; ?>"><i class='bx bx-trash'></i> </a>
						</td>
          
					</tr>
                    <?php } ?>
	
    </table>
    </div>

    <form action="./excelEx.php" method="post" class="form-ex">
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