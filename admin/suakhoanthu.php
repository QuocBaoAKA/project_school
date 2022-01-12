<?php
    require("./header.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Khoản Thu</title>
    <style>
        .px-5 {
            background-color: #fff;
        }
        .btn-primary{
        width: 150px;
        color: #fff;
        background-color: #0066ff;
        margin-top: 15px;
        margin-bottom: 25px;
        margin-right: 8px;
      }
      .btn-primary:hover{
        color: #fff;
      }
      .px-5{
        width: 80%;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      }
      .btn-danger {
        width: 150px;
        color: #fff;
        display: block;
        background-color: #FF3547;
        margin-top: 15px;
        margin-bottom: 25px;
        
      }
      .btn-light {
        width: 150px;
        color: #fff;
        display: block;
        background-color: #F2f2f2;
        color: #000;
        margin-top: 15px;
        margin-right: 8px;
        margin-bottom: 25px;
      }
      .d-grid {
        display: flex !important;
        justify-content: center;
        align-items: center;
      }
    </style>
</head>
<body>
<?php
  require("./ketnoi.php");
  $id = $_REQUEST["Ma"];
  $query = mysqli_query($kn, "select * from tbl_khoangthu where MaKT = '".$id."'");
  foreach($query as $key)
  {
    $id = $key["MaKT"];
    $mhs = $key["TenKT"];
    $mlop = $key["SoTien"];;
  }

?>    
  <!---fomr sua---->    
  <div class="container px-5 my-5">
 
      <h4 style="padding-top: 15px;">Form sửa dữ liệu</h4>
    <form id="contactForm" action="./xlsuakhoangthu.php" method="POST">
        <div class="mb-3">
            <label class="form-label" for="newField">Mã khoảng thu</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly required name="txt_mkt" value="<?php echo $id ?>" />
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên khoảng thu</label>
            <input class="form-control" id="newField9" type="text" placeholder="" required name="txt_tkt" value="<?php echo $mhs ?>" />
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Số tiền <span style="color: red;">*</span></label>
            <input class="form-control" id="newField12" type="text" placeholder="" required name="txt_st" value="<?php echo $mlop ?>" />
        </div> 
        <span style="color: red; padding-bottom: 10px;">* Đơn vị tiền tệ VND</span>
        <div class="d-grid">
            <button class="btn btn-light" id="submitButton" type="reset" name="">Hủy</button>
            <button class="btn btn-primary" id="submitButton" type="submit" name="suakt">Cập nhật</button>
            <button class="btn btn-danger" id="submitButton" type="submit" name="">Thoát</button>
        </div>
    </form>
</div>



</body>
</html>
<?php
    require("./footer.php");
?>