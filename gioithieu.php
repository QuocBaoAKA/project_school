<?php
    require("user/header.php");
?>
<style>
    #carouselExampleCaptions{
        display: none;
    }
    .rightcolumn{
        display: none;
    }
    .leftcolumn{
        width: 100%;
        float: none;
        margin-left: 0;
    }
    
    .gioithieu_gt{
        width: 90%;
        height: 300px;
        margin: auto;
    }
    .gioithieu_gt img{
        width: 100%;
        height: 100%;
        margin: auto;
        border-radius: 5px;
    }
    /*breadcum*/
    .breadcrumb {
        width: 90%;
        margin: auto;
        margin-bottom: 5px;
        height: 50px;
        border-radius: 5px;
        background-color: #f2f2f2;
    }
    .breadcrumb-item{
        padding-left: 8px;
        padding-top: 10px;
    }
    .breadcrumb-item a{
        text-decoration: none;
    }
    .title_page{
        width: 80%;
        margin: auto;
        height: 45px;
        margin-top: 1rem;
        border-left: 8px solid #0066ff;
    }
    .title_page h3{
        font-size: 30px;
        color: #ed3225;
        line-height: 35px;
        padding-left: 20px;
        padding-top: 5px;
    }
    .gioithieu_content{
        width: 80%;
        margin: auto;
        margin-top: 1rem;
    }
    .gioithieu_content h2{
        padding-left: 20px;
    }
</style>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
    <li class="breadcrumb-item"><a href="#">Giới Thiệu</a></li> 
    <li class="breadcrumb-item active" aria-current="page">Lịch Sử</li>
  </ol>
</nav>
<div class="gioithieu_gt">
    <img src="https://mapio.net/images-p/19244906.jpg">
</div>
<div class="title_page">
    <h3>LỊCH SỬ</h3>
</div>
<div class="gioithieu_content">
    <h2>Trường Mầm Non - Tiểu Học Tân Minh Trí</h2>
    <p>Trường tọa lạc trên diện tích 500m2 tại Số 9, Nguyễn Đáng, P. 9, Thành phố Trà Vinh, T. Trà Vinh</p>
</div>


<?php
    require("user/fotter.php");
?>