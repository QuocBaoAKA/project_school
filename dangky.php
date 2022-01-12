<?php
	require("user/header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng ký</title>
	<style>
		.form-dangky {
			width: 80%;
			margin: auto;
			box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
			border-radius: 8px;
		}
		.wrapper1{
			display: inline-flex;
			background: #fff;
			height: 90px;
			width: 400px;
			align-items: center;
			justify-content: center;
			border-radius: 5px;
			padding: 20px 15px;
			margin: auto;
			margin-left: 15px;
			
			}
			.wrapper1 .option{
			background: #fff;
			height: 100%;
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: space-evenly;
			margin: 0 10px;
			border-radius: 5px;
			cursor: pointer;
			padding: 0 10px;
			border: 2px solid lightgrey;
			transition: all 0.3s ease;
			}
			.wrapper1 .option .dot{
			height: 20px;
			width: 20px;
			background: #d9d9d9;
			border-radius: 50%;
			position: relative;
			}
			.wrapper1 .option .dot::before{
			position: absolute;
			content: "";
			top: 4px;
			left: 4px;
			width: 12px;
			height: 12px;
			background: #0069d9;
			border-radius: 50%;
			opacity: 0;
			transform: scale(1.5);
			transition: all 0.3s ease;
			}
			input[type="radio"]{
			display: none;
			}
			#option-1:checked:checked ~ .option-1,
			#option-2:checked:checked ~ .option-2{
			border-color: #0069d9;
			background: #0069d9;
			}
			#option-1:checked:checked ~ .option-1 .dot,
			#option-2:checked:checked ~ .option-2 .dot{
			background: #fff;
			}
			#option-1:checked:checked ~ .option-1 .dot::before,
			#option-2:checked:checked ~ .option-2 .dot::before{
			opacity: 1;
			transform: scale(1);
			}
			.wrapper .option span{
			font-size: 20px;
			color: #808080;
			}
			#option-1:checked:checked ~ .option-1 span,
			#option-2:checked:checked ~ .option-2 span{
			color: #fff;
			}
			.form-dk {
				width: 90%;
				margin: auto;
			}
			.form-dk input{
				height: 45px;
				margin-bottom: 15px;
				padding-left: 10px;
				
			}
			.form-dk input:focus{
				border-bottom: 2px solid #0066ff;
			}
			.btn_luu_dk {
				width: 150px;
				height: 45px !important;
				margin-bottom: 15px;
		
				text-align: center;
			}
			.form-gh {
				display: flex;
				justify-content: center;
				
			}
			.form-dangky h3{
				padding-left: 43px;
				color: #0066ff;
				font-weight: 600;
			}
			.form-dangky p{
				padding-left: 43px;
				color: red;
				
			}
			.form-dk select{
				width: 100%;
				height: 45px;
				border-radius: 5px;
				border: 1px solid #ccc;
			}
			.form-dk select:focus{
				border: 1px solid #0066ff;
			}
	</style>
</head>
<body>
	<div class="form-dangky">
		<h3>Đăng ký</h3>
		<p>Vui lòng điền đầy đủ thông tin để đăng ký tài khoản</p>
		<form action="./xulydangky.php" method="post">
			<div class="form-dk">
				<label>Tên đăng nhập<span style="color: red;">*</span></label>
				<input type="text" name="txt_tdn" pattern="^[a-z A-Z]{1,50}$" title="Tên đăng nhập không được chứa dấu" required>
			</div>
			<div class="form-dk">
				<label>Mật khẩu <span style="color: red;">*</span></label>
				<input type="password" name="txt_mk" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" title="Mật khẩu chứa ít nhất 8 ký tự bao gồm chữ và số" required>
			</div>
			<div class="form-dk">
				<label>Họ tên <span style="color: red;">*</span></label>
				<input type="text" name="txt_hoten" required>
			</div>
			<div class="form-dk">
				<label>Địa chỉ <span style="color: red;">*</span></label>
				<input type="text" name="txt_diachi" required>
			</div>
			<div class="form-dk">
				<label>Số điện thoại <span style="color: red;">*</span></label>
				<input type="text" name="txt_sdt" pattern="0([0-9]{9}||[0-9]{10})" title="Số điện thoại bao gồm 9 số và bắt đầu bằng 0" required>
			</div>
			<div class="form-dk">
				<label>Email <span style="color: red;">*</span></label>
				<input type="email" name="txt_email" required>
			</div>
			
			<div class="wrapper1">
	
				<input type="radio" name="gioitinh" value="Nam" id="option-1" checked>
				<input type="radio"  name="gioitinh" value="Nữ" id="option-2">
				<label for="option-1" class="option option-1">
					<div class="dot"></div>
					<span>Nam</span>
					</label>
				<label for="option-2" class="option option-2">
					<div class="dot"></div>
					<span>Nữ</span>
				</label>
			</div>
			<!-- <input type="radio" name="gioitinh" value="Nam" checked>Nam
			<input type="radio" name="gioitinh" value="Nữ">Nữ<br> -->
			<div class="form-dk">
				<label>Ngày sinh <span style="color: red;">*</span></label>
				<input type="date" name="ngaysinh">
			</div>
			<div class="form-dk">
				<label>Quyền <span style="color: red;">*</span></label>
				<select name="txt_quyen" required>
				<option disabled selected>--Quyền--</option>
				<option value="Q0003">Phụ huynh</option>
				<option value="Q0004">Người dùng</option>
			</select>
			</div>
			<div class="form-gh">
				<input type="submit" name="btn_luu" class="btn_luu_dk" value="Đăng Ký">
			</div>
			
		</form>
	</div>
</body>
</html>
<?php
	require("user/fotter.php");
?>