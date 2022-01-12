<?php
include("./header.php");
include("./ketnoi.php");
$id = $_REQUEST["Ma"];
$query = mysqli_query($kn, "select * from tbl_baidang where MaBaiDang = '".$id."'");
foreach($query as $key)
{
  $id = $key["MaBaiDang"];
  $ten = $key["TenBaiDang"];
  $date = $key["NgayDang"];
  $noidung = $key["NoiDung"];
  $hinh = $key["Hinhanh"];
  $tl = $key["TheLoai"];
  $Tailieu = $key["TaiLieu"];
}

?>
<style>
    .px-5{
        background-color: #fff;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-radius: 5px;
    }
    .btn-primary {
        width: 150px;
        margin: auto;
        background-color: #0066ff;
        color: #fff;
        margin-bottom: 15px;
    }

</style>
<div class="container px-5 my-5">
    <form id="contactForm" action="./xlsuabaidang.php" method="post" enctype="multipart/form-data" >
        <div class="mb-3">
            <label class="form-label" for="newField">Mã bài đăng</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly name="txt_mbd" value="<?php echo $id ?>" />
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên bài</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_tbd" value="<?php echo $ten ?>" />
           
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Ngày đăng</label>
            <input class="form-control" id="newField9" type="date" placeholder="" data-sb-validations="required" name="txt_ngaydang" value="<?php echo $date ?>" />
   
        </div>
        <div class="hinhcu">
        <span>Hình cũ: <img src="./upload/<?php echo $hinh ?>" width="100px; heigth: 50px;"></span>
        </div>
        &nbsp;
        <div class="mb-3">
            <label class="form-label" for="newField9">Hình ảnh mới</label>    
            <input class="form-control" id="newField9" type="file" placeholder="" name="anh" accept="image/*" style="margin-top: 8px;"  />
        </div>
    
        <div class="mb-3">
            <label class="form-label" for="newField12">File tài liêu (nếu có)</label>
            <input class="form-control" id="newField12" type="file" placeholder="" name="txt_tailieu" value="<?php echo $Tailieu ?>" />
        </div>
        <label class="form-label" for="newField" readonly>Thể loại</label>
        <select class="form-select" aria-label="Default select example" name="txt_tl" value="<?php echo $tl ?>">       
          <option selected disabled>Thể loại</option>
          <option value="Tin Tức">Tin Tức</option>
          <option value="Thông Báo">Thông Báo</option>
          <option value="Văn Bản">Văn Bản</option>
        </select> 
        &nbsp;
        <div class="mb-3">
            <label class="form-label" for="">Nội dung</label>
            <textarea class="form-control" id="summernote" type="text" placeholder="" style="height: 10rem;" name="txt_noidung" value="<?php echo $noidung ?>"></textarea>
        </div>
        
      
        <div class="d-grid">
            <button class="btn btn-primary" id="submitButton" type="submit" name="suabd">sửa</button>
        </div>
    </form>
</div>

<?php
include("./footer.php");
?>