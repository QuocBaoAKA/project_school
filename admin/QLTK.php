<?php 
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_taikhoan a, tbl_quyen b WHERE a.MaQuyen = b.MaQuyen";
    $result = mysqli_query($kn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị bài đăng</title>
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
        .header_qltk{
            width: 80%;
            height: 60px;
            background-color: #ffffff;
            border-radius: 8px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qltk .btn_qltk{
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
            width: 40px;
            height: 30px;
            background-color: #0066ff;
            text-align: center;
            border-radius: 5px;
            margin-right: 8px;
            color: #fff;
        }
         .a_sua1{
            width: 40px;
            height: 30px;
            background-color: red;
            text-align: center;
            border-radius: 5px;
        }
         .a_sua, .a_sua1 i{
            color: #fff;
            padding-top: 5px;
            font-size: 16px;
        }
        .alert{
            width: 90%;
            margin: auto;
            margin-bottom: 10px;
        }
    </style>
<body>
    <!-- <div class="header_qltk">
        <a href="themtaikhoan.php">
            <button class="btn_qltk">Thêm</button>
        </a>
    </div> -->

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
    <table id="paginationSimpleNumbers" class="table">
    <thead>
        <tr>
        <th scope="col">Mã tài khoản</th>
        <th scope="col">Tên tài khoản</th>
        <th scope="col">Họ tên</th>
        <th scope="col">Tên quyền</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Giới tính</th>
        <th scope="col">Ngày sinh</th>
        
        <th scope="col">Tác vụ</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaTK']; ?> </td>
                        <td><?php echo $row['TenDangNhap']; ?></td>
                        <td><?php echo $row['HoTen']; ?></td>
                        <td><?php echo $row['TenQuyen']; ?></td>
                        <td><?php echo $row['DiaChi']; ?></td>
                        <td><?php echo $row['SDT']; ?></td>
                        <td><?php echo $row['GioiTinh']; ?></td>
                        <td><?php echo $row['NgaySinh']; ?></td>
						<td class="td_sua">
                            <!-- <a class="a_sua" href="suataikhoan.php?Ma=<?php echo $row['MaTK']; ?>"><i class='bx bxs-edit'></i></a> -->
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoataikhoan.php?ma_tk=<?php echo $row['MaTK']; ?>"><i class='bx bx-trash'></i></a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>
<?php 
    include("./footer.php");
?>