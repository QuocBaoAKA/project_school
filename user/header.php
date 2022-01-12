<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ | Trường MN & TH Tân Minh Trí</title>
    <!--link bootstrap--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--link icon---->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!--link icon fontawesome---->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="cssuser/style.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="/CodeSeven-toastr-50092cc/build/toastr.min.css">
    <style>
      
      .nav-item .active:hover{
        color: #000 !important;
      }
      .dk {
        display: flex;
        background-color: rgba(var(--bs-light-rgb),var(--bs-bg-opacity))!important;
      }
      .dk h3{
        font-size: 18px;
        color: #000;
        padding-top: 8px;
      }
      .logout{
        display: flex;
        margin-left: 15px;
      }
      .logout i {
        font-size: 18px;
        color: #0066ff;
        padding-top: 10px;
      }
      .logout a{
        color: #000 !important;
        font-size: 18px;
      }
      .carousel-indicators {
        display: none;
      }
      /*nút gọi điện css */
      .hotline-phone-ring-wrap {
      position: fixed;
      bottom: 0;
      left: 0;
      z-index: 999999;
    }
    .hotline-phone-ring {
      position: relative;
      visibility: visible;
      background-color: transparent;
      width: 110px;
      height: 110px;
      cursor: pointer;
      z-index: 11;
      -webkit-backface-visibility: hidden;
      -webkit-transform: translateZ(0);
      transition: visibility .5s;
      left: 0;
      bottom: 0;
      display: block;
    }
    .hotline-phone-ring-circle {
        width: 85px;
      height: 85px;
      top: 10px;
      left: 10px;
      position: absolute;
      background-color: transparent;
      border-radius: 100%;
      border: 2px solid #e60808;
      -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
      animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
      transition: all .5s;
      -webkit-transform-origin: 50% 50%;
      -ms-transform-origin: 50% 50%;
      transform-origin: 50% 50%;
      opacity: 0.5;
    }
    .hotline-phone-ring-circle-fill {
        width: 55px;
      height: 55px;
      top: 25px;
      left: 25px;
      position: absolute;
      background-color: rgba(230, 8, 8, 0.7);
      border-radius: 100%;
      border: 2px solid transparent;
      -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
      animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
      transition: all .5s;
      -webkit-transform-origin: 50% 50%;
      -ms-transform-origin: 50% 50%;
      transform-origin: 50% 50%;
    }
    .hotline-phone-ring-img-circle {
        background-color: #e60808;
        width: 33px;
      height: 33px;
      top: 37px;
      left: 37px;
      position: absolute;
      background-size: 20px;
      border-radius: 100%;
      border: 2px solid transparent;
      -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
      animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
      -webkit-transform-origin: 50% 50%;
      -ms-transform-origin: 50% 50%;
      transform-origin: 50% 50%;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .hotline-phone-ring-img-circle .pps-btn-img {
        display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
    }
    .hotline-phone-ring-img-circle .pps-btn-img img {
        width: 20px;
        height: 20px;
    }
    .hotline-bar {
      position: absolute;
      background: rgba(230, 8, 8, 0.75);
      height: 40px;
      width: 195px;
      line-height: 40px;
      border-radius: 3px;
      padding: 0 10px;
      background-size: 100%;
      cursor: pointer;
      transition: all 0.8s;
      -webkit-transition: all 0.8s;
      z-index: 9;
      box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
      border-radius: 50px !important;
      /* width: 175px !important; */
      left: 33px;
      bottom: 37px;
    }
    .hotline-bar > a {
      color: #fff;
      text-decoration: none;
      font-size: 15px;
      font-weight: bold;
      text-indent: 50px;
      display: block;
      letter-spacing: 1px;
      line-height: 40px;
      font-family: Arial;
    }
    .hotline-bar > a:hover,
    .hotline-bar > a:active {
      color: #fff;
    }
@-webkit-keyframes phonering-alo-circle-anim {
  0% {
    -webkit-transform: rotate(0) scale(0.5) skew(1deg);
    -webkit-opacity: 0.1;
  }
  30% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    -webkit-opacity: 0.5;
  }
  100% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
    -webkit-opacity: 0.1;
  }
}
@-webkit-keyframes phonering-alo-circle-fill-anim {
  0% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    opacity: 0.6;
  }
  50% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
    opacity: 0.6;
  }
  100% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    opacity: 0.6;
  }
}
@-webkit-keyframes phonering-alo-circle-img-anim {
  0% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
  }
  10% {
    -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
  }
  20% {
    -webkit-transform: rotate(25deg) scale(1) skew(1deg);
  }
  30% {
    -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
  }
  40% {
    -webkit-transform: rotate(25deg) scale(1) skew(1deg);
  }
  50% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
  }
  100% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
  }
}
@media (max-width: 768px) {
  .hotline-bar {
    display: none;
  }
}
/*loader*/
.loader {
  position: absolute;
  top: calc(50% - 32px);
  left: calc(50% - 32px);
  width: 64px;
  height: 64px;
  border-radius: 50%;
  perspective: 800px;
  z-index: 999;
}

