<?php 
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_thucdon hs, tbl_monan sk WHERE sk.MaMonAn = hs.MaMonAn";
    $result = mysqli_query($kn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị thực đơn</title>
</head>
    <style>
        .card_table{
            width: 90%;
            margin: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            border-radius: 8px;
        }
        .table.dataTable {
            width: 100%;
            border: 1px solid #f2f2f2;
            
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
        .header_qllop{
            width: 80%;
            height: 80px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qllop .btn_qllop{
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
            width: 45px;
            height: 30px;
            background-color: #0066ff;
            text-align: center;
            border-radius: 4px;
            margin-right: 8px;
        }
         .a_sua1{
            width: 45px;
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
        .btn_qltd {
            width: 150px;
            height: 45px;
            background-color: #0066ff;
            border: none;
            border-radius: 5px;
            color: #fff;
            margin-bottom: 1rem;
            margin-left: 3.5rem;
        }
        .alert {
            width: 90%;
            margin: auto;
            margin-bottom: 15px;
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
    </style>
<body>
    <div class="header_qltd">
        <a href="themthucdon.php">
            <button class="btn_qltd">Thêm</button>
        </a>
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
    <table class="table datatable">
    <thead>
        <tr>
        <th scope="col">Mã thực đơn</th>
        <th scope="col">Thời gian</th>
        <th scope="col">Buổi ăn</th>
        <th scope="col">Tên món ăn</th>
        <th scope="col">Số lượng phần</th>
     
        <th scope="col">Tác vụ</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaTD']; ?> </td>
						<td><?php echo $row['ThoiGian']; ?></td>
                        <td><?php echo $row['BuoiAn']; ?></td>
                        <td><?php echo $row['TenMonAn']; ?></td>
                        <td><?php echo $row['SoLuongPhan']; ?></td>
                     
						<td class="td_sua">
                        <a class="a_sua" href="suathucdon.php?Ma=<?php echo $row['MaTD']; ?>"><i class='bx bxs-edit'></i></a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoathucdon.php?ma_td=<?php echo $row['MaTD']; ?>"><i class='bx bx-trash'></i></a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>

    <form action="./exceltd.php" method="post">
        <span style="padding-left: 3.5rem;">Xuất file excel</span>
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