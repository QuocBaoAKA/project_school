<?php
    require("./header.php");
    require("./ketnoi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .px-5 {
            width: 80%;
            margin: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            background-color: #fff;
            border-radius: 6px;
        }
        .d-grid{
          width: 100%;
          display: flex !important;
          flex-direction: row;
          justify-content: center;
          align-items: center;
        }
        .d-grid .btn-primary{
          width: 150px;
        }
        .d-grid .h1{
          color: #000;
          background-color: #f2f2f2 !important;
        }
        .h2 {
          background-color: #0066ff;
          color: #fff;

          margin-left: 20px;
          
        }
    </style>
</head>
<body>
<div class="container px-5 my-5"> 
                    <h4 style="padding-bottom: 25px; padding-top: 15px">Form nhập dữ liệu</h4>
                    <form id="formUpImg" action="./xlthemkhoangthu.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label" for="tenTaiKhoản">Mã khoảng thu</label>
                            <input class="form-control" id="tenTaiKhoản" type="text" placeholder="" required name="txt_kt" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tenTaiKhoản">Tên khoảng thu</label>
                            <input class="form-control" id="tenTaiKhoản" type="text" placeholder="" required name="txt_tkt" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tenTaiKhoản">Số tiền <span style="color: red;">*</span></label>
                            <input class="form-control" id="tenTaiKhoản" type="text" min="0"  required title="Số tiền phải lớn hơn 0" name="txt_st" />
                        </div>
                        <span style="color: red; padding-bottom: 10px;">* Đơn vị tiền tệ VND</span>
                        <div class="d-grid">
                            <button class="btn btn-primary h1" type="reset">Nhập lại</button>
                            <button class="btn btn-primary h2" id="submitButton" name="btn_kt" type="submit">Thêm</button>
                        </div>
                    </form>
</div>
</body>
</html>
<?php
    require("./footer.php");
?>  