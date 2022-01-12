<?php
  require("./user/header.php");
  require("./admin/ketnoi.php");
  $sql = "select * from tbl_baidang where TheLoai ='Tin Tức' ";
  $result = mysqli_query($kn,$sql);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin Tức</title>
    <style>
        .text-top {
            width: 90%;
            height: 50px;
            border-left: 5px solid #2dc653;
            margin-left: 3rem;
        }
        .text-top h2{
            font-size: 25px;
            padding-left: 20px;
            padding-top: 8px;
            text-transform: uppercase;
            color: #f94144;
            font-weight: 600;
        }
        .leftcolumn {
            float: none;
            width: 90%;
        }
        .rightcolumn {
            display: none;
        }
        .tintuc-gr {
            width: 90%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin: auto;
            flex-wrap: wrap;
        }
        .tintuc-c00 {
            width: 350px;
            height: 400px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            border-radius: 5px;
            margin: 0 15px 15px;
        }
        .tintic-anh {
            width: 350px;
            height: 200px;
        }
        .tintic-anh img{
            width: 100%;
            height: 100%;
        }
        .tintuc-date {
            display: flex;
        }
        .tintuc-text h2{
            text-align: center;
            color: rgb(114 47 40);
            font-size: 22px;
            line-height: 30px;
            text-transform: uppercase;
        }
        .title-tt {
            display: none;
        }
        .form-mail{
            display: none;
        }
        .btn-c00 {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btn-c00 a{
            text-decoration: none;
            width: 150px;
            height: 35px;
            background-color: #2962ff;
            text-align: center;
            border-radius: 8px;
            color: #fff;
            padding-top: 5px;
        }
        .tintuc-date {
            padding-left: 18px;
        }
    </style>
</head>
<body>
    <div class="text-top">
        <h2>Tin tức</h2>
    </div>
    
    <div class="tintuc-gr">
        <?php while ($row = mysqli_fetch_array($result)) {

        ?>
        <div class="tintuc-c00">
            <div class="tintic-anh">
                <img src="./admin/upload/<?php echo $row["Hinhanh"] ?>">
            </div>
            <div class="tintuc-date">
            <p><i class='bx bx-calendar' ></i>  <?php echo $row['NgayDang']; ?></p>
            </div>
            <div class="tintuc-text">
                <h2><?php echo $row['TenBaiDang']; ?></h2>
            </div>
            <div class="btn-c00">
                <a href="chitiettintuc.php?id=<?php echo $row['MaBaiDang'] ?>">Xem Thêm</a>
            </div>
        </div>
        <?php } ?>
    </div>
   
</body>
</html>
<?php
    require("user/fotter.php");
?>