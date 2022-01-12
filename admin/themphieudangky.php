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
</head>
<body>
<form action="./xlthemphieudangky.php" method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" name="txt_mdk" />
        <label class="form-label" for="form6Example1">Mã đăng ký</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" name="txt_mtk" />
        <label class="form-label" for="form6Example2">Mã tài khoảng</label>
      </div>
    </div>
  </div>
  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3" class="form-control" name="txt_tdn" />
    <label class="form-label" for="form6Example3">Tên đăng nhập</label>
  </div>
  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3" class="form-control" name="txt_gt" />
    <label class="form-label" for="form6Example3">Giới tính</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example4" class="form-control" name="txt_dc" />
    <label class="form-label" for="form6Example4">Địa chỉ</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3" class="form-control" name="txt_ns" />
    <label class="form-label" for="form6Example3">Năm sinh</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example5" class="form-control" name="txt_htc" />
    <label class="form-label" for="form6Example5">Họ tên cha</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form6Example5" class="form-control" name="txt_nnc"/>
    <label class="form-label" for="form6Example5">Nghề nghiệp cha</label>
  </div>
  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" name="txt_sdtc" />
    <label class="form-label" for="form6Example6">Số điện thoại cha</label>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example5" class="form-control" name="txt_htm" />
    <label class="form-label" for="form6Example5">Họ tên mẹ</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form6Example5" class="form-control" name="txt_nnm" />
    <label class="form-label" for="form6Example5">Nghề nghiệp mẹ</label>
  </div>
  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" name="txt_sdtm" />
    <label class="form-label" for="form6Example6">Số điện thoại mẹ</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3" class="form-control" name="txt_gc" />
    <label class="form-label" for="form6Example3">Ghi chú</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Thêm</button>
</form>
</body>
</html>
<?php 
    include("./footer.php");
?>