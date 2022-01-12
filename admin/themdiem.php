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
      .form-tt {
        width: 80%;
        margin: auto;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;  
        background-color: #fff;
      }
      .card_hs{
        width: 90%;
        margin: auto;
        
      }
      .col {
        margin-bottom: 15px;
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
       padding-left: 10px;
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
    .btn_hs1 {
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
<h2 style="text-align: center;">Form thêm điểm</h2>
<form action="./xlthemdiem.php" method="post" class="form-tt">
  <div class="card_hs">
  <div class="row">
    <div class="col"> 
    <label>Mã học sinh</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_hocsinh";
            $result = mysqli_query($kn,$sqli);
            echo "<select name='txt_mhs' class='form-select' required aria-label='select example'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaHS'] ."'>" . $row['TenHS'] ."</option>";
            }
            echo "</select>";
            ?>
  </div>
    
    <div class="col">
    <label>Lớp học</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_lop";
            $result = mysqli_query($kn,$sqli);
            echo "<select name='malophoc' class='form-select' required aria-label='select example'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaLopHoc'] ."'>" . $row['TenLop'] ."</option>";
            }
            echo "</select>";
            ?>
    </div>
  </div>
  <!-- <div class="form_hs">
    <label>Mã học sinh</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_hocsinh";
            $result = mysqli_query($kn,$sqli);
            echo "<select name='txt_mhs' class='form-select' required aria-label='select example'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaHS'] ."'>" . $row['TenHS'] ."</option>";
            }
            echo "</select>";
            ?>
  </div> &nbsp;
  <div class="form_hs">
    <label>Lớp học</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_lop";
            $result = mysqli_query($kn,$sqli);
            echo "<select name='malophoc' class='form-select' required aria-label='select example'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaLopHoc'] ."'>" . $row['TenLop'] ."</option>";
            }
            echo "</select>";
            ?>
       
  </div> &nbsp; -->
  <div class="row">
  <div class="col">
  <label>Học Kỳ</label>
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
  <div class="col">
  <label>Môn học</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_monhoc";
            $result = mysqli_query($kn,$sqli);
            echo "<select name='txt_tmh' class='form-select' required aria-label='select example'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaMonHoc'] ."'>" . $row['TenMH'] ."</option>";
            }
            echo "</select>";
            ?>
  </div>&nbsp;   
  </div>
  <!-- <div class="form_hs">
  <label>Học Kỳ</label>
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
  <div class="form_hs">
  <label>Môn học</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_monhoc";
            $result = mysqli_query($kn,$sqli);
            echo "<select name='txt_tmh' class='form-select' required aria-label='select example'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaMonHoc'] ."'>" . $row['TenMH'] ."</option>";
            }
            echo "</select>";
            ?>
  </div>&nbsp; -->
  <!-- <div class="form_hs">
    <label>Tên môn học</label>
    <input type="text" class="input_hs"  name="txt_tmh">
  </div> -->
  <div class="row">
  <div class="col">
  <label>Điểm kiểm tra miệng</label>
    <input type="text" class="form-control" name="txt_dm" aria-label="First name">
  </div>
  <div class="col">
  <label>Điểm kiểm tra giữa kì</label>
    <input type="text" class="form-control" name="txt_dgk" aria-label="Last name">
  </div>
</div>
  <!-- <div class="form_hs">
    <label>Điểm kiểm tra miệng</label>
    <input type="text" class="input_hs" name="txt_dm">
  </div>
  <div class="form_hs">
    <label>Điểm kiểm tra giữa kì</label>
    <input type="text" class="input_hs" name="txt_dgk">
  </div> -->
  <div class="row">
  <div class="col">
    <label>Điểm kiểm tra cuối kì</label>
    <input type="text" class="form-control" name="txt_dck" aria-label="First name">
  </div>
  <div class="col">
    <label>Điểm tổng kết</label>
    <input type="text" class="form-control" name="txt_dtk" aria-label="Last name">
  </div>
</div>

  <!-- <div class="form_hs">
    <label>Điểm kiểm tra cuối kì</label>
    <input type="text" class="input_hs" name="txt_dck">
  </div>
  <div class="form_hs">
    <label>Điểm tổng kết</label>
    <input type="text" class="input_hs" name="txt_dtk">
  </div> -->
  <div class="form_hs">
    <label>Kết quả</label>
    <input type="text" class="input_hs" name="txt_kq">
  </div>
  <div class="btn_hss">
    <button type="reset" class="btn_hs1">Reset</button>
    <button type="submit" class="btn_hs" name="btn_diem">Thêm</button>
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