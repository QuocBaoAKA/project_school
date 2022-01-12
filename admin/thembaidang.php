<?php 
    include("./header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          .px-5{
            width: 90%;
            margin: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;  
            background-color: #ffffff;
          }
        .form_hs{
          width: 60%;
          margin: auto;
          margin-bottom: 15px;
        }
        .input_hs{
          width: 100%;
          height: 38px;
          outline: none;
          border: 1px solid #ccc;
          border-radius: 8px;
          margin-bottom: 15px;
        }
        .form_hs_radio{
          display: flex;
          width: 450px;
          height: 50px;
          margin: auto;
          border: 1px dashed #ccc;
          justify-content: center;
          align-items: center;
        }
        .radio1{
          margin-right: 25px;
          
        }
        .radio1 span{
          font-size: 18px;
        }
        .btn_hss{
          display: flex;
          justify-content: center;
          align-items: center;
          margin: auto;
          width: 150px;
          margin-top: 5rem;
        
        }
        .btn_hs{
          width: 100%;
          height: 40px;
          background-color: #0066ff;  
          border: none;
          border-radius: 8px;
          color: #fff;
          margin-bottom: 1rem;
        }
        .d-grid{
          width: 100%;
          display: flex !important;
          flex-direction: row;
          justify-content: center;
          align-items: center;
        }
        .d-grid .btn-primary{
          width: 150px;
        }
        .d-grid .h1{
          color: #000;
          background-color: #f2f2f2 !important;
        }
        .px-5{
          box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
          border-radius: 10px;
        }
        .h2 {
          background-color: #0066ff;
          color: #fff;

          margin-left: 20px;
        }
      
    </style>
</head>
<body>
<h1 style="padding-left: 48px;">Thêm tin tức</h1>
<div class="container px-5 my-5"> 
                    
    <form id="formUpImg" action="./xlthembaidang.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label" for="tenTaiKhoản">Tên bài đăng</label>
            <input class="form-control" id="tenTaiKhoản" type="text" placeholder="Tên nội dung" data-sb-validations="required" name="txt_tbd" />
            <div class="invalid-feedback" data-sb-feedback="tenTaiKhoản:required">Tên bài đăng không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField">Ngày đăng</label>
            <input class="form-control" id="newField" type="date" placeholder="" requireds name="txt_nd" />
            
        </div>
        <label class="form-label" for="newField" readonly>Thể loại</label>
        <select class="form-select" aria-label="Default select example" name="txt_tl">       
          <option selected disabled>Thể loại</option>
          <option value="Tin Tức">Tin Tức</option>
          <option value="Thông Báo">Thông Báo</option>
          <option value="Văn Bản">Văn Bản</option>
      </select> 
      &nbsp;
        <div class="mb-3">
            <label class="form-label" for="newField">Hình ảnh</label>
            <input class="form-control" id="img_up" accept="image/*" onchange="preUpImg();" type="file" placeholder="" required name="hinh"/>
        </div>
        <div class="form-group box-pre-img hidden">
                <p><strong>Ảnh xem trước</strong></p>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField">File PDF (nếu có)</label>
            <input class="form-control" id="pdf" type="file" placeholder=""  name="file_pdf"/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Nội dung</label>
            <textarea class="form-control" id="summernote" type="text" placeholder="" style="height: 10rem;" name="txt_noidung"></textarea>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary h1" type="reset">Nhập lại</button>
            <button class="btn btn-primary h2" id="submitButton" name="btn_hs" type="submit">Thêm</button>
        </div>
    </form>
</div>
<script>
  function preUpImg() {
  img_up = $("#img_up").val();
  count_img_up = $("#img_up").get(0).files.length;
  $("#formUpImg .box-pre-img").html("<p><strong>Ảnh xem trước</strong></p>");
  $("#formUpImg .box-pre-img").removeClass("hidden");

  // Nếu đã chọn ảnh
  if (img_up != "") {
    $("#formUpImg .box-pre-img").html("<p><strong>Ảnh xem trước</strong></p>");
    $("#formUpImg .box-pre-img").removeClass("hidden");
    for (i = 0; i <= count_img_up - 1; i++) {
      $("#formUpImg .box-pre-img").append(
        '<img src="' +
          URL.createObjectURL(event.target.files[i]) +
          '" style="border: 1px solid #ddd; width: 150px; height: 100px; margin-right: 5px; margin-bottom: 5px;"/>'
      );
    }
  }
  // Ngược lại chưa chọn ảnh
  else {
    $("#formUpImg .box-pre-img").html("");
    $("#formUpImg .box-pre-img").addClass("hidden");
  }
  
}

</script>

<?php 
    include("./footer.php");
?>