<?php 
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_hocsinh";
    $result = mysqli_query($kn,$sql);
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị học sinh</title>
</head>
    <style>
        .card_table{
            width: 100%;
            margin: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
           
        }
        ::-webkit-scrollbar {
		width: 10px;
	    }
        ::-webkit-scrollbar:horizontal {
		height: 8px;
	    }
        ::-webkit-scrollbar-track {
		background-color: #f2f2f2;
	}
    ::-webkit-scrollbar-thumb {
		border-radius: 10px;
		background: #ccc;
		
	}
        .table {
            width: 100%;
            border: 1px solid #f2f2f2;
            font-size: 15px;
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
            font-size: 16px;
            background-color: #000;
            color: #fff;
            margin-top: 1rem;
        }
        .table tr{
            border-bottom: 1px solid #f2f2f2;
        }
        .header_qlhs{
            width: 100%;
            height: 80px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qlhs .btn_qlhs{
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
    
    <div class="header_qlhs">
        <a href="themhocsinh.php">
            <button class="btn_qlhs">Thêm</button>
        </a>
        <!-- <form method="post" action="./excel1.php" enctype="multipart/form-data">
            <input type="file" name="file-exce-import">
            <button type="submit" name="btn-gui-excel">Import Excel</button>
        </form> -->
    </div>
    <div class="excel-form">
        <label>Thêm file excel: </label>
        <form action="./importexcel.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="import_file" class="form-control" required>
            <button type="submit" name="import_file_btn" class="excel-btn">Import</button>
         </form>
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
    <?php
    if(isset($_SESSION['status']))
    {
        ?>
        
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Thông Báo!</strong> <?= $_SESSION['status']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php 
        unset($_SESSION['status']);
    }
    ?>
    <div class="card_table">
    <table class="table datatable">
    <thead>
        <tr>
        <th scope="col">Mã học sinh</th>
        <th scope="col">Tên học sinh</th>
        <th scope="col">Mã lớp học</th>
        <th scope="col">Tên lớp học</th>
        <th scope="col">Giới Tính</th>
        <th scope="col">Năm sinh</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Họ tên cha</th>
        <th scope="col">Nghề nghiệp</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Họ tên mẹ</th>
        <th scope="col">Nghề nghiệp mẹ</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Tác vụ</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaHS']; ?> </td>
						<td><?php echo $row['TenHS']; ?></td>
                        <td><?php echo $row['MaLop']; ?></td>
                        <td><?php echo $row['TenLop']; ?></td>
                        <td><?php echo $row['GioiTinh']; ?></td>
                        <td><?php echo $row['NamSinh']; ?></td>
                        <td><?php echo $row['DiaChiHS']; ?></td>			
                        <td><?php echo $row['HoTenCha']; ?></td>
                        <td><?php echo $row['NgheNghiep']; ?></td>
                        <td><?php echo $row['SDT']; ?></td>
                        <td><?php echo $row['HoTenMe']; ?></td>
                        <td><?php echo $row['NheNghiepMe']; ?></td>
                        <td><?php echo $row['SDTMe']; ?></td>

						<td class="td_sua">
                            <a class="a_sua" href="suahocsinh.php?Ma=<?php echo $row['MaHS']; ?>"><i class='bx bxs-edit'></i></a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoahocsinh.php?ma_hs=<?php echo $row['MaHS']; ?>"><i class='bx bx-trash'></i> </a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>
    <form action="./excel4.php" method="post">
        <span>Xuất file excel</span>
        <select name="export_file" id="" class="excel">
            <option value="xlsx">XLSX</option>
            <option value="xls">XLS</option>
            <option value="csv">CSV</option>
        </select>
        <button type="submit" name="save-excel" class="btn-excel">Xuất File</button>
    </form> <br>

    
    <script>
        $(document).ready(function () {
    $('.datatable').DataTable({
        searching: true,
        paging: true,
        ordering: true,
        info: false,
        "lengthMenu": [[10, 20, 50, -1], [10, 20, 50, "Tất cả"]],
        language: {
            lengthMenu: "Hiển thị _MENU_ bản ghi",
            search: "Tìm kiếm ",
            zeroRecords: "Không tìm thấy",
            infoEmpty: "Không có bản ghi nào",
            info: "Hiển thị _START_ đến _END_ bản ghi trong tổng _TOTAL_ bản ghi",
            paginate: {
                first: "Premier",
                previous: "Trước",
                next: "Sau",
                last: "Dernier"
            },
        } // false to disable search (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
});
    </script>
<?php 
    include("./footer.php");
?>