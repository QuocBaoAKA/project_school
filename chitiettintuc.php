<?php
    require("./user/header.php");
    require("./admin/ketnoi.php");
    // $sql_bv = "SELECT * FROM tbl_baidang WHERE tbl_baidang.MaBaiDang = '$_GET[id]' ORDER BY id DESC";

        $id = $_REQUEST["id"];
        $sql="select * from tbl_baidang where MaBaiDang =$id";
    $kq=mysqli_query($kn,$sql);
    $row = mysqli_fetch_array($kq);
    // echo "<pre>";
    // print_r($row);
    // die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .baidang_ground {
            width: 100%;
            margin: auto;
            display: flex;
            flex-direction: column;
        }
        .baidang-text h2{
            text-align: left;
            font-size: 25px;
            padding-left: 35px;
            font-weight: 600;
            color: #6C4040;
        }
        .baidang-image{
            margin: auto;
            width: 60%;
        }
        .baidang-image img {  
            width: 100%;
            height: 400px;
            border-radius: 10px;
        }
        .baidang-iframe {
            width: 90%;
            margin: auto;
            margin-top: 10px;
            height: 800px;
        }
        .baidang-iframe iframe{
            width: 100%;
            height: 100%;
        }
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
        .date{
            float: left;
            display: flex;
            margin-left: 3rem;
        }
        .date i{
            font-size: 20px;
            margin-right: 8px;
        }     
        .baidang-content {
            margin: auto;
            margin-top: 25px;
            margin-bottom: 1rem;
            justify-content: center;
           
            text-align: center;
        }    
        .title-tt{
            display: none;
        }
        .form-mail {
            display: none;
        }  
        /* .rightcolumn{
            display: none;
        } */
        /* .leftcolumn{
            width: 90%;
        } */
            .leftcolumn {
    float: left;
    width: 70%;
    height: 100%;
    margin-left: 20px;
    }

    /* Right column */
    .rightcolumn {
    float: right;
    width: 25%;
    margin-right: 10px;
    }
    </style>

<div class="text-top">
        <h2>Tin tức</h2>
    </div>
    <div class="date">
        <i class='bx bx-calendar'></i> <p><?php echo $row["NgayDang"] ?></p>
    </div>
    <div class="baidang_ground">
        <div class="baidang-text">
            <h2><?php echo $row["TenBaiDang"] ?></h2>
        </div>
        <div class="baidang-image">
            <img src="admin/upload/<?php echo $row["Hinhanh"] ?>">
        </div>
        <!-- <div class="baidang-iframe">
            <iframe src="admin/pdf/<?php echo $row["NoiDung"] ?>"></iframe>
        </div> -->
        <div class="baidang-content">
            <?php echo $row["NoiDung"] ?>
        </div>
    </div>

<?php
    require("user/fotter.php");
?>