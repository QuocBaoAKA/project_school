<?php 
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_khenthuong a, tbl_hocki b where a.MaHK = b.MaHK";
    $result = mysqli_query($kn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị khen thưởng</title>
</head>
    <style>
        .card_table{
            width: 90%;
            margin: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            border-radius: 5px;
        }
        .table {
            width: 100%;
            border: 1px solid #f2f2f2;
            margin: auto;
            background-color: #ffffff;
        }
        .header_qlkhth{
            width: 90%;
            height: 60px;
            background-color: #ffffff;
            border-radius: 8px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qlkhth .btn_qlkhth{
            width: 133px;
            height: 40px;
            background-color: #0066ff;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
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
            color: #fff;
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
        .alert {
            width: 90%;
            margin: auto;
            margin-top: 10px;
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
    </style>
<body>
    <div class="header_qlkhth">
        <a href="themkhenthuong.php">
            <button class="btn_qlkhth">Thêm</button>
        </a>
    </div>
    <?php
             if(isset($_SESSION['status']))
                        {
                            echo '<div class="alert alert-success alert-dismissible fade show">
                                  <strong>Thông báo!</strong> ' .$_SESSION['status'].'
                                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                              </div>';
                            unset($_SESSION['status']);
                            
                        }
                if(isset($_SESSION['status1'])){
                    echo '<div class="alert alert-danger alert-dismissible fade show">
                                  <strong>Thông báo!</strong> ' .$_SESSION['status1'].'
                                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                              </div>';
                            unset($_SESSION['status1']);
                }
             ?>
    <div class="card_table">
    <table  class="table datatable">
    <thead  class="table-dark">
        <tr>
        <th scope="col">Mã khen thưởng</th>
        <th scope="col">Tên khen thưởng</th>
        <th scope="col">Lớp học</th>
        <th scope="col">Loại khen thưởng</th>
        <th scope="col">Tên học kì</th>
        <th scope="col">Tác vụ</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaKT']; ?> </td>
						<td><?php echo $row['TenKT']; ?></td>
                        <td><?php echo $row['MaLopHoc']; ?></td>
                        <td><?php echo $row['LoaiKT']; ?></td>
                        <td><?php echo $row['TenHK']; ?></td>
						<td class="td_sua">
                            <a class="a_sua" href="suakhenthuong.php?Ma=<?php echo $row['MaKT']; ?>"><i class='bx bxs-edit'></i></a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoakhenthuong.php?ma_khth=<?php echo $row['MaKT']; ?>"><i class='bx bx-trash'></i></a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>

    <form action="./excelkt.php" method="post">
        <span style="padding-left: 57px;">Xuất file excel</span>
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