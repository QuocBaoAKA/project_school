<?php
    require("./header.php");
    require("./ketnoi.php");
?>
<style>
    .btn-sua {
        width: 150px;
        margin: auto;
        border-radius: 5px;
        border: none;
        height: 40px;
        background-color: #0066ff;
        color: #fff;
        margin-bottom: 15px;
    }
    .px-5 {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-radius: 5px;
    }
</style>
<?php 
      include("./ketnoi.php");
      $id = $_REQUEST["Ma"];
      $query = mysqli_query($kn, "select * from tbl_lichgiangday where MaGiangDay = '".$id."'");
      foreach($query as $key)
      {
        $id1 = $key["MaGiangDay"];
        $id = $key["MaGV"];
        $tenlh = $key["MaLopHoc"];
        $tlh = $key["MaMonHoc"];
        $lkt = $key["BuoiDay"];
        $thk = $key["SoTiet"];
        $th = $key["TuanHoc"];
      }

    ?>
<div class="container px-5 my-5">
    <h2>Form sửa dữ liệu lịch giảng dạy</h2>
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="./xlsualgd.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">Mã giảng dạy</label>
            <input class="form-control" readonly id="newField" type="text" placeholder="" name="txt_mgd" value="<?php echo $id1 ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField">Mã giáo viên</label>
            <input class="form-control" id="newField" type="text" placeholder="" name="txt_mgv" value="<?php echo $id ?>" />
        </div>
        <div class="mb-3">
        <label class="form-label">Lớp</label>
            <?php
           
            $sqli = "SELECT * FROM tbl_lop";
            $result = mysqli_query($kn,$sqli);
            echo "<select name='malh' value='<?php echo $tenlh ?>' class='form-select'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaLopHoc'] ."'>" . $row['MaLopHoc'] ."</option>" ;
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

            echo "<select name='mamonhoc' class='form-select'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaMonHoc'] ."'>" . $row['TenMH'] ."</option>";
            }
            echo "</select>";
            ?>
        </div>
   
        <div class="mb-3">
            <label class="form-label" for="newField12">Buổi dạy</label>
            <input class="form-control" id="newField12" type="text"  placeholder=""  required name="txt_bd" value="<?php echo $lkt ?>" />
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField3">Số tiết</label>
            <input class="form-control" id="newField3" type="number" min="1" title="Số tiết phải lớn hơn  1" placeholder="" required name="txt_sotiet" value="<?php echo $thk ?>" />
          
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField4">Tuần học</label>
            <input class="form-control" id="newField4" type="text" placeholder="" required name="txt_th" value="<?php echo $th ?>" />
          
        </div>
        <div class="d-grid">
            <button class="btn-sua" id="submitButton" type="submit" name="sualgd">Cập Nhật</button>
        </div>
    </form>
</div>

<?php
    require("./footer.php");
?>