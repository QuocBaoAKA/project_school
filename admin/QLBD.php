<?php 
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_baidang";
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
            width: 90%;
            height: 80px;
            background-color: #ffffff;
            border-radius: 8px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qlbd .btn_qlbd{
            width: 133px;
            height: 45px;
            background-color: #0066ff;
            border: none;
            border-radius: 8px;
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
            width: 90%;
            margin: auto;
            margin-bottom: 10px;
        }
    </style>
<body>
<?php
             if(isset($_SESSION['message']))
                        {
                            echo '<div class="alert alert-success alert-dismissible fade show">
                                  <strong>Thông báo!</strong> ' .$_SESSION['message'].'
                                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                              </div>';
                            unset($_SESSION['message']);
                            
                        }
                        if(isset($_POST['message1'])){
                            echo '<div class="alert alert-danger alert-dismissible fade show">
                                  <strong>Thông báo!</strong> ' .$_SESSION['message1'].'
                                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                              </div>';
                            unset($_SESSION['message']);
                        }
             ?>
    <div class="header_qlbd">
        <a href="./thembaidang.php">
            <button class="btn_qlbd">Thêm</button>
        </a>
    </div>
    <div class="card_table">
    <table class="table datatable">
    <thead class="table-dark">
        <tr>
        <th scope="col">Mã bài đăng</th>
        <th scope="col">Tên bài đăng</th>
        <th scope="col">Thể loại</th>
        <th scope="col">Ngày đăng</th>
        <th scope="col">Hình ảnh</th>
        <!-- <th scope="col">Nội dung</th> -->
        <th scope="col">Tác vụ</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaBaiDang']; ?> </td>
						<td><?php echo $row['TenBaiDang']; ?></td>
                        <td><?php echo $row['TheLoai']; ?></td>
                        <td><?php echo $row['NgayDang']; ?></td>
                        <td><img src="upload/<?php echo $row['Hinhanh']; ?>" style="max-width: 100px; border-radius: 8px;"></td>
                        <!-- <td class="txt_cn"><?php echo $row['NoiDung']; ?></td> -->
						<td class="td_sua">
              <a class="a_sua" href="suabaidang.php?Ma=<?php echo $row['MaBaiDang']; ?>"><i class='bx bxs-edit'></i></a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoabaidang.php?ma_bd=<?php echo $row['MaBaiDang']; ?>"><i class='bx bx-trash'></i> </a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>
<?php 
    include("./footer.php");
?>