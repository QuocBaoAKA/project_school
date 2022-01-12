<?php
  require("./user/header.php");
  require("./admin/ketnoi.php");
  $sql = "select * from tbl_baidang where TheLoai ='Tin Tức' ";
  $result = mysqli_query($kn,$sql);
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ | Trường MN & TH Tân Minh Trí</title>
    <style>
        .card {
          box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
          border-radius: 5px;
          border: none;
        }
        .tintuc-title {
          width: 90%;
          margin: auto;
          height: 40px;
          border-left: 5px solid #96191D;
        }
        .tintuc-title h2 {
          font-size: 25px;
          color: #96191D;
          padding-left: 8px;
          text-transform: uppercase;
          padding-top: 8px;
        }
        .tintic_ground {
          width: 876px;
          height: 150px;
          border: 1px solid #ccc;
          margin: auto;
          display: flex;
          margin-bottom: 20px;
          margin-top: 1rem;
        }
        .tintuc_pr {
          width: 250px;
          height: 145px;
        }
        .tintuc_pr img {
          width: 100%;
          height: 100%;
          border-radius: 5px;
         
          margin-left: 8px;
        }
        .tintuc_text {
          padding-left: 30px;
        }
        .tintuc_text p {
          padding-top: 20px;
        }
        .tintuc_text h1{
            font-size: 25px;
            display: block;
        }
        .video_contact {
          display: flex;
          justify-content: center;
          align-items: center;
          margin-top: 5px;
          overflow-x: auto;
        }
        .video_contact::-webkit-scrollbar{
          height: 10px;
          background-color: #fff;
      
        }
        .video_contact::-webkit-scrollbar-thumb{
          background-color: #ccc;
          border-radius: 15px;
        }
        .video {
          margin-right: 15px;
        }
        .video_header{
          width: 100%;
          margin: auto;
          margin-top: 1rem;        
        }
        .video_header h1{
          text-align: center;
          font-size: 33px;
          font-weight: 500;
          text-transform: uppercase;
          white-space: nowrap; 
          overflow: hidden;
          text-overflow: ellipsis;
        }
        /* .video_header h1::after{
          position: absolute;
          content: "";
          width: 190px;
          left: 50%;
          margin-left: 95px ;
          border-top: 2px solid #96191D;
          bottom: -25px;
        } */
        .hinhanh-ground {
          width: 100%;
          display: flex;
          flex-wrap: wrap;
        }
        .hinhanh-ground img {
          width: 250px;
          height: 200px;
          margin: 0 7px 8px;
          border-radius: 4px;
        }
        .tintuc_text a{
          text-decoration: none;
        }
    </style>
  </head>
  <body>
    <div class="card">
    
      <div class="tintuc-title">
        <h2>Tin Tức</h2>
      </div>
      <?php while ($row = mysqli_fetch_array($result)) {

			 ?>
      <div class="tintic_ground">
        <div class="tintuc_pr">
          <img src="./admin/upload/<?php echo $row["Hinhanh"] ?>">
        </div>
        <div class="tintuc_text">
          <p><i class='bx bx-calendar'></i> <?php echo $row['NgayDang']; ?></p>
          <h1><?php echo $row['TenBaiDang']; ?></h1>
          <a href="chitiettintuc.php?id=<?php echo $row['MaBaiDang'] ?>">Xem thêm</a>
        </div>
        
      </div>
      <?php } ?>
    </div>

    <div class="video_header">
      <h1>Video</h1>
    </div>
    <div class="video_contact">
      <div class="video">
      <iframe width="362" height="218" src="https://www.youtube.com/embed/PuEtEjVbwxk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="video">
      <iframe width="362" height="218" src="https://www.youtube.com/embed/PuEtEjVbwxk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="video">
      <iframe  width="362" height="218" src="https://www.youtube.com/embed/Hqv0uhvE7pE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="video">
      <iframe width="362" height="218" src="https://www.youtube.com/embed/vL_5REkKkFg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="video">
      <iframe width="362" height="218" src="https://www.youtube.com/embed/dSeQwXrfTq0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="video_header">
      <h1>Hình Ảnh Hoạt Động</h1>
    </div>
    <div class="hinhanh-ground">
        <img src="https://scontent.fvca1-4.fna.fbcdn.net/v/t1.18169-9/18582478_420886744936980_7657441214011633258_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=X5q20wngojcAX-ZWZmT&_nc_ht=scontent.fvca1-4.fna&oh=00_AT_01dkKc8C5DfazAmKN8F272nEUugqY3sfdA73p8HgBIQ&oe=61E2657D">
        <img src="https://scontent.fvca1-1.fna.fbcdn.net/v/t1.18169-9/18557429_420886568270331_4050294674625975767_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=JcDdFw5LJCoAX8zxKg6&_nc_ht=scontent.fvca1-1.fna&oh=00_AT_LPuH1i7_vzIVfPbVXAuovw45b1YOhig52e_yIao50LA&oe=61E18C69">
        <img src="https://scontent.fvca1-4.fna.fbcdn.net/v/t1.18169-9/14333685_294343177591338_5809083752587526295_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=M4Klq3E8CpAAX_CZxU5&_nc_ht=scontent.fvca1-4.fna&oh=00_AT_FVWL2OvMEkyI8GN7w_3w70lkpbOvQSTKDSJgbXTqodw&oe=61E50DF7">
        <img src="https://scontent.fvca1-3.fna.fbcdn.net/v/t1.18169-9/14355032_294342447591411_3741988943973205634_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=YQr3n7Jcl0gAX8IWJmw&tn=XD7CgsIHLgD_Kdu8&_nc_ht=scontent.fvca1-3.fna&oh=00_AT_x1B4jaYm3BUgJLeWHKgagMw834JkCtP_VknR8pGB_ww&oe=61E3D38D">
        <img src="https://scontent.fvca1-4.fna.fbcdn.net/v/t1.18169-9/14330006_293911887634467_7797958863691218477_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=BR7uRjlBHKsAX8FVI3p&_nc_ht=scontent.fvca1-4.fna&oh=00_AT9nFpmbNg_KunGX-pQ8zz1ouHEqBhrzdR6MeLG2vF9n0w&oe=61E341A5"> 
        <img src="https://scontent.fvca1-1.fna.fbcdn.net/v/t1.18169-9/14199739_291738291185160_7005590931592764411_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=0t50fDICc2EAX_mX-GL&_nc_ht=scontent.fvca1-1.fna&oh=00_AT9zV5OYne-QNBuDlFr2BqtN9f90-hhyvKc0rbxuRWZzrw&oe=61E348A3"> 
        <img src="https://s3.ap-southeast-1.amazonaws.com/kiddihub-production/images/truong-tieu-hoc-minh-tri-phuong-721571382383.jpg">
    </div>

    
  </body>
</html>
<?php
  require("./user/fotter.php");
?>