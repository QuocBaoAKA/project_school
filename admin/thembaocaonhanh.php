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
<form action="./xlthembaocaonhanh.php" method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" name="txt_mbcn" />
        <label class="form-label" for="form6Example1">Mã báo cáo nhanh</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" name="txt_mtt" />
        <label class="form-label" for="form6Example2">Mã trạng thái</label>
      </div>
    </div>
  </div>
  <div class="form-check form-check-inline">
  <input
    class="form-check-input"
    type="radio"
    name="diemdanh"
    id="inlineRadio1"
    value="Du"
  />
  <label class="form-check-label" for="inlineRadio1">Đủ</label>
</div>

<div class="form-check form-check-inline">
  <input
    class="form-check-input"
    type="radio"
    name="diemdanh"
    id="inlineRadio2"
    value="Vang"
  />
  <label class="form-check-label" for="inlineRadio2">Vắng</label>
</div><br><br>
  <!-- Submit button -->
 
  <button type="submit" class="btn btn-primary btn-block mb-4">Thêm</button>
</form>
</body>
</html>
<?php 
    include("./footer.php");
?>