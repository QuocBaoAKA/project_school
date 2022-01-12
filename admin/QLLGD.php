<?php 
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_lichgiangday l, tbl_monhoc a WHERE l.MaMonHoc = a.MaMonHoc";
    $result = mysqli_query($kn,$sql);
    // $row =mysqli_fetch_array($result);    
    // echo "<pre>";
    // print_r($row);
    // die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị giảng dạy</title>
</head>
    <style>
        .card_table{
            width: 90%;
            margin: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
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
            border-radius: 10px;
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
            margin-bottom: 10px;
        }   
    </style>
<body>
    <div class="header_qlkhth">
        <a href="themLGD.php">
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
        <!-- <th scope="col">Mã tài khoảng</th> -->
        <th scope="col">Mã giảng dạy</th>
        <th scope="col">Mã giáo viên</th>
        <th scope="col">Mã lớp học</th>
        <th scope="col">Môn học</th>
        <th scope="col">Buổi dạy</th>
        <th scope="col">Số tiết</th>
        <th scope="col">Tuần học</th>
        <th scope="col">Tác vụ</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						
						<td><?php echo $row['MaGiangDay']; ?></td>
                        <td><?php echo $row['MaGV']; ?></td>
                        <td><?php echo $row['MaLopHoc']; ?></td>
                        <td><?php echo $row['TenMH']; ?></td> 
                        <td><?php echo $row['BuoiDay']; ?></td>
                        <td><?php echo $row['5']; ?></td>
                        <td><?php echo $row['TuanHoc']; ?></td>
						<td class="td_sua">
                            <a class="a_sua" href="suaLGD.php?Ma=<?php echo $row['MaGiangDay']; ?>"><i class='bx bxs-edit'></i></a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoaLGD.php?ma_tk=<?php echo $row['MaGiangDay']; ?>"><i class='bx bx-trash'></i></a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>
<?php 
    include("./footer.php");
?>