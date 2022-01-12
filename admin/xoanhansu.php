<?php
include("./ketnoi.php");
$user_xoa=$_REQUEST["ma_nv"]; //Nhận giá trị user từ link xóa của quantri.php
$sql="delete from tbl_nhansu where MaNV='".$user_xoa."'";
$kq=mysqli_query($kn,$sql) or die ("Không thể xuất thông tin sản phẩm ".mysqli_error($kn, $sql));
echo ("<script language=javascript>
{
confirm('Xóa thành công');
window.location='QLNS.php';
}   
</script>
");
?>