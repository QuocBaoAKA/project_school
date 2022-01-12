<?php 
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_hocki";
    $result = mysqli_query($kn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị chức vụ</title>
</head>
    <style>
        .card_table{
            width: 90%;
            margin: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .table {
            width: 80%;
            border: 1px solid #f2f2f2;
            margin: auto;
            background-color: #ffffff;
        }
        .header_qlhk{
            width: 80%;
            height: 80px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qlhk .btn_qlhk{
            width: 133px;
            height: 50px;
            background-color: #0066ff;
            border: none;
            border-radius: 15px;
            margin-top: 15px;
            margin-left: 20px;
            color: #fff;
        }
    </style>
<body>
    <div class="header_qlhk">
        <a href="#">
            <button class="btn_qlhk">Thêm</button>
        </a>
    </div>
    <div class="card_table">
    <table class="table align-middle">
    <thead>
        <tr>
        <th scope="col">Mã học kỳ</th>
        <th scope="col">Tên học kỳ</th>
        <th scope="col">Mã khoảng thu</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaHK']; ?> </td>
						<td><?php echo $row['TenHK']; ?></td>
                        <td><?php echo $row['MaKT']; ?></td>
						<td class="td_sua">
              <a class="a_sua" href="suahocki.php?Ma=<?php echo $row['MaHK']; ?>"><i class='bx bxs-edit'></i>Sửa</a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoahocki.php?ma_hk=<?php echo $row['MaHK']; ?>"><i class='bx bx-trash'></i> Xóa</a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>
<?php 
    include("./footer.php");
?>