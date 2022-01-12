<?php
    require("user/header.php");
    require("admin/ketnoi.php");
    if(isset($_POST["gui"])){
        $taikhoan = $_POST["taikhoan"];
        $matkhaucu = $_POST["pass_cu"];
        $matkhaumoi = $_POST["pass_moi"];
        $sql = "SELECT * FROM tbl_taikhoan WHERE TenDangNhap ='".$taikhoan."' AND MatKhau ='".$matkhaucu."' LIMIT 1";
        $row = mysqli_query($kn, $sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $sql_update = mysqli_query($kn, "UPDATE tbl_taikhoan SET TenDangNhap='".$taikhoan."' AND MatKhau='".$matkhaumoi."' ");
            echo "<script>alert('Mật khẩu đã được thay đổi')</script>";
        }
        else{
            echo "<script>alert('Tài khoản hoặc mật cũ không đúng.')</script>";
        }
    }
?>

<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tài khoản</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="taikhoan">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mật khẩu cũ</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass_cu">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mật khẩu mới</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass_moi">
  </div>
  
  <button type="submit" class="btn btn-primary" name="gui">Submit</button>
</form>

<?php
    require("user/fotter.php");
?>