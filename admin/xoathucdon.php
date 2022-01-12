<?php
include("./ketnoi.php");
$user_xoa=$_REQUEST["ma_td"]; //Nhận giá trị user từ link xóa của quantri.php
$sql="delete from tbl_thucdon where MaTD='".$user_xoa."'";
$kq=mysqli_query($kn,$sql) or die ("Không thể xuất thông tin này ".mysqli_error($kn, $sql));
echo ("<script language=javascript>
{
confirm('Xóa thành công');
window.location='QLTD.php';
}   
</script>
");
?>