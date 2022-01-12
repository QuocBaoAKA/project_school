<?php 
		session_start();
		include("./toarst.php");
		include("admin/ketnoi.php");
		$tdn = $_POST['txt_tdn'];
		$mk = md5($_POST['txt_mk']);
		$hoten = $_POST['txt_hoten'];
		$diachi = $_POST['txt_diachi'];
		$sdt = $_POST['txt_sdt'];
		$email = $_POST['txt_email'];
		$gioitinh = $_POST['gioitinh'];
		$ngaysinh = $_POST['ngaysinh'];
		$result = mysqli_query($kn, "SELECT * FROM `tbl_taikhoan` WHERE TenDangNhap = '".$tdn."'");
		if(isset($_POST['btn_luu'])) 
		{
			if(mysqli_num_rows($result) == 1)
			{
				echo "<script language=javascript>
				alert('Tên đăng nhập đã tồn tại');
				window.location='dangky.php'
				</script>";
				// flash("msg", "Tên đăng nhập đã tồn tại");
				// header("location: dangky.php");
			}
			else
			{
				$query = mysqli_query($kn, "INSERT INTO `tbl_taikhoan` (`MaTK`, `TenDangNhap`, `HoTen`, `MatKhau`, `DiaChi`, `SDT`, `Email`, `GioiTinh`, `NgaySinh`, `MaQuyen`) VALUES (NULL, '".$tdn."', '".$hoten."', '".$mk."', '".$diachi."', '".$sdt."', '".$email."', '".$gioitinh."', '".$ngaysinh."', 'Q0004')");
				echo "<script language=javascript>
				alert('Đăng ký thành công');
				window.location='dangnhap.php'
				</script>";
				// flash("msg", "Đăng nhập thành công");
				// header("location: index.php");
			}
		}
?>