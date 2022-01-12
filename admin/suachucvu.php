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
      $query = mysqli_query($kn, "select * from tbl_chucvu where MaChucVu = '".$id."'");
      foreach($query as $key)
      {
        $id = $key["MaChucVu"];
        $ten = $key["TenDN"];
        
      }

    ?>
  <!---fomr sua---->
  <div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="./xulysuachucvu.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">Mã chức vụ</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly name="txt_mcv" value="<?php echo $id ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField:required"></div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên chức vụ</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_tcv" value="<?php echo $ten ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField9:required">Tên khen thưởng không được để trống.</div>
        </div>
       
        <div class="d-grid">
            <button class="btn btn-primary" id="submitButton" type="submit" name="suachucvu">Cập nhật</button>
        </div>
    </form>
</div>
  <!---end---->
</body>
</html>
<?php 
    include("./footer.php");
?>