.inner {
  position: absolute;
  box-sizing: border-box;
  width: 100%;
  height: 100%;
  border-radius: 50%;  
}

.inner.one {
  left: 0%;
  top: 0%;
  animation: rotate-one 1s linear infinite;
  border-bottom: 3px solid #EFEFFA;
}

.inner.two {
  right: 0%;
  top: 0%;
  animation: rotate-two 1s linear infinite;
  border-right: 3px solid #EFEFFA;
}

.inner.three {
  right: 0%;
  bottom: 0%;
  animation: rotate-three 1s linear infinite;
  border-top: 3px solid #EFEFFA;
}

@keyframes rotate-one {
  0% {
    transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
  }
}

@keyframes rotate-two {
  0% {
    transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
  }
}

@keyframes rotate-three {
  0% {
    transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
  }
}

    </style>
</head>
<body onload="initClock()"  class="preloading">
    <!---header---->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#" style="color: #96191D; font-weight: 600;">
        Trường Mầm non - Tiểu học Tân Minh Trí
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item" style="background-color: #0066ff; color: #fff; border-radius: 8px;">
          <?php 
          if (isset($_SESSION["PhuHuynh"])) { ?>
            <div class="dk">
            <h3>Xin chào: <?php echo $_SESSION["PhuHuynh"] ?></h3> 
            <div class="logout">
            <i class='bx bx-log-in' ></i>
            <a class="nav-link" href="dangxuat.php" style="color: #fff; font-size: 16px;">Đăng Xuất</a></div>
          </div>
         
          <?php  } 
          else {?>
            <a class="nav-link" href="dangnhap.php" style="color: #fff; font-size: 16px;">Đăng Nhập</a>
          <?php } ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- <div class="banner-top">
    <img src="http://sgdtravinh.edu.vn/documents/12126790/12126869/12126790_12126869_152006_10092019.png" alt="Hình banner">
</div> -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="hinhanh/bn1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="hinhanh/n2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="hinhanh/bn3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!---modal login---->

<!-- <div id="demo-modal" class="modal">
    <div class="modal__content">
    <div class="wrapper">
    <header>Đăng Nhập</header>
    <form action="./dangnhap.php" method="post" name="frmDangNhap">
      <div class="field email">
        <div class="input-area">
          <input type="text" placeholder="Tên đăng nhập..." name="email">
          <i class='icon bx bx-user'></i>

          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Tên đăng nhập không được để trống</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Mật khẩu..." name="password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Mật khẩu không được để trống</div>
      </div>
      <div class="pass-txt"><a href="#">Quên mật khẩu?</a></div>
      <input type="submit" name="sbmDN" value="Đăng Nhập">
    </form>
   <div class="sign-txt">? <a href="#">Signup now</a></div> -->
    
  <!-- </div>
    <a href="#" class="modal__close">&times;</a>
    </div> -->
   
