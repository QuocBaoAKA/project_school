<?php
	session_start();
	include ("admin/ketnoi.php");
	if(isset($_POST["btn-submit"])){
		$user = $_POST["user"];
		$pass = md5($_POST["pass"]);
		$Q1 = mysqli_query($kn, "select * from tbl_taikhoan where TenDangNhap='".$user."' and MatKhau ='".$pass."' and MaQuyen = 'Q0001'");
		$Q2 = mysqli_query($kn, "select * from tbl_taikhoan where TenDangNhap='".$user."' and MatKhau ='".$pass."' and MaQuyen = 'Q0002'");
		$Q3 = mysqli_query($kn, "select * from tbl_taikhoan where TenDangNhap='".$user."' and MatKhau ='".$pass."' and MaQuyen = 'Q0003'");
		$Q4 = mysqli_query($kn, "select * from tbl_taikhoan where TenDangNhap='".$user."' and MatKhau ='".$pass."' and MaQuyen = 'Q0004'");
		if(mysqli_num_rows($Q1) == 1)
		{
			$_SESSION["QuanTri"] = $user;
			echo "<script language=javascript>
				alert('Đăng nhập quản trị thành công!');
				window.location='admin/'
				</script>";
		}
		else if(mysqli_num_rows($Q2) == 1)
		{
			$_SESSION["GiaoVien"] = $user;
			echo "<script language=javascript>
				alert('Đăng nhập giáo viên thành công!');
				window.location='admin/'
				</script>";
		}
		else if(mysqli_num_rows($Q3) == 1)
		{
			$_SESSION["PhuHuynh"] = $user;
			echo "<script language=javascript>
				alert('Đăng nhập phụ huynh thành công!');
				window.location='index.php'
				</script>";
		}
		else if(mysqli_num_rows($Q4) == 1)
		{
			$_SESSION["NguoiDung"] = $user;
			echo "<script language=javascript>
				alert('Đăng nhập người dùng thành công');
				window.location='index.php'
				</script>";
		}
		else
		{
			echo "<script language=javascript>
				alert('Sai tên đăng nhập hoặc mật khẩu');
				window.location='dangnhap.php'
				</script>";
		}
	}
	
?>