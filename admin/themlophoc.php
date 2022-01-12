<?php 
    include("./header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm lớp học</title>
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
        margin-right: 10px;
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
        margin-right: 10px;
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
<h1 style="text-align: center;">Thêm Lớp Học</h1>
<div class="container px-5 my-5">

    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="./xlthemlop.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">Mã lớp học</label>
            <input class="form-control" id="newField" type="text" placeholder name="txt_mlh" />
            <div class="invalid-feedback" data-sb-feedback="newField:required"></div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên lớp học</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required"name="txt_tlh" />
           
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Sỉ số</label>
            <input class="form-control" id="newField12" type="number" min="1" placeholder="" required name="txt_ss" />
           
        </div> 
        <div class="d-grid">
            <button class="btn btn-light" id="submitButton" type="reset" name="">Hủy</button>
            <button class="btn btn-primary" id="submitButton" type="submit" name="">Thêm</button>
            <button class="btn btn-danger" id="submitButton" type="submit" name="">Thoát</button>
        </div>
    </form>
</div>

</body>
</html>
<?php 
    include("./footer.php");
?>