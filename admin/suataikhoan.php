<?php 
    include("./header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .form-label{
        text-transform: capitalize;
        
      }
      .btn-primary{
        width: 150px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
        background-color: #0066ff;
        color: #fff;
        margin-bottom: 15px;
      }
      .btn-primary:hover{
        color: #fff;
      }
      .px-5{
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      }
    </style>
</head>
<body>

<?php 
      include("./ketnoi.php");
      $id = $_REQUEST["Ma"];
      $query = mysqli_query($kn, "select * from tbl_taikhoan where MaTK = '".$id."'");
      foreach($query as $key)
      {
        $id = $key["MaTK"];
        $tdn = $key["TenDangNhap"];
        $ttk = $key["HoTen"];
        $tq = $key["MaQuyen"];
        $dc = $key["DiaChi"];
        $sdt = $key["SDT"];
        $gt = $key["GioiTinh"];
        $ns = $key["NgaySinh"];
      }

    ?>
  <!---fomr sua---->
  <div class="container px-5 my-5">
    <form id="contactForm" action="./xulysuataikhoan.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">Mã tài khoản</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly name="txt_mtk" value="<?php echo $id ?>" />
           
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên đăng nhập</label>
            <input class="form-control" id="newField9" type="text" placeholder="" required name="txt_tdn" value="<?php echo $tdn ?>" />
           
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Họ tên</label>
            <input class="form-control" id="newField9" type="text" placeholder="" required name="txt_ttk" value="<?php echo $ttk ?>" />
           
        </div>

        <div class="mb-3">
        <label class="form-label">Quyền</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_quyen";
            $result = mysqli_query($kn,$sqli);

            echo "<select name='txt_tq' value='<?php echo $tq ?>' class='form-select' required>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaQuyen'] ."' echo $mcv>" . $row['TenQuyen'] . "</option>";
            }
            echo "</select>";
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Địa chỉ</label>
            <input class="form-control" id="newField12" type="text" placeholder="" required name="txt_dc" value="<?php echo $dc ?>" />
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Số điện thoại</label>
            <input class="form-control" id="newField12" type="text" placeholder="" required name="txt_sdt" value="<?php echo $sdt ?>" />
          
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Giới tính</label>
            <input class="form-control" id="newField12" type="text" placeholder="" required name="txt_gt" value="<?php echo $gt ?>" /> 
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Ngày sinh</label>
            <input class="form-control" id="newField12" type="date" placeholder="" required name="txt_ns" value="<?php echo $ns ?>" />
            
        </div>
        <div class="d-grid">
            <button class="btn btn-primary" id="submitButton" type="submit" name="suataikhoan">Cập nhật</button>
        </div>
    </form>
</div>
  <!---end---->
</body>
</html>
<?php 
    include("./footer.php");
?>