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
      $query = mysqli_query($kn, "select * from tbl_lop where MaLopHoc = '".$id."'");
      foreach($query as $key)
      {
        $id = $key["MaLopHoc"];
        $ten = $key["TenLop"];
        $ss = $key["SiSo"];
        
      }

    ?>
  <!---fomr sua---->
  <div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="./xulysualophoc.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">Mã lớp học</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly name="txt_mlh" value="<?php echo $id ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField:required"></div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên lớp học</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_tlh" value="<?php echo $ten ?>" />
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Sĩ số</label>
            <input class="form-control" id="newField12" type="text" placeholder="" data-sb-validations="required" name="txt_ss" value="<?php echo $ss ?>" />
           
        </div>
      
        <div class="d-grid">
            <button class="btn btn-primary" id="submitButton" type="submit" name="sualop">Cập Nhật</button>
        </div>
    </form>
</div>
  <!---end---->
</body>
</html>
<?php 
    include("./footer.php");
?>