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
      $query = mysqli_query($kn, "select * from tbl_khenthuong where MaKT = '".$id."'");
      foreach($query as $key)
      {
        $id = $key["MaKT"];
        $ten = $key["TenKT"];
        $tlh = $key["MaLopHoc"];
        $lkt = $key["LoaiKT"];
        $thk = $key["MaHK"];
      }

    ?>
  <!---fomr sua---->
  <div class="container px-5 my-5">
    <h2>Form sửa khen thưởng</h2>
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="./xulysuakhenthuong.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">Mã khen thưởng</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly name="txt_mkt" value="<?php echo $id ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField:required"></div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên học sinh</label>
            <input class="form-control" id="newField9" type="text" placeholder="" required name="txt_tkt" value="<?php echo $ten ?>" />
          
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên lớp học</label>
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
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Loại khen thưởng</label>
            <input class="form-control" id="newField12" type="text" placeholder="" required name="txt_lkt" value="<?php echo $lkt ?>" />
            
        </div>
        <div class="mb-3">
              <label class="form-label" for="newField9">Tên lớp học</label>
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
        </div>
        <div class="d-grid">
            <button class="btn btn-primary" id="submitButton" type="submit" name="suakhenthuong">Cập Nhật</button>
        </div>
    </form>
</div>
  <!---end---->
</body>
</html>
<?php 
    include("./footer.php");
?>