<?php
include("./ketnoi.php");
$user_xoa=$_REQUEST["ma_dk"]; //Nhận giá trị user từ link xóa của quantri.php
$sql="delete from tbl_phieudangkynhaphoc where MaDK='".$user_xoa."'";
$kq=mysqli_query($kn,$sql) or die ("Không thể xuất thông tin sản phẩm ".mysqli_error($kn, $sql));
echo ("<script language=javascript>
{
confirm('Xóa thành công');
window.location='QLPDKNH.php';
}   
</script>
");
?>