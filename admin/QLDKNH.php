<?php
    require("./header.php");
    require("./ketnoi.php");
    $sql = "select * from tbl_phieudangkynhaphoc";
    $result = mysqli_query($kn,$sql);
?>
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
            width: 80%;
            height: 80px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qlbd .btn_qlbd{
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
    </style>

<form action="./excel3.php" method="post">
        <span style="padding-left: 3.5rem;">Xuất danh sách</span>
        <select name="export_file" id="" class="excel">
            <option value="xlsx">XLSX</option>
            <option value="xls">XLS</option>
            <option value="csv">CSV</option>
        </select>
        <button type="submit" name="save-excel" class="btn-excel">Xuất File</button>
    </form> <br>
<div class="card_table">
    <table class="table datatable">
    <thead class="table-dark">
        <tr>
        <th scope="col">Mã đăng ký</th>
        <th scope="col">Họ tên phụ huynh</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">DiaChi</th>
        <th scope="col">Mail</th>
        <th scope="col">Họ tên học sinh</th>
        <th scope="col">Năm sinh</th>
        <th scope="col">GioiTinh</th>
        <th scope="col">Cấp học</th>
        <th scope="col">Ghi Chú</th>
        <th scope="col">Tác vụ</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaDK']; ?> </td>
						<td><?php echo $row['HoTenPhuHuynh']; ?></td>
                        <td><?php echo $row['SDT']; ?></td>
                        <td><?php echo $row['DiaChi']; ?></td>
                        <td><?php echo $row['Mail']; ?>
                            <a href="guimail.php?id=<?php echo $row['MaDK']; ?>">Gửi mail</a>
                        </td>
                        <td><?php echo $row['HoTenHS']; ?></td>
                        <td><?php echo $row['NamSinh']; ?></td>
                        <td><?php echo $row['GioiTinh']; ?></td>
                        <td><?php echo $row['CapHoc']; ?></td>
                        <td><?php echo $row['GhiChu']; ?></td>
						<td class="td_sua">
							<a class="a_sua1" onclick="return window.confirm('Bạn có chắc muốn xóa!');" href="xoatuyensinh.php?ma_bd=<?php echo $row['MaDK']; ?>"><i class='bx bx-trash'></i> </a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>
<?php
    require("./footer.php");

?>