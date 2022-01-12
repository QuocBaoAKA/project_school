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
      $query = mysqli_query($kn, "select * from tbl_baocaonhanh where MaBC = '".$id."'");
      foreach($query as $key)
      {
        $id = $key["MaBC"];
        $matt = $key["MaTT"];
        $dd = $key["DiemDanh"];
      }

    ?>
  <!---fomr sua---->
  <div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="./xlsuabcn.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">Mã báo cáo</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly name="txt_mbc" value="<?php echo $id ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField:required"></div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Mã trạng thái</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_mtt" value="<?php echo $matt ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField9:required">Mã trạng thái không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Điểm danh</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="optionA" type="radio" name="dd" data-sb-validations="required" value="Đủ"  />
                <label class="form-check-label" for="optionA">Đủ</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="optionB" type="radio" name="dd" data-sb-validations="required" value="Vắng" />
                <label class="form-check-label" for="optionB">Vắng</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="newField10:required">Điểm danh không được để trống.</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary" id="submitButton" type="submit" name="suabcn">sửa</button>
        </div>
    </form>
</div>
  <!---end---->
</body>
</html>
<?php 
    include("./footer.php");
?>