<?php
    require("user/header.php");
    require("admin/ketnoi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          .wrapper{
  width: 380px;
  padding: 40px 30px 50px 30px;
  background: #fff;
  border-radius: 5px;
  text-align: center;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.wrapper header{
  font-size: 35px;
  font-weight: 600;
}
.wrapper form{
  margin: 40px 0;
}
form .field{
  width: 100%;
  margin-bottom: 20px;
}
form .field.shake{
  animation: shake 0.3s ease-in-out;
}
@keyframes shake {
  0%, 100%{
    margin-left: 0px;
  }
  20%, 80%{
    margin-left: -12px;
  }
  40%, 60%{
    margin-left: 12px;
  }
}
form .field .input-area{
  height: 50px;
  width: 100%;
  position: relative;
}
form input{
  width: 100%;
  height: 100%;
  outline: none;
  padding: 0 45px;
  font-size: 18px;
  background: none;
  caret-color: #5372F0;
  border-radius: 5px;
  border: 1px solid #bfbfbf;
  border-bottom-width: 2px;
  transition: all 0.2s ease;
}
form .field input:focus,
form .field.valid input{
  border-color: #5372F0;
}
form .field.shake input,
form .field.error input{
  border-color: #dc3545;
}
.field .input-area i{
  position: absolute;
  top: 50%;
  font-size: 18px;
  pointer-events: none;
  transform: translateY(-50%);
}
.input-area .icon{
  left: 15px;
  color: #bfbfbf;
  transition: color 0.2s ease;
}
.input-area .error-icon{
  right: 15px;
  color: #dc3545;
}
form input:focus ~ .icon,
form .field.valid .icon{
  color: #5372F0;
}
form .field.shake input:focus ~ .icon,
form .field.error input:focus ~ .icon{
  color: #bfbfbf;
}
form input::placeholder{
  color: #bfbfbf;
  font-size: 17px;
}
form .field .error-txt{
  color: #dc3545;
  text-align: left;
  margin-top: 5px;
}
form .field .error{
  display: none;
}
form .field.shake .error,
form .field.error .error{
  display: block;
}
form .pass-txt{
  text-align: left;
  margin-top: -10px;
}
.wrapper a{
  color: #5372F0;
  text-decoration: none;
}
.wrapper a:hover{
  text-decoration: underline;
}
.btn-submit{
  width: 150px;
  height: 40px;
  margin-top: 30px;
  border-radius: 5px;
  color: #fff;
  padding: 0;
  border: none;
  background: #5372F0;
  cursor: pointer;
  border-bottom: 2px solid rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}

    </style>
</head>
<body>
        <!-- <div class="form-login">
            <h3>Đăng Nhập</h3>
            <form method="POST" action="xldangnhap.php">
                <input type="text" name="user" class="input-form" placeholder="Tên đăng nhập">
                <input type="password" name="pass" class="input-form" placeholder="Mật khẩu">
                <button type="submit" name="btn-submit" class="btn-sb">Đăng Nhập</button><br>
                <center>Hoặc</center><br>
                <a href="./dangky.php" class="btn btn-sb">Đăng ký</a>
            </form>
        </div> -->
        <div class="wrapper">
            <header>Đăng Nhập</header>
            <form method="POST" action="./xldangnhap.php">
            <div class="field email">
                <div class="input-area">
                <input type="text" name="user" placeholder="Tên đăng nhập..">
                <i class='icon bx bx-user'></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
              
            </div>
            <div class="field password">
                <div class="input-area">
                <input type="password" name="pass" placeholder="Mật khẩu...">
                <i class="icon fas fa-lock"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
              
            </div>
            <div class="pass-txt"><a href="quenmatkhau.php">Forgot password?</a></div> 
          <button type="submit" name="btn-submit" class="btn-submit">Đăng Nhập</button>
            </form>
            <div class="sign-txt">Bạn chưa có tài khoản? <a href="dangky.php">Đăng Ký</a></div>
        </div>

   
</body>
</html>
<?php
    require("user/fotter.php");
?>