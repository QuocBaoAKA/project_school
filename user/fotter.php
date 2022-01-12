<!--link javascript bootstrap---->
<?php
    
   if(!isset($_SESSION['luottruycap'])) $_SESSION['luottruycap'] = 0;
   else $_SESSION['luottruycap']+=1;
?>
<style>
  .img-ah {
    width: 100%;
  }
  .tb h1{
    /* white-space: nowrap; 
    overflow: hidden;
    text-overflow: ellipsis; 
    display: inline-block;
     max-width: 100%; */
     -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    display: -webkit-box;
  }
  footer{
    position: relative;
     width: 100%;
     height: auto;
     padding: 50px 100px;
    bottom: 0;
     justify-content: space-between;
     flex-wrap: wrap;
  }
</style>
<?php
		include("admin/ketnoi.php");
		$sql = "select * from tbl_baidang where TheLoai = 'Thông Báo'";
		$query = mysqli_query($kn,$sql);
	?>
</div>
    
<div class="rightcolumn">
    <div class="card" style="height: 100%;">
      <div class="card-title">
          <h2>Thông báo</h2>
      </div>
      <div class="thongbao_gr">
      <div class="thongbao">
      
        <div class="tb">  
        <?php 
            $sql = "select * from tbl_baidang where TheLoai ='Thông Báo'";
            $query = mysqli_query($kn,$sql);
            while ($row = mysqli_fetch_array($query)) {
			 ?>
        <a href="chitietbaidang.php?id=<?php echo $row['MaBaiDang'] ?>">
        <img src="admin/upload/<?php echo $row["Hinhanh"] ?>">
        <h1><?php echo $row["TenBaiDang"] ?></h1></a>
        <?php } ?>
        </div>
        
      </div>
      </div>
    </div>
    <div class="card">
    <div class="card-title">
        <h2>Lịch Năm</h2>
    </div>
    <div class="calendar">
        <div class="calendar-header">
            <span class="month-picker" id="month-picker">February</span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <span id="year">2021</span>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>
        <div class="calendar-body">
            <div class="calendar-week-day">
                <div>Chủ Nhật</div>
                <div>T2</div>
                <div>T3</div>
                <div>T4</div>
                <div>T5</div>
                <div>T6</div>
                <div>T7</div>
            </div>
            <div class="calendar-days"></div>
        </div>
        <div class="month-list"></div>
    </div>
    </div>
    <div class="card">
    <div class="card-title">
        <h2>Lượt Truy Cập</h2>
    </div>
    
    <p class="p_truycap"><?php 
		if(isset($_SESSION['luottruycap']))
		echo $_SESSION['luottruycap'];
	?></p>
    </div>
    <div class="card">
            <a href="https://sgddttravinh.vnptioffice.vn/">
              <img src="hinhanh/12126790_12127381_072358_08102019.png" class="img-ah">
            </a>
    </div>
    <div class="card">
            <a href="http://sgdtravinh.edu.vn/">
              <img src="https://admin.enetviet.com/UploadFolderNew/UBNDLongBien/Image/env/administrator/anhtintuc/SoTravinh.png" class="img-ah">
            </a>
    </div>
    <!-- <div class="card">
            <a href="https://www.travinh.gov.vn/Default.aspx?sid=1426&pageid=37931">
              <img src="https://lh3.googleusercontent.com/proxy/OlpXutoBTKbs9iqQeD4oGC8OunfPfazDPZ9QyxRmk1BJzXYqDMm7nbY3Ai2JypocVUUDaPavDbdMJHlN-xMBS2wg1BaL_JuGxd7lx6u5ki4hE3WOgNRroqGScnChtTFNdTYjwtQ4E-ukd15a2YfeJPyD" class="img-ah">
            </a>
    </div> -->
  </div>
</div>
<!--form mail--->

<div class="title-tt">
    <h2>Đăng ký tư vấn</h2>
    <p>Đăng ký Email để nhận tin tức mới nhất từ chúng tôi được gửi đến hộp thư đến của bạn!</p>
</div>
<div class="form-mail">
    <form method="post" action="xlthemthongtin.php">
        <input type="text" name="txt-name" placeholder="Họ & Tên" class="form-tx">
        <input type="email" name="txt-mail" placeholder="Địa chỉ mail" class="form-tx">
        <input type="text" name="txt-phone" placeholder="Số điện thoại" class="form-tx">
         <button type="submit" name="btn-tx" class="btn-tx">Đăng Ký</button>  
    </form>
</div>

<!---footer--->
<div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class='bx bxl-facebook-circle'></i></a><a href="#"><i class='bx bxl-youtube' ></i></a></div>
            <h1 style="color: #fff; text-align: center; font-size: 18px; line-height: 20px; text-transform: uppercase;">Trang thông tin điện tử Trường mầm non - tiểu học tân minh trí</h1>
            <p style="color: #fff; text-align: center; font-size: 16px; line-height: 20px; text-transform: capitalize;">Đơn vị quản lý: Trường mầm non - tiểu học tân minh trí </p>
            <p style="color: #fff; text-align: center; font-size: 16px; line-height: 20px; text-transform: capitalize;">Địa chỉ: 9 Đ. Nguyễn Đáng, Phường 9, Trà Vinh</p>
            <p style="color: #fff; text-align: center; font-size: 16px; line-height: 20px; text-transform: capitalize;">Email: tanminhtri@sgdtravinh.edu.vn - Điện thoại: : 0294 2210 236</p>
            <p class="copyright" style="color: #fff; text-align: center; font-size: 18px; line-height: 20px; text-transform: capitalize;">Copyright © 2021 Bản quyền thuộc về Trường MN - TH Tân Minh Trí - Trà Vinh</p>
        </footer>
    </div>
    <!---the end---->
