<?php
include("./ketnoi.php");
$user_xoa=$_REQUEST["ma_bd"]; //Nhận giá trị user từ link xóa của quantri.php
$sql="delete from tbl_baidang where MaBaiDang='".$user_xoa."'";
$kq=mysqli_query($kn,$sql) or die ("Không thể xuất thông tin này ".mysqli_error($kn, $sql));
echo ("<script language=javascript>
{
confirm('Xóa thành công');
window.location='QLBD.php';
}   
</script>
");
?>