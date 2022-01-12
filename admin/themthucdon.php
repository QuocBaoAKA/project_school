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
       height: 40px;
       outline: none;
       border: 1px solid #ccc;
       border-radius: 5px;
       margin-bottom: 15px;
       padding-left: 8px;
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
       box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
    </style>
</head>
<body>
<form action="./xlthemthucdon.php" method="post">
  <h3 style="text-align: center;">Form thêm thực đơn</h3>
  <div class="card_hs">
  <div class="form_hs">
    <label>Mã thực đơn</label>
    <input type="text" class="input_hs" name="txt_mtd">
  </div>
  <div class="form_hs">
    <label>Thời gian</label>
    <input type="date" class="input_hs"  name="txt_tg">
  </div>
  <div class="form_hs">
    <label>Buổi ăn</label>
    <input type="text" class="input_hs"  name="txt_ba">
  </div>
  <!-- <div class="form_hs">
    <label>Tên món ăn</label>
    <input type="text" class="input_hs"  name="txt_tma">
  </div> -->
  <div class="form_hs">
  <label>Tên món ăn</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_monan";
            $result = mysqli_query($kn,$sqli);
            echo "<select name='txt_tma' class='form-select' required aria-label='select example'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaMonAn'] ."'>" . $row['TenMonAn'] ."</option>";
            }
            echo "</select>";
            ?>
  </div>&nbsp;
  <div class="form_hs">
    <label>Số lượng phần</label>
    <input type="text" class="input_hs"  name="txt_slp">
  </div>
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