<button id="toptag" onclick="gototop();" style="bottom: 118px; right: 55px;"><i class='bx bx-up-arrow' ></i></button>

<script>
    var toptag = document.getElementById('toptag');
    window.onscroll = function() { funcScroll()};
    function funcScroll(){
        if(document.body.scrollTop > 30 || document.documentElement.scrollTop > 30){
            toptag.style.display = "block";
        }else{
            toptag.style.display = "none";
        }
    }
    function gototop(){
        document.documentElement.scrollTop =0;
    }
</script>
<script src="/CodeSeven-toastr-50092cc/build/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="login.js"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script>
      <?php if(isset($_SESSION["msg"])): ?> 
        toastr.success(<?php echo flash('msg') ?>)
        <?php endif ?>

     
    </script>
  <script type="text/javascript">
    function updateClock(){
      var now = new Date();
      var dname = now.getDay(),
          mo = now.getMonth(),
          dnum = now.getDate(),
          yr = now.getFullYear(),
          hou = now.getHours(),
          min = now.getMinutes(),
          sec = now.getSeconds(),
          pe = "AM";

          if(hou >= 12){
            pe = "PM";
          }
          if(hou == 0){
            hou = 12;
          }
          if(hou > 12){
            hou = hou - 12;
          }

          Number.prototype.pad = function(digits){
            for(var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
          }

          var months = ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"];
          var week = ["Chủ nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7"];
          var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
          var values = [week[dname],dnum.pad(2), months[mo],  yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
          for(var i = 0; i < ids.length; i++)
          document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock(){
      updateClock();
      window.setInterval("updateClock()", 1);
    }
    </script>
    <script>
        let calendar = document.querySelector('.calendar')

const month_names = ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12']

isLeapYear = (year) => {
    return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 ===0)
}

getFebDays = (year) => {
    return isLeapYear(year) ? 29 : 28
}

generateCalendar = (month, year) => {

    let calendar_days = calendar.querySelector('.calendar-days')
    let calendar_header_year = calendar.querySelector('#year')

    let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

    calendar_days.innerHTML = ''

    let currDate = new Date()
    if (!month) month = currDate.getMonth()
    if (!year) year = currDate.getFullYear()

    let curr_month = `${month_names[month]}`
    month_picker.innerHTML = curr_month
    calendar_header_year.innerHTML = year

    // get first day of month
    
    let first_day = new Date(year, month, 1)

    for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
        let day = document.createElement('div')
        if (i >= first_day.getDay()) {
            day.classList.add('calendar-day-hover')
            day.innerHTML = i - first_day.getDay() + 1
            day.innerHTML += `<span></span>
                            <span></span>
                            <span></span>
                            <span></span>`
            if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate.getFullYear() && month === currDate.getMonth()) {
                day.classList.add('curr-date')
            }
        }
        calendar_days.appendChild(day)
    }
}

let month_list = calendar.querySelector('.month-list')

month_names.forEach((e, index) => {
    let month = document.createElement('div')
    month.innerHTML = `<div data-month="${index}">${e}</div>`
    month.querySelector('div').onclick = () => {
        month_list.classList.remove('show')
        curr_month.value = index
        generateCalendar(index, curr_year.value)
    }
    month_list.appendChild(month)
})

let month_picker = calendar.querySelector('#month-picker')

month_picker.onclick = () => {
    month_list.classList.add('show')
}

let currDate = new Date()

let curr_month = {value: currDate.getMonth()}
let curr_year = {value: currDate.getFullYear()}

generateCalendar(curr_month.value, curr_year.value)

document.querySelector('#prev-year').onclick = () => {
    --curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}

document.querySelector('#next-year').onclick = () => {
    ++curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}


    //xem truoc anh
 
</script>
<script>
      const username = document.getElementById('username')
const email = document.getElementById('email')
const password = document.getElementById('password')
const password2 = document.getElementById('password2')
const form = document.getElementById('form')
// Functions
function showError(input, message) {
  const formControl = input.parentElement
  formControl.className = 'search-input error'
  const small = formControl.querySelector('small')
  small.innerText = message
}
function showSuccess(input) {
  const formControl = input.parentElement
  formControl.className = 'search-input success'
}
function checkRequired(inputArr) {
  inputArr.forEach(function (input) {
    if (input.value.trim() === '') {
      showError(input, `${input.id} không được để trống!.`)
    } else {
      showSuccess(input)
    }
  })
}
function validateEmail(input) {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  if (re.test(input.value.trim())) {
    showSuccess(input)
  } else {
    showError(input, 'Email is invalid')
  }
}

function checkLength(input, min, max) {
  if (input.value.length < min) {
    showError(input, `${input.id} must be atleast ${min} characters`)
  } else if (input.value.length > max) {
    showError(input, `${input.id} must be less than ${max} characters`)
  } else {
    showSuccess(input)
  }
}
function checkPasswordsMatch(input, input2) {
  if (input.value !== input2.value) {
    showError(input2, 'Passwords do not match')
  }
}
// Event Listener

form.addEventListener('submit', function (e) {
  e.preventDefault()
  checkRequired([username, email, password, password2])
  validateEmail(email)
  checkLength(username, 3, 15)
  checkLength(password, 6, 20)
  checkPasswordsMatch(password, password2)
})


    </script>
   