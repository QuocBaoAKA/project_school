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
      .card_hs{
        width: 80%;
        margin: auto;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;  
        background-color: #fff;
      }
     .form_hs{
       width: 60%;
       margin: auto
     }
     .input_hs{
       width: 100%;
       height: 38px;
       outline: none;
       border: 1px solid #ccc;
       border-radius: 5px;
       margin-bottom: 15px;
       padding-left: 15px;
     }
     .form_hs_radio{
       display: flex;
       width: 450px;
       height: 50px;
       margin: auto;
       border: 1px dashed #ccc;
       justify-content: center;
       align-items: center;
     }
     .radio1{
       margin-right: 25px;
       
     }
    .radio1 span{
      font-size: 18px;
    }
    .btn_hss{
      display: flex;
      justify-content: center;
      align-items: center;
      margin: auto;
      width: 100%;
     
    }
    .btn_hs{
      width: 150px;
      height: 40px;
      background-color: #0066ff;  
      border: none;
      border-radius: 5px;
      color: #fff;
      margin: 0 15px;
       margin-bottom: 1rem;
    }
    .btn_hs1{
      width: 150px;
      height: 40px;
      background-color: #F8F9FA;  
      border: none;
      border-radius: 5px;
      color: #000;
       margin-bottom: 1rem;
    }
    </style>
</head>
<body>
<form action="./xlthemtaikhoan.php" method="post">
  <div class="card_hs">
  <div class="form_hs">
    <label>Tên đăng nhập</label>
    <input type="text" class="input_hs"  name="txt_tdn">
  </div>
  <div class="form_hs">
    <label>Họ tên</label>
    <input type="text" class="input_hs"  name="txt_ttk">
  </div>
  
  <div class="form_hs">
    <label>Mật khẩu</label>
    <input type="password" class="input_hs" name="txt_mk">
  </div>
  <div class="form_hs">
    <label>Địa chỉ</label>
    <input type="text" class="input_hs" name="txt_dc">
  </div>
  <div class="form_hs">
    <label>Số điện thoại</label>
    <input type="text" class="input_hs" name="txt_sdt">
  </div>
  <div class="form_hs">
    <label>Email</label>
    <input type="email" class="input_hs" name="txt_mail">
  </div>
  <div class="form_hs_radio">
    <div class="radio1">
      <input type="radio" value="Nam" name="gioitinh">
      <span>Nam</span>
    </div>
    <div class="radio1">
     
      <input type="radio" value="Nữ" name="gioitinh">
      <span>Nữ</span>
    </div>
  </div>&nbsp;
  <div class="form_hs">
    <label>Ngày sinh</label>
    <input type="text" class="input_hs" name="txt_ns">
  </div>
  <div class="form_hs">
  <label class="form-label">Quyền</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_quyen";
            $result = mysqli_query($kn,$sqli);

            echo "<select name='txt_tq' class='form-select' required>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaQuyen'] ."'>" . $row['TenQuyen'] . "</option>";
            }
            echo "</select>";
            ?>
  </div>&nbsp;
  <div class="btn_hss">
    <button type="reset" class="btn_hs1">Làm mới</button>
    <button type="submit" class="btn_hs" name="themtk">Thêm</button>
  </div>
  </div>
  
</form>


  <!-- Submit button -->
 
</div>
</form>
</body>
</html>
<?php 
    include("./footer.php");
?>