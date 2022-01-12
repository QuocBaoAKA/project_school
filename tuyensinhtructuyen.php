
<?php
    require("user/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tuyển sinh</title>
    <style>
        .carousel {
            display: none;
        }
        .rightcolumn {
            display: none;
        }
        .tuyensinh-banner{
            width: 90%;
            margin: auto;
        }
        .tuyensinh-banner img{
            border-radius: 8px;

        }
        .tuyensinh-title {
            width: 90%;
            margin: auto;
            height: 50px;
            border-left: 5px solid #96191D;
            margin-top: 20px;
        }
        .tuyensinh-title h2{
            text-transform: uppercase;
            padding-left: 10px;
            padding-top: 5px;
        }
        .tuyensinh-form {
            width:100%;
            margin-left: 18rem;
        }
        .tuyensinh-form form {
            width: 80%;
            
        }
        .form-control {
            padding: 8px;
            
        }
        .title-tt {
            display: none;
        }
        .form-mail {
            display: none;
        }
        .tuyensinh-tl {
            width: 90%;
            margin-left: 15rem;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .tuyensinh-tl h2{
            text-align: center;
            text-transform: uppercase;
            font-size: 30px;
            color: #96191D;
        }
        .tuyensinh-tl p{
            text-align: center;
            margin-bottom: 25px;
        }
        .btn-primary {
            margin-left: 22rem;
        }
        .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 16px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        }

/* Hide the browser's default radio button */
        .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        }

/* Create a custom radio button */
        .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #eee;
        border-radius: 50%;
        }

/* On mouse-over, add a grey background color */
        .container:hover input ~ .checkmark {
        background-color: #ccc;
        }

/* When the radio button is checked, add a blue background */
        .container input:checked ~ .checkmark {
        background-color: #2196F3;
        }

/* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
        content: "";
        position: absolute;
        display: none;
        }

/* Show the indicator (dot/circle) when checked */
        .container input:checked ~ .checkmark:after {
        display: block;
        }

/* Style the indicator (dot/circle) */
    .container .checkmark:after {
        top: 7px;
        left: 7px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }
    .alert{
        margin-left: 28rem;
        margin-bottom: 21px;
    }
    </style>
</head>
<body>
    <div class="tuyensinh-banner">
        <img src="hinhanh/tuyensinh.png">
    </div>
    <div class="tuyensinh-title">
        <h2>TUyển sinh</h2>
    </div>
    <div class="tuyensinh-tl">
        <h2>ĐĂNG KÝ TUYỂN SINH TRƯỜNG Mần mon - tiểu học tân minh trí</h2>
        <p>Quý phụ huynh vui lòng điền đầy đủ thông tin vào form bên dưới<br> Nhà trường sẽ liên hệ với Quý phụ huynh trong thời gian sớm nhất</p><br>
        <p>Xin cảm ơn Quý phụ huynh đã tin tưởng nhà trường</p>
    </div>
    <?php
             if(isset($_SESSION['message']))
                        {
                            echo '<div class="alert alert-success alert-dismissible fade show">
                                  <strong>Thông báo!</strong> ' .$_SESSION['message'].'
                                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                              </div>';
                            unset($_SESSION['message']);
                            
                        }
                if(isset($_SESSION['message1'])){
                    echo '<div class="alert alert-danger alert-dismissible fade show">
                                  <strong>Thông báo!</strong> ' .$_SESSION['message1'].'
                                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                              </div>';
                            unset($_SESSION['message1']);
                }
             ?>
    <div class="tuyensinh-form">
    <form class="needs-validation" action="xltuyensinh.php" method="post">
        <div class="mb-3 has-validation">
            <label for="exampleInputEmail1" class="form-label">Họ tên cha mẹ học sinh <span style="color: red;">*</span></label>
            <input type="text" class="form-control"  name="txt-cm" required="required">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Số điện thoại liên hệ <span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="txt-sdt" id="exampleInputPassword1" required="required">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Địa chỉ <span style="color: red;">*</span></label>
            <input type="mail" class="form-control" name="txt-dc" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="mail" class="form-control" name="txt-mail" id="exampleInputPassword1">
        </div>
        <div class="mb-3 has-validation">
            <label for="exampleInputEmail1" class="form-label">Họ tên học sinh <span style="color: red;">*</span></label>
            <input type="text" class="form-control" id="validationCustomUsername" name="txt-hs" aria-describedby="inputGroupPrepend" required="required">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Năm sinh</label>
            <input type="date" class="form-control" name="txt-date" id="exampleInputPassword1">
        </div>
        <span>Giới tính</span> &nbsp;
        <label class="container">Nam
        <input type="radio" checked="checked" name="radio-gt" value="Nam">
        <span class="checkmark"></span>
        </label>
        <label class="container">Nữ
        <input type="radio" name="radio-gt" value="Nữ">
        <span class="checkmark"></span>
        </label>

        <span>Lớp học mà gia đình quan tâm</span> &nbsp;
        <label class="container">Lớp 1
        <input type="radio" checked="checked" name="radio-mn" value="Lớp 1">
        <span class="checkmark"></span>
        </label>
        <label class="container">Mần non
        <input type="radio" name="radio-mn" value="Mần non">
        <span class="checkmark"></span>
        </label>
        <div class="mb-3 has-validation">
            <label for="exampleInputEmail1" class="form-label">Ghi Chú</label>
            <textarea type="text" class="form-control" id="validationCustomUsername" name="txt-gc"></textarea>
        </div>
        <button type="submit" name="btn-gui-ts" class="btn btn-primary">Gửi thông tin</button>
    </form>
    </div>
</body>
</html>
<?php
    require("user/fotter.php");
?>