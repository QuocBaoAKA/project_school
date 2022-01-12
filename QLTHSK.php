<?php 
    include("user/header.php");
    include "admin/ketnoi.php";
    
    // $sql = 
    //     "SELECT * FROM tbl_tinhhinhsuckhoe
    //     LEFT JOIN tbl_hocsinh ON tbl_tinhhinhsuckhoe.MaHS = tbl_hocsinh.MaHS
    //     UNION
    //     SELECT * FROM tbl_hocsinh
    //     LEFT JOIN tbl_tinhhinhsuckhoe ON tbl_hocsinh.MaHS = tbl_tinhhinhsuckhoe.MaHS";
    //     // "SELECT MaTHSK, MaHS, HoTenHS, SucKhoe, ChieuCao, CanNang, NhietDo FROM tbl_tinhhinhsuckhoe INNER JOIN tbl_hocsinh ON tbl_tinhhinhsuckhoe.MaHS = tbl_hocsinh.MaHS";
    //     // "SELECT * FROM tbl_tinhhinhsuckhoe AS a INNER JOIN tbl_hocsinh AS b ON(a.MaHS == b.MaHS)";
    //     $query_pro = mysqli_query($kn,$sql) or die("lỗi");
    //     $row_pro = mysqli_fetch_row($query_pro); 
//         echo "<pre>";
// print_r($row_pro);
// die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị sức khỏe</title>
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
        .alert-success{
            margin-bottom: 10px;
            margin-top: 10px;
            width: 90%;
            margin: auto;

        }
        .btn_qlsk {
            width: 150px;
            height: 40px;
            border-radius: 5px;
            border: none;
            background-color: #0066ff;
            color: #fff;
            margin-bottom: 20px;
            margin-left: 3.5rem;
        }
        .title-tt {
            display: none;
        }
        
          .simple-search {
            width: 80%;
            display: flex;
            margin: auto;
          }
          .simple-search button {
            width: 50px;
            padding: 10px;
            color: white;
            flex-shrink: 0;
            border-radius: 8px;
            background-color: #FF3547;
            margin-left: 15px;
            border: none;
          }
          .simple-search input {
            width: 100%;
            padding: 15px;
            background-color: #fafafa;
            border-radius: 8px;
            -webkit-appearance: none;
            font-size: 14px;
            font-weight: 500;
            border: 1px solid #ccc;
            outline: none;
          }
          .simple-search input:focus{
              border: 1px solid #FF3547;
          }
        
    </style>
<body>
    <form method="post">
    <!-- <?php 
    
    // if(isset($_SESSION['status']))
    // {
    //     ?>
    //         <div class="alert alert-success alert-dismissible fade show" role="alert">
    //             <strong>Thông báo !</strong> <?= $_SESSION['status']; ?>
    //             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //         </div>
    //     <?php 
    //     unset($_SESSION['status']);
    // }

?> -->
    <div classs="src_ground1" style="width: 80%; margin: auto; margin-top: 2rem; height: 150px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; border-radius: 15px;">
        <h2 style="text-align: center; font-size: 20px; color: #333; padding-top: 15px;">Nhập mã số học sinh cần tim?</h2>
         <div class="simple-search">
          <input type="text" name="txt_mahs" placeholder="Nhập mã số cần tìm..."/>
          <button type="submit" name="btn_hs"><i class="fa fa-search"></i></button>
        </div>
    </div>
       
    <!-- <input type="text" name="txt_mahs" placeholder="Nhập mã học sinh" class="src">
    <input type="submit" name="btn_hs"> -->
    <?php
        if (isset($_POST["btn_hs"])) {
            $mahs = $_POST['txt_mahs'];
            $sql = "select * from tbl_hocsinh hs, tbl_tinhhinhsuckhoe sk WHERE sk.MaHS = '".$mahs."' AND sk.MaHS = hs.MaHS";
            $query_pro = mysqli_query($kn,$sql) or die("lỗi");
            

     ?>
     <br>
    <div class="card_table">
    <table class="table datatable">
    <thead class="table-dark">
        <tr>
        <th scope="col">Mã tình hình sức khỏe</th>
        <th scope="col">Tên học sinh</th>
        <th scope="col">Sức khỏe</th>
        <th scope="col">Chiều cao</th>
        <th scope="col">Cân nặng</th>
        <th scope="col">Nhiệt độ</th>

        </tr>
    </thead> <?php 
                    
     while ($row = mysqli_fetch_array($query_pro)) {
			 ?>
             <p>Kết quả</p>
					<tr>
						<td><?php echo $row['MaTHSK']; ?> </td>
                        <td><?php echo $row['TenHS']; ?></td>
						<td><?php echo $row['SucKhoe']; ?></td>
                        <td><?php echo $row['ChieuCao']; ?></td>
                        <td><?php echo $row['CanNang']; ?></td>
                        <td><?php echo $row['NhietDo']; ?></td>

          
					</tr>
                    <?php } }?>
	
    </table>
    </div>
    </form>
</body>
<?php 
    include("user/fotter.php");
?>