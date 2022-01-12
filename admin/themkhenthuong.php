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
       width: 100%;
       margin: auto;
       padding: 0 15px;
     }
     .input_hs{
       width: 100%;
       height: 38px;
       outline: none;
       border: 1px solid #ccc;
       border-radius: 5px;
       margin-bottom: 15px;
       padding-left: 6px;
     }
     .input_hs:focus{
       border: 2px solid #0066ff;
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
      border-radius: 8px;
      color: #fff;
      margin: 0 15px;
       margin-bottom: 1rem;
    }
    .btn_hs1{
      width: 150px;
      height: 40px;
      background-color: #F8F9FA;  
      border: none;
      border-radius: 8px;
      color: #000;
       margin-bottom: 1rem;
       border: 1px solid #ccc;
    }
    </style>
</head>
<body>
<form action="./xlthemkhenthuong.php" method="post">
  <h2 style="padding-left: 120px;">Form thêm khen thưởng</h2>
  <div class="card_hs">
  <div class="form_hs">
    <label>Mã khen thưởng</label>
    <input type="text" class="input_hs" name="txt_mkt" required>
  </div>
  <div class="form_hs">
    <label>Tên học sinh</label>
    <input type="text" class="input_hs"  name="txt_tkt" required>
  </div>
  <div class="form_hs">
    <label>Tên lớp học</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_lop";
            $result = mysqli_query($kn,$sqli);
            echo "<select name='txt_tlh' class='form-select' required aria-label='select example'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaLopHoc'] ."'>" . $row['TenLop'] ."</option>";
            }
            echo "</select>";
            ?>
  </div>&nbsp;
  <div class="form_hs">
    <label>Loại khen thưởng</label>
    <input type="text" class="input_hs" name="txt_lkt" required>

  </div>
    <div class="form_hs">
      <label>Tên học kì</label>
              <?php
              include("./ketnoi.php");
              $sqli = "SELECT * FROM tbl_hocki";
              $result = mysqli_query($kn,$sqli);
              echo "<select name='txt_thk' class='form-select' required aria-label='select example'>";
              while ($row = mysqli_fetch_array($result)) {
                  echo "<option value='" . $row['MaHK'] ."'>" . $row['TenHK'] ."</option>";
              }
              echo "</select>";
              ?>
    </div>&nbsp;
    <div class="btn_hss">
      <button type="reset" class="btn_hs1">Làm mới</button>
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