<?php 
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_monan";
    $result = mysqli_query($kn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị món ăn</title>
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
            width: 40px;
            height: 30px;
            background-color: #0066ff;
            text-align: center;
            border-radius: 8px;
            margin-right: 8px;
        }
         .a_sua1{
            width: 40px;
            height: 30px;
            background-color: red;
            text-align: center;
            border-radius: 8px;
        }
         .a_sua, .a_sua1 i{
            color: #fff;
            padding-top: 5px;
            font-size: 16px;
        }
        .btn_qltd {
            width: 150px;
            height: 40px;
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
        .btn-primary {
            width: 150px;
            background-color: #0066ff;
            color: #fff;
            margin: auto;
        }
        .btn-secondary {
            background-color: #f2f2f2;
        }
    </style>
<body>
    <div class="header_qlma">
            <button class="btn_qltd" data-bs-toggle="modal" data-bs-target="#exampleModal">Thêm</button>
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
    <table class="table datatable">
    <thead>
        <tr>
        <th scope="col">Mã món ăn</th>
        <th scope="col">Tên món ăn</th>
        <th scope="col">Thành phần dinh dưỡng</th>
        <th scope="col">Đơn giá</th>
        <th scope="col">Tác vụ</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaMonAn']; ?> </td>
						<td><?php echo $row['TenMonAn']; ?></td>
                        <td><?php echo $row['ThanhPhanDD']; ?></td>
                        <td><?php echo number_format($row["Gia"], 0,",",".")?>VND</td>
						<td class="td_sua">
              <a class="a_sua" href="suamonan.php?Ma=<?php echo $row['MaMonAn']; ?>"><i class='bx bxs-edit'></i></a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoamonan.php?ma_ma=<?php echo $row['MaMonAn']; ?>"><i class='bx bx-trash'></i> </a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>
        
    <!--modal--->
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm món ăn</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="./xlthemmonan.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mã món ăn</label>
            <input type="text" class="form-control" name="txt_ma" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tên món ăn</label>
            <input type="text" class="form-control" name="txt_tma" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Thành phần dinh dưỡng</label>
            <input type="text" class="form-control" name="txt_dd" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Đơn giá</label>
            <input type="text" class="form-control" name="txt_gia" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php 
    include("./footer.php");
?>