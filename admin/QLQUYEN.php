<?php
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_quyen";
    $result = mysqli_query($kn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị quyền</title>
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
            height: 80px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qlcv .btn_qlcv{
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
            border: none;
        }
         .a_sua, .a_sua1 i{
            color: #fff;
            padding-top: 5px;
            font-size: 16px;
        }
        .header_qlmh{
            width: 90%;
            height: 60px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qlmh .btn_qlmh{
            width: 133px;
            height: 45px;
            background-color: #0066ff;
            border: none;
            border-radius: 8px;
            margin-top: 8px;
            margin-left: 20px;
            color: #fff;
        }
        .btn-primary {
            background-color: #0066ff;
            color: #fff;
            width: 100px;
        }
        .btn-secondary {
            background-color: #f2f2f2;
            width: 80px;
            margin: 0 15px;
        }
        .alert {
            width: 90%;
            margin: auto;
            margin-bottom: 15px;
        }
    </style>
<body>

    <div class="header_qlmh">
                <button type="button" class="btn_qlmh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Thêm
                </button>
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
    <table id="paginationSimpleNumbers" class="table align-middle">
    <thead>
        <tr>
        <th scope="col">Mã quyền</th>
        <th scope="col">Tên quyền</th>
        <th scope="col">Sửa</th>
        <th scope="col">Xóa</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaQuyen']; ?> </td>
						<td><?php echo $row['TenQuyen']; ?></td>
                        <td><a class="a_sua" href="suaquyen.php?Ma=<?php echo $row['MaQuyen']; ?>"><i class='bx bxs-edit'></i></a></td>
                        <td>
                            <a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoaquyen.php?id=<?php echo $row['MaQuyen']; ?>"><i class='bx bx-trash'></i></a>
                        </td>
					</tr>
			 <?php } ?>  
    </table>
    </div>


    <!---modal---->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thêm quyền</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="./xlthemquyen.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mã quyền</label>
                <input type="text" class="form-control" name="txt_mq" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tên quyền</label>
                <input type="text" class="form-control" name="txt_tq" required>
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