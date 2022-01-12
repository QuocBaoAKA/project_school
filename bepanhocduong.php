<?php
    require("user/header.php");
    require("admin/ketnoi.php");
    $sql = "select * from tbl_thucdon hs, tbl_monan sk WHERE sk.MaMonAn = hs.MaMonAn";
    $result = mysqli_query($kn,$sql);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .leftcolumn {
            width: 90%;
        }
        .rightcolumn {
            display: none;
        }
        .carousel-inner{
            display: none;
        }
        .food-eat {
            width: 70%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 15rem;
        }
        .food-eat img {
            width: 100%;
            border-radius: 5px;
        }
        .menu-food {
            width: 90%;
            margin: auto;
            margin-top: 2rem;
            background-color: #fff;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            margin-left: 102px;
        }
        .table thead{
            background-color: #E34033;
            color: #fff;
        }
        .title-tt{
            display: none;
        }
        .form-mail{
            display: none;
        }
    </style>
    
</head>
<body>
    <div class="food-eat">
       <img src="hinhanh/bepan.png" alt="">
    </div>
    <div class="menu-food">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Ngày</th>
        <th scope="col">Buổi ăn</th>
        <th scope="col">Tên món</th>
        <th scope="col">Thành phần dinh dưỡng</th>
        <th scope="col">Số lượng phần ăn</th>
        <th scope="col">Giá</th>
        </tr>
    </thead>
    <tbody>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
            <tr>
            <th><?php echo $row["ThoiGian"] ?></th>
            <td><?php echo $row["BuoiAn"] ?></td>
            <td><?php echo $row["TenMonAn"] ?></td>
            <td><?php echo $row["ThanhPhanDD"] ?></td>
            <td><?php echo $row["SoLuongPhan"] ?></td>
            <td><?php echo $row["Gia"] ?></td>
            </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
</body>
</html>
<?php
    require("user/fotter.php");
?>
