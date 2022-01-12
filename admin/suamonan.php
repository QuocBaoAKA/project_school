<?php
    require("./header.php");
    require("./ketnoi.php");
     $id = $_REQUEST["Ma"];
      $query = mysqli_query($kn, "select * from tbl_monan where MaMonAn = '".$id."'");
      foreach($query as $key)
      {
        $id = $key["MaMonAn"];
        $matt = $key["TenMonAn"];
        $dd = $key["ThanhPhanDD"];
        $gia = $key["Gia"];
      }
?>
<style>
    .px-5 {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    .btn-primary {
        width: 150px;
        height: 40px;
        background-color: #0066ff;
        color: #fff;
        margin: auto;
        margin-bottom: 15px;
    }
</style>
<h2>Form sửa món ăn</h2>
<div class="container px-5 my-5">
    
    <form id="contactForm" action="./xlsuamonan.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">Mã món ăn</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly name="txt_ma" value="<?php echo $id ?>" />

        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên món ăn</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_tma" value="<?php echo $matt ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Thành phần dinh dưỡng</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_dd" value="<?php echo $dd ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Giá</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_price" value="<?php echo $gia ?>" />
        </div>
        <div class="d-grid">
            <button class="btn btn-primary" id="submitButton" type="submit" name="suamonan">Cập nhật</button>
        </div>
    </form>
</div>


<?php
    require("./footer.php");
?>