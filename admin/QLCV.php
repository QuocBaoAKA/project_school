<?php 
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_chucvu";
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
        .header_qlcv{
            width: 80%;
            height: 60px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qlcv .btn_qlcv{
            width: 133px;
            height: 40px;
            background-color: #0066ff;
            border: none;
            border-radius: 8px;
            margin-top: 10px;
            margin-left: 20px;
            color: #fff;
        }
        
        .a_sua{
            width: 45px;
            height: 30px;
            background-color: #0066ff;
            text-align: center;
            border-radius: 5px;
            margin-right: 8px;
        }
         .a_sua1{
            width: 45px;
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
        .btn-primary {
            background-color: #0066ff;
            color: #fff;
            width: 100px;
        }
        .alert{
            width: 80%;
            margin: auto;
            margin-bottom: 1rem;
        }
        .btn-secondary {
            background-color: #f2f2f2;
            width: 80px;
            margin: 0 15px;
        }
    </style>
<body>
    <div class="header_qlcv">   
            <button class="btn_qlcv" data-bs-toggle="modal" data-bs-target="#exampleModal">Thêm</button>
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
    <table id="paginationSimpleNumbers" class="table datatable">
    <thead>
        <tr>
        <th scope="col">Mã chức vụ</th>
        <th scope="col">Tên chức vụ</th>
        <th scope="col">Sửa</th>
        <th scope="col">Xóa</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaChucVu']; ?> </td>
						<td><?php echo $row['TenDN']; ?></td>
						<td>
                            <a class="a_sua" href="suachucvu.php?Ma=<?php echo $row['MaChucVu']; ?>"><i class='bx bxs-edit'></i></a></td>

                        <td>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoachucvu.php?ma_cv=<?php echo $row['MaChucVu']; ?>"><i class='bx bx-trash'></i> </a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thêm chức vụ</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="./xlthemchucvu.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mã chức vụ</label>
                <input type="text" class="form-control" name="txt_mcv" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tên chức vụ</label>
                <input type="text" class="form-control" name="txt_tcv" required>
            </div>
            <center><button type="submit" class="btn btn-primary" name="btn_them_quyen">Thêm</button></center>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        </div>
        </div>
    </div>
</div>
<?php 
    include("./footer.php");
?>