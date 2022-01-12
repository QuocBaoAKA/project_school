<?php 	
	$kn=mysqli_connect("localhost", "root", "", "csdl_huy1");
	mysqli_query($kn, "SET NAMES 'utf8'");
	if(mysqli_connect_error())
	{
		echo "khong co ket noi" .mysqli_connect_error();
		exit();
	}
 ?>
