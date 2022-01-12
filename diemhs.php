<?php
    require("user/header.php");
    require("admin/ketnoi.php");

?>
<style>
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
          }
          .title-tt {
              display: none;
          }
</style>
<form method="post">
     <div classs="src_ground1" style="width: 80%; margin: auto; margin-top: 2rem; height: 150px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; border-radius: 15px;">
        <h2 style="text-align: center; font-size: 20px; color: #333; padding-top: 15px;">Nhập mã số học sinh cần tìm?</h2>
         <div class="simple-search">
          <input type="text" name="txt_mahs" placeholder="Nhập mã số cần tìm..."/>
          <button type="submit" name="btn_diem"><i class="fa fa-search"></i></button>
        </div>
    </div>
    <?php
        if (isset($_POST["btn_diem"])) {
            $mahs = $_POST['txt_mahs'];
            $sql = "select * from tbl_diem hs, tbl_hocsinh sk WHERE sk.MaHS = '".$mahs."' AND sk.MaHS = hs.MaHS";
            $query_pro = mysqli_query($kn,$sql) or die("Không tìm thấy dữ liệu");
            

     ?>
     <div class="card_table">
    <table class="table datatable">
    <thead class="table-dark">
        <tr>
        <th scope="col">Tên học sinh</th>
        <th scope="col">Môn học</th>
        <th scope="col">Học kỳ</th>
        <th scope="col">Điểm miệng</th>
        <th scope="col">Điểm giữa kỳ</th>
        <th scope="col">Điểm cuối kỳ</th>
        <th scope="col">Điểm tổng kết</th>
        <th scope="col">Kết quả</th>
        </tr>
    </thead> <?php 
                    
     while ($row = mysqli_fetch_array($query_pro)) {
			 ?>
             <p>Kết quả</p>
					<tr>
						<td><?php echo $row['TenHS']; ?> </td>
                        <td><?php echo $row['MaMH']; ?></td>
						<td><?php echo $row['MaHK']; ?></td>
                        
                        <td><?php echo $row['DiemMieng']; ?></td>
                        <td><?php echo $row['DiemGiuaKy']; ?></td>
                        <td><?php echo $row['DiemCuoiKy']; ?></td>
                        <td><?php echo $row['DiemTongKet']; ?></td>
                        <td><?php echo $row['KetQua']; ?></td>
          
					</tr>
                    <?php } }?>
	
    </table>
    </div>

</form>
<?php
    require("user/fotter.php");

?>