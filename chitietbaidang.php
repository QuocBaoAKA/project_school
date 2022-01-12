<?php
    require("user/header.php");
    require("admin/ketnoi.php");
    $id = $_REQUEST["id"];
    $tl = "TaiLieu";
    $sql="select * from tbl_baidang where MaBaiDang =$id";
    $kq=mysqli_query($kn,$sql);
    $row =mysqli_fetch_array($kq);    
    // echo "<pre>";
    // print_r($row);
    // die;
?>
    <title>Document</title>
    <style>
        .baidang_ground {
            width: 100%;
            margin: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: auto;
        }
        .baidang-text h2{
            text-align: center;
            font-size: 25px;
        }
        .baidang-image{
            margin: auto;
            width: 90%;
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
       .title-tt {
           display: none;
       }
       
    </style>
    <div class="text-top">
        <h2>Thông báo</h2>
    </div>
    <div class="date">
        <i class='bx bx-calendar'></i> <p><?php echo $row["2"] ?></p>
    </div>
    <div class="baidang_ground">
        <div class="baidang-text">
            <h2><?php echo $row["1"] ?></h2>
        </div>
        <!-- <div class="baidang-image">
            <img src="admin/upload/<?php echo $row["4"] ?>">
        </div> -->
            <div class='baidang-iframe'>
                <iframe src="admin/pdf/<?php echo $row["6"] ?>"></iframe>
            </div>
       <!-- <iframe src='admin/pdf/<?php echo $row["6"] ?>'></iframe> -->
        
        
        <div class="baidang-content" style="padding-top: 15px;">
        <?php echo $row["3"] ?>
        </div>
    </div>

    <?php
        require("user/fotter.php");
    ?>