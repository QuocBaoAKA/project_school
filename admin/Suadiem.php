<?php
require ("./header.php");
 include("./ketnoi.php");
 $id = $_REQUEST["Ma"];
 $query = mysqli_query($kn, "select * from tbl_diem where MaDiem = '".$id."'");
 foreach($query as $key)
 {
   $id = $key["MaDiem"];
   $mhs = $key["MaHS"];
   $mlop = $key["MaLopHoc"];
   $mhk = $key["MaHK"];
   $mmh = $key["MaMonHoc"];
   $diemm = $key["DiemMieng"];
   $diemgk = $key["DiemGiuaKy"];
   $diemck = $key["DiemCuoiKy"];
   $diemtk = $key["DiemTongKet"];
   $kt = $key["KetQua"];
 }

?>
<style>
    .btn-sua{
        width: 150px;
        height: 40px;
        border-radius: 5px;
        border: none;
        background-color: #0066ff;
        color: #fff;
        font-size: 18px;
        margin: auto;
        margin-bottom: 15px;
    }
    .px-5{
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        border-radius: 8px;
        margin-top: -2px !important;
    }
</style>
<h3>Sửa Nhân Sự</h3>
  <div class="container px-5 my-5">
    
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="./xlsuadiem.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">Mã bảng điểm</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly name="txt_mdiem" value="<?php echo $id ?>" />
        </div>
        <div class="mb-3">
        <label class="form-label">Tên học sinh</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_hocsinh";
            $result = mysqli_query($kn,$sqli);

            echo "<select name='mahs' value='<?php echo $mhs ?>' class='form-select'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaHS'] ."'>" . $row['TenHS'] ."</option>" ;
            }
            echo "</select>";
            ?>
        </div>
        <div class="mb-3">
        <label class="form-label">Lớp học</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_lop";
            $result = mysqli_query($kn,$sqli);

            echo "<select name='malop' value='<?php echo $mlop ?>' class='form-select'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaLopHoc'] ."'>" . $row['TenLop'] ."</option>";
            }
            echo "</select>";
            ?>
        </div>
        <div class="mb-3">
        <label class="form-label">Học kỳ</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_hocki";
            $result = mysqli_query($kn,$sqli);

            echo "<select name='hocky' value='<?php echo $mhk ?>' class='form-select'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaHK'] ."'>" . $row['TenHK'] ."</option>";
            }
            echo "</select>";
            ?>
        </div>
        <div class="mb-3">
        <label class="form-label">Môn học</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_monhoc";
            $result = mysqli_query($kn,$sqli);

            echo "<select name='monhoc'value='<?php echo $mmh ?>' class='form-select'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaMonHoc'] ."'>" . $row['TenMH'] ."</option>";
            }
            echo "</select>";
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Điểm miệng</label>
            <input class="form-control" id="newField12" type="number" min="0" max="10"  title="Điểm phải lớn hơn 0 và nhỏ hơn 10"  placeholder=""  required name="txt_dm" value="<?php echo $diemm ?>" />
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField3">Điểm giữa kỳ</label>
            <input class="form-control" id="newField3" type="number" min="0" max="10"  title="Điểm phải lớn hơn 0 và nhỏ hơn 10" placeholder="" required name="txt_dgk" value="<?php echo $diemgk ?>" />
          
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField4">Điểm cuối kỳ</label>
            <input class="form-control" id="newField4" type="number" min="0" max="10"  title="Điểm phải lớn hơn 0 và nhỏ hơn 10" placeholder="" required name="txt_ck" value="<?php echo $diemck ?>" />
          
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField5">Điểm tổng kết</label>
            <input class="form-control" id="newField5" type="number" min="0" max="10"  title="Điểm phải lớn hơn 0 và nhỏ hơn 10" placeholder=""  required name="txt_tk" value="<?php echo $diemtk ?>" />
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField6">Kết quả</label>
            <input class="form-control" id="newField6" type="text" placeholder="" required name="txt_kq" value="<?php echo $kt ?>" />
            
        </div>
      
        <div class="d-grid">
            <button class="btn-sua" id="submitButton" type="submit" name="suadiem">Cập Nhật</button>
        </div>
    </form>
</div>

<?php

 require ("./footer.php");
?>