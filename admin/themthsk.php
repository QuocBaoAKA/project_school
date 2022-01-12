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
      .btn-primary {
        width: 150px;
        height: 40px;
        background-color: #0066ff;
        margin: auto;
        color: #fff;
        margin-bottom: 25px;
      }
      .form-sk {
        width: 80%;
        margin: auto;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      }
      .form-outline {
        width: 90%;
        margin: auto;
      }
     
    </style>
</head>
<body>
  <div class="form-sk">
<form action="./xlthemthsk.php" method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col" style="margin-left: 27px;">
      <div class="form-outline">
       <label class="form-label" for="form6Example1">Mã tình hình sức khỏe</label>
        <input type="text" id="form6Example1" class="form-control" name="txt_mathsk" />
       
      </div>
    </div>
    <div class="col">
      <label class="form-label" for="form6Example2">Tên học sinh</label>
      <div class="form-outline">
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_hocsinh";
            $result = mysqli_query($kn,$sqli);
            echo "<select name='mahocsinh' class='form-select' required aria-label='select example'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaHS'] ."'>" . $row['TenHS'] ."</option>";
            }
            echo "</select>";
            ?>
      </div>
    </div>
  </div>

  <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form6Example1">Sức khỏe</label>
        <select class="form-select" aria-label="Default select example" name="txt_sk">
          <option selected disabled>Lựa chọn trạng thái sức khỏe</option>
          <option value="Tốt">Tốt</option>
          <option value="Bình thường">Bình Thường</option>
          <option value="Bệnh">Bệnh</option>
        </select>
        
      </div>
    </div><br>
  <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form6Example1">Chiều cao (cm)</label>
        <input type="text" id="form6Example1" class="form-control" name="txt_chc" />
        
      </div>
    </div><br>
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form6Example1">Cân nặng (Kg)</label>
        <input type="text" id="form6Example1" class="form-control" name="txt_cn" />
        
      </div>
    </div><br>
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form6Example1">Nhiệt độ (°C)</label>
        <input type="text" id="form6Example1" class="form-control" name="txt_nhd" /> 
      </div>
    </div><br>
  <!-- Submit button -->
 
  <button type="submit" class="btn btn-primary btn-block mb-4">Thêm</button><br>
  </form>
  </div>
</body>
</html>
<?php 
    include("./footer.php");
?>