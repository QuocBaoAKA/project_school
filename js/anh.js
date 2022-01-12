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
