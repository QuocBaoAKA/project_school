<?php session_start();
  if(!isset($_SESSION["QuanTri"]))
  {
    echo"<script language=javascript>
    alert('Bạn không có quyền trên trang này!');
    window.location='../dangnhap.php';
    </script>";
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị</title>
    <!--font boxicon---->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <!-- MDB -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">

    <!--css admin--->
    <link rel="stylesheet" href="../css/app.css">
    <style>
      .dataTables_length .form-select{
        width: 80px !important;
      }
      .sidebar-user {
        background-color: #F4F4F4;
        height: 50px;
        border-radius: 8px;
      }
     .sidebar-user-info h3{
       font-size: 16px;
       color: #000;
       padding-top: 10px;
     }
    </style>
</head>
<body>
<div class="sidebar" id="style-1">
    
        <div class="sidebar-logo">
          <h2>ADMIN</h2>
          <div class="sidebar-close" id="sidebar-close">
            <i class="bx bx-left-arrow-alt"></i>
          </div>
        </div>
        <div class="sidebar-user">
          <div class="sidebar-user-info">
            <?php if (isset($_SESSION["QuanTri"])) {
                echo "<h3>Xin chào:  &nbsp".$_SESSION["QuanTri"]."</h3>";
              } 
              else
              {
                echo "<h3>".$_SESSION["GiaoVien"]."</h3>";
              }?>
            <!--<i class="bx bx-user profile-image"></i>-->
          <div class="sidebar-user-name">
             
            </div>
          </div>
          <a href="../dangxuat.php">
            <button class="btn btn-outline">
              <i class="bx bx-log-out bx-flip-horizontal"></i>
            </button>
          </a>
        </div>
        <!-- SIDEBAR MENU -->
        <ul class="sidebar-menu">
          <li>
            <a href="#" class="active">
              <i class="bx bx-home"></i>
              <span>Trang Chủ</span>
            </a>
          </li>
          
          <?php if (isset($_SESSION["QuanTri"])) { ?>
          <li>
            <a href="./QLNS.php" class="">
            <i class="fas fa-book-reader"></i>
              <span>Quản lý nhân sự</span>
            </a>
          </li>
          <li>
            <a href="./QLDKNH.php">
            <i class='bx bxs-graduation'></i>
              <span>Quản lý tuyển sinh</span>
            </a>
          </li>
          
          
          <li class="sidebar-submenu">
            <a href="./QLTK.php" class="sidebar-menu-dropdown">
            <i class='bx bx-user'></i>
              <span>Tài khoản</span>
              <div class="dropdown-icon"></div>
            </a>
            <ul class="sidebar-menu1 sidebar-menu-dropdown-content">
              <li>
                <a href="./QLTK.php">Tài Khoản</a>
              </li>
              <li>
                <a href="./QLQUYEN.php">Quyền</a>
              </li>
              <li>
                <a href="./QLCV.php">Chức Vụ</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-submenu">
            <a href="#" class="sidebar-menu-dropdown">
            <i class='bx bx-food-menu' ></i>
              <span>Thực phẩm</span>
              <div class="dropdown-icon"></div>
            </a>
            <ul class="sidebar-menu1 sidebar-menu-dropdown-content">
              <li>
                <a href="./QLTD.php">Thực đơn</a>
              </li>
              <li>
                <a href="QLMA.php">Món ăn</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="./QLBD.php">
            <i class='bx bx-news'></i>
              <span>Quản lý tin tức</span>
            </a>
          </li>
          <!-- <li>
            <a href="./QLDKNH.php">
            <i class='bx bx-task'></i>
              <span>Quản lý nhập học</span>
            </a>
          </li> -->
          <li>
            <a href="./QLKHOANGTHU.php">
            <i class='bx bx-money'></i>
              <span>Quản lý khoản thu</span>
            </a>
          </li>
        <?php } ?>
        <li>
            <a href="./QLMH.php" class="">
            <i class="fas fa-book-reader"></i>
              <span>Quản lý môn học</span>
            </a>
          </li>

          <li class="sidebar-submenu">
            <a href="#" class="sidebar-menu-dropdown">
            <i class="fas fa-user-graduate"></i>
              <span>Học sinh</span>
              <div class="dropdown-icon"></div>
            </a>
            <ul class="sidebar-menu sidebar-menu-dropdown-content">
              <li>
                <a href="./QLHS.php">Quản lý học sinh</a>
              </li>
              <li>
                <a href="./QLKHENTHUONG.php">Khen thưởng</a>
              </li>
              <li>
                <a href="./QLDIEM.php">
                <span>Quản lý điểm</span>
                </a>
             </li>
            </ul>
          </li>

          <li>
            <a href="./QLLOP.php" class="">
            <i class='bx bxs-school'></i>
              <span>Quản lý lớp học</span>
            </a>
          </li>

          <li>
            <a href="./QLLGD.php" class="">
            <i class='bx bxs-school'></i>
              <span>Quản lý lịch giảng dạy</span>
            </a>
          </li>

          <li>
            <a href="./QLTHSK.php">
            <i class='bx bx-plus-medical' ></i>
              <span>Quản lý sức khỏe</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- END SIDEBAR MENU -->
   
    <!-- END SIDEBAR -->

    <!-- MAIN CONTENT -->
    <div class="main">
      <div class="main-header">
        <div class="mobile-toggle" id="mobile-toggle">
          <i class="bx bx-menu-alt-right"></i>
        </div>
        
      </div>
      <div class="main-content">
        
      
     

   
               

            