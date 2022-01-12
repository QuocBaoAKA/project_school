<?php
require("./ketnoi.php");
session_start();
if(isset($_POST['suakt'])){
    
    $makt = $_POST['txt_mkt'];
    $name = $_POST['txt_tkt'];
    $st = $_POST['txt_st'];
    $sql = "UPDATE tbl_khoangthu SET TenKT='$name', SoTien='$st' WHERE MaKT='$makt'";
    $query_run = mysqli_query($kn, $sql);
    if ($query_run) {
        $_SESSION['status'] = "Cập nhật Thành Công!";
        header("location: QLKHOANGTHU.php");

    } else {
        $_SESSION['status1'] = "Cập nhật Không Thành Công!";
        // header("location: QLKHOANGTHU.php");
    }
  }
  ?>