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
      .form-label{
        text-transform: capitalize;
        
      }
      .btn-primary{
        width: 150px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
        color: #fff;
        background-color: #0066ff;
        margin-bottom: 20px;
      }
      .btn-danger{
        width: 150px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
        color: #fff;
        background-color: #DC3545;
        margin: 0 15px;
        margin-bottom: 20px;
      }
      
      .btn-primary:hover{
        color: #fff;
      }
      .px-5{
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      }
      .d-grid-1 {
          display: flex;
          flex-direction: row;
          margin: auto;
          
          width: 300px;
      }
    </style>
</head>
<body>

<?php 
      include("./ketnoi.php");
      $id = $_REQUEST["Ma"];
      $query = mysqli_query($kn, "select * from tbl_hocsinh where MaHS = '".$id."'");
      foreach($query as $key)
      {
        $id = $key["MaHS"];
        $ten = $key["TenHS"];
        $mlh = $key["MaLop"];
        $tlh = $key["TenLop"];
        $PC = $key["GioiTinh"];
        $MS = $key["NamSinh"];
        $TTC = $key["DiaChiHS"];
        $HDT = $key["HoTenCha"];
        $ND = $key["NgheNghiep"];
        $GT = $key["SDT"];
        $NH = $key["HoTenMe"];
        $nnm = $key["NheNghiepMe"];
        $phone = $key["SDTMe"];
      }

    ?>
  <!---fomr sua---->
  <div class="container px-5 my-5">
    <form id="contactForm" action="./xulysuahs.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">mã học sinh</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly name="txt_mhs" value="<?php echo $id ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField:required"></div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên học sinh</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_ths" value="<?php echo $ten ?>" />
            
        </div>
        <!-- <div class="mb-3">
            <label class="form-label" for="newField9">Mã lớp học</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_mlh" value="<?php echo $mlh ?>" />
        </div> -->
        <div class="form_hs">
        <label>Mã lớp học</label>
                <?php
                include("./ketnoi.php");
                $sqli = "SELECT * FROM tbl_lop";
                $result = mysqli_query($kn,$sqli);
                echo "<select name='txt_mlh' class='form-select' required aria-label='select example' value='<?php echo $mlh ?>'>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value='" . $row['MaLopHoc'] ."'>" . $row['MaLopHoc'] ."</option>";
                }
                echo "</select>";
                ?>
        
    </div>&nbsp;
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên lớp học</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_tlh" value="<?php echo $tlh ?>" />
            
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Giới tính</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="optionA" type="radio" name="newField10" required value="Nam"  />
                <label class="form-check-label" for="optionA">Nam</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="optionB" type="radio" name="newField10" data-sb-validations="required" value="Nữ" />
                <label class="form-check-label" for="optionB">Nữ</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="newField10:required">Giới tính không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Năm sinh</label>
            <input class="form-control" id="newField12" type="date" placeholder="" data-sb-validations="required" name="txt_ns" value="<?php echo $MS ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField3">Địa chỉ</label>
            <input class="form-control" id="newField3" type="text" placeholder="" data-sb-validations="required" name="txt_dc" value="<?php echo $TTC ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField4">Họ tên cha</label>
            <input class="form-control" id="newField4" type="text" placeholder="" data-sb-validations="required" name="txt_tencha" value="<?php echo $HDT ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField5">Nghề nghiệp</label>
            <input class="form-control" id="newField5" type="text" placeholder="" data-sb-validations="required" name="txt_ng" value="<?php echo $ND ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField6">số điện thoại</label>
            <input class="form-control" id="newField6" type="text" placeholder="" data-sb-validations="required" name="txt_sdt" value="<?php echo $GT ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField7">Họ tên mẹ</label>
            <input class="form-control" id="newField7" type="text" placeholder="" data-sb-validations="required" name="txt_me" value="<?php echo $NH ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField8">Nghề nghiệp mẹ</label>
            <input class="form-control" id="newField8" type="text" placeholder="" data-sb-validations="required" name="txt_nnm" value="<?php echo $nnm ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Số điện thoại</label>
            <input class="form-control" id="newField9" type="text" placeholder="" pattern="0([0-9]{9}||[0-9]{10})" title="Số điện thoại bao gồm 9 số và bắt đầu bằng 0"required="" name="txt_phone" value="<?php echo $phone ?>" />
        </div>
      
        <div class="d-grid-1">
            <button class="btn btn-primary" id="submitButton" type="submit" name="suahs">Cập Nhật</button>
            <!-- <button type="cancel" class="btn btn-danger">Cancel</button> -->
        </div>
    </form>
</div>
  <!---end---->
</body>
</html>
<?php 
    include("./footer.php");
?>