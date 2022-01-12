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
        color: #fff;
        background-color: #0066ff;
        margin-bottom: 15px;
      }
      .btn-primary:hover{
        color: #fff;
      }
      .px-5{
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-radius: 8px;
      }
    </style>
</head>
<body>

<?php 
      include("./ketnoi.php");
      $id = $_REQUEST["Ma"];
      $query = mysqli_query($kn, "select * from tbl_tinhhinhsuckhoe where MaTHSK = '".$id."'");
      foreach($query as $key)
      {
        $id = $key["MaTHSK"];
        $ten = $key["MaHS"];
        $mlh = $key["SucKhoe"];
        $tlh = $key["ChieuCao"];
        $PC = $key["CanNang"];
        $MS = $key["NhietDo"];
      }

    ?>
  <!---fomr sua---->
  <h2>Form chỉnh sửa</h2>
  <div class="container px-5 my-5">
    
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="./xlthsk.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">Mã tình hình sức khỏe</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly name="txt_mhs" value="<?php echo $id ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField:required"></div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Mã học sinh</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_hocsinh";
            $result = mysqli_query($kn,$sqli);
            echo "<select name='mahocsinh' class='form-select' required aria-label='select example' value='<?php echo $ten ?>'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaHS'] ."'>" . $row['TenHS'] ."</option>";
            }
            echo "</select>";
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Sức khỏe</label>
            <div class="form-outline">
                <select class="form-select" aria-label="Default select example" name="txt_sk" value="<?php echo $mlh ?>" >
                <option selected disabled>Lựa chọn trạng thái sức khỏe</option>
                <option value="Tốt" required>Tốt</option>
                <option value="Bình thường">Bình Thường</option>
                <option value="Bệnh">Bệnh</option>
                </select>
                
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Chiều cao</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_cc" value="<?php echo $tlh ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Cân Nặng <span>( KG )</span></label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_tlh" value="<?php echo $tlh ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Nhiệt độ <span>( °C )</span></label>
            <input class="form-control" id="newField12" type="text" placeholder="" data-sb-validations="required" name="txt_ns" value="<?php echo $PC ?>" />
           
        </div>
        <div class="d-grid">
            <button class="btn btn-primary" id="submitButton" type="submit" name="suask">Cập Nhật</button>
        </div>
    </form>
</div>
  <!---end---->
</body>
</html>
<?php 
    include("./footer.php");
?>