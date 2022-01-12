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
      include("./ketnoi.php");
      $id = $_REQUEST["Ma"];
      $query = mysqli_query($kn, "select * from tbl_monhoc where MaMonHoc = '".$id."'");
      foreach($query as $key)
      {
        $id = $key["MaMonHoc"];
        $ten = $key["TenMH"];
        $st = $key["SoTiet"];
        
      }

    ?>
  <!---fomr sua---->
  <div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="./xulysuamonhoc.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">Mã môn học</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly name="txt_mmh" value="<?php echo $id ?>" />
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên môn học</label>
            <input class="form-control" id="newField9" type="text" placeholder=""  required name="txt_tmh" value="<?php echo $ten ?>" />
           
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Số tiết</label>
            <input class="form-control" id="newField12" type="text" placeholder="" required name="txt_st" value="<?php echo $st ?>" />
            
        </div> 
        <div class="d-grid">
            <button class="btn btn-light" id="submitButton" type="reset" name="">Hủy</button>
            <button class="btn btn-primary" id="submitButton" type="submit" name="suamh">cập nhật</button>
            <button class="btn btn-danger" id="submitButton" type="submit" name="">Thoát</button>
        </div>
    </form>
</div>
  <!---end---->
</body>
</html>
<?php 
    include("./footer.php");
?>