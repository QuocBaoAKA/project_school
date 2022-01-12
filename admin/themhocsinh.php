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
        border-radius: 5px;
      }
     .form_hs{
       width: 78%;
       margin: auto;
       margin-bottom: 10px;
     }
     .form_hs_radio{
       display: flex;
       width: 78%;
       height: 50px;
       margin: auto;
       border: 1px dashed #ccc;
       margin-bottom: 10px;
     }
     .radio1{
       margin-right: 25px;
       margin-left: 8px;
       margin-top: 10px;
       
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
      display: block;
      width: 150px;
      height: 40px;
      background-color: #0066ff;  
      border: none;
      border-radius: 5px;
      color: #fff;
      margin: 0 12px;
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
    .row {
      width: 80%;
      margin: auto;
      margin-bottom: 10px;
    }
    /**/
    
    </style>
</head>
<body>
<form action="./xlthemhs.php" method="post">
  <div class="card_hs">
  <div class="row">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Mã học sinh</label>
      <input type="text" class="form-control" id="inputEmail4" name="txt_mhs" required>
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Tên học sinh</label>
      <input type="text" class="form-control" id="inputPassword4" name="txt_ths" required>
    </div>
  </div>
  <div class="form_hs">
    <label>Mã lớp học</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_lop";
            $result = mysqli_query($kn,$sqli);
            echo "<select name='malophoc' class='form-select' required aria-label='select example'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaLopHoc'] ."'>" . $row['MaLopHoc'] ."</option>";
            }
            echo "</select>";
            ?>
       
  </div>
  <div class="form_hs">
    <label>Tên lớp học</label>
    <input type="text" class="form-control"  name="txt_tlh">
  </div>
  <label for="inputPassword4" class="form-label" style="padding-left: 6.5rem;">Tên học sinh</label>
  <div class="form_hs_radio">  
    <div class="radio1">
      <input type="radio" value="Nam" name="gioitinh" required>
      <span>Nam</span>
    </div>
    <div class="radio1">
     
      <input type="radio" value="Nữ" name="gioitinh">
      <span>Nữ</span>
    </div>
  </div>
  
  <div class="form_hs">
    <label>Năm sinh</label>
    <input type="date" class="form-control" name="txt_ns" required>
  </div>
  <div class="form_hs">
    <label>Địa chỉ</label>
    <input type="text" class="form-control" name="txt_dc" required>
  </div>
  <!-- <div class="form_hs">
    <label>Địa chỉ</label>
    <select name="calc_shipping_provinces" required="" class="form-control" name="txt_dc">
      <option value="">Tỉnh / Thành phố</option>
    </select>
    <input class="billing_address_1" name="txt_dc" required type="hidden" value="">
  </div> -->
  <div class="form_hs">
    <label>Họ tên cha</label>
    <input type="text" class="form-control" name="txt_tencha" required>
  </div>
  <div class="form_hs">
    <label>Nghề nghiệp</label>
    <input type="text" class="form-control"  name="txt_ng" required>
  </div>
  <div class="form_hs">
    <label>Số điện thoại</label>
    <input type="text" class="form-control" name="txt_sdt" required>
  </div>
  <div class="form_hs">
    <label>Họ tên mẹ</label>
    <input type="text" class="form-control" name="txt_me" required>
  </div>
  <div class="form_hs">
    <label>Nghề nghiệp</label>
    <input type="text" class="form-control" name="txt_nnm" required>
  </div>
  <div class="form_hs">
    <label>Số điện thoại</label>
    <input type="text" autocomplete="off" pattern="0([0-9]{9}||[0-9]{10})" title="Số điện thoại bao gồm 9 số và bắt đầu bằng 0"required="" class="form-control" name="txt_phone">
  </div>
  <div class="btn_hss">
    <button type="button" class="btn_hs1">Làm mới</button>
    <button type="submit" class="btn_hs">Thêm</button>
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