</div>
<!---end------>
<!--menu---->
<nav class="navbar navbar-expand-md navbar-light bg-light cls-1" style="background-color: #96191D !important;" >
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"  id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: #fff;">Trang Chủ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Giới Thiệu
          </a>
          <ul class="dropdown-menu fade-up" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="gioithieu.php">Lịch Sử</a></li>
            <li><a class="dropdown-item" href="#">Cơ Cấu Tổ Chức</a></li>
            <li><a class="dropdown-item" href="#">Thành Tích</a></li>
            <li><a class="dropdown-item" href="#">Nhân Sự</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Tin Tức, Sự Kiện
          </a>
          <ul class="dropdown-menu fade-up" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="bepanhocduong.php">Bếp Ăn Học Đường</a></li>
            <li><a class="dropdown-item" href="tintuc.php">Tin Tức</a></li>
            <li><a class="dropdown-item" href="#">Văn Bản</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Học Sinh</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Tuyển Sinh
          </a>
          <ul class="dropdown-menu fade-up" aria-labelledby="navbarDropdownMenuLink">
            <!-- <li><a class="dropdown-item" href="#">Tuyển Sinh Mầm Non</a></li>
            <li><a class="dropdown-item" href="#">Tuyển Sinh Tiểu Học</a></li> -->
            <li><a class="dropdown-item" href="tuyensinhtructuyen.php">Tuyển Sinh Trực Tuyến</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lienhe.php">Liên Hệ</a>
        </li>
        <?php if (isset($_SESSION["PhuHuynh"])) { ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Phụ Huynh
            </a>
            <ul class="dropdown-menu fade-up" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="./QLTHSK.php">Tình Hình Sức Khỏe</a></li>
              <li><a class="dropdown-item" href="bepanhocduong.php">Thực Đơn</a></li>
              <!-- <li><a class="dropdown-item" href="tuyensinhtructuyen.php">Tuyển Sinh Trực Tuyến</a></li> -->
              <!-- <li><a class="dropdown-item" href="#">Món Ăn</a></li> -->
              <li><a class="dropdown-item" href="./diemhs.php">Điểm</a></li>
            </ul>
          </li>
        <?php } ?>  
      </ul>
    </div>
  </div>
</nav>
<!---menu-botom---->
<div class="hd_top">
<div class="datetime">
      <div class="date">
        <span id="dayname">Day</span>,
        <span id="month">Month</span>
        <span id="daynum">00</span>,
        <span id="year">Year</span>
      </div>
      <div class="time">
        <span id="hour">00</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">AM</span>
      </div>
    </div>
    <div class="marque">
      <marquee width="100%" scrollamount="5">
        <p>Chào mừng bạn đến với website Trường MN & TH Tân Minh Trí</p>
      </marquee>
    </div>
</div>
<div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
        <a href="tel:0988333069" class="pps-btn-img">
            <img src="https://nocodebuilding.com/wp-content/uploads/2020/07/icon-call-nh.png" alt="Gọi điện thoại" width="50">
        </a>
        </div>
    </div>
    <div class="hotline-bar">
        <a href="tel:02942210236">
            <span class="text-hotline">0294 2210 236</span>
        </a>
    </div>
</div>
<!-- <div class="loader">
  <div class="inner one"></div>
  <div class="inner two"></div>
  <div class="inner three"></div>
</div> -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://dl.dropboxusercontent.com/s/0g338x7mvg1x64z/contact-button-widget.js'></script>
<!--chat zalo--->
<div class="zalo-chat-widget" data-oaid="2705152081474507355" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="" data-height=""></div>
<script src="https://sp.zalo.me/plugins/sdk.js"></script>
<!-- <script>
  $(window).on('load', function(event) {
   $('body').removeClass('preloading');
      // $('.load').delay(1000).fadeOut('fast');
   $('.loader').delay(1000).fadeOut('fast');
});
</script> -->
<script src="https://w.ladicdn.com/popupx/sdk.js" id="61ced158b560d8001316aed9" async></script>
<!---content-->
<div class="row1">
  <div class="leftcolumn">

  
    
<!---end--->
</body>
</html>