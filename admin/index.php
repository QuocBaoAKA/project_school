<?php 
    include("./header.php");
    require("./ketnoi.php");
    $sql = "select MaHS from tbl_hocsinh register order by MaHS";
    $sql_run = mysqli_query($kn, $sql);
    $row = mysqli_num_rows($sql_run);
    //lop
    $sql1 = "select MaLopHoc from tbl_lop register order by MaLopHoc";
    $sql_run1= mysqli_query($kn, $sql1);
    $row1 = mysqli_num_rows($sql_run1);
    //taikhoan
    $sql2 = "select MaTK from tbl_taikhoan register order by MaTK";
    $sql_run2= mysqli_query($kn, $sql2);
    $row2 = mysqli_num_rows($sql_run2);
    //nhanvien
    $sql3 = "select MaChucVu from tbl_chucvu register order by MaChucVu";
    $sql_run3 = mysqli_query($kn, $sql3);
    $row3 = mysqli_num_rows($sql_run3);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <style>
        
   
    </style>
</head>
<body>
<div class="row">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                               Học sinh
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    <?php
                                        echo '<h2> Tổng &nbsp;'  .$row. '</h2>';
                                    ?>
                                </div>
                                <i class="fas fa-user-graduate"></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
              
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                Lớp
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                <?php
                                        echo '<h2>Tổng &nbsp;' .$row1. '</h2>';
                                    ?>
                                </div>
                                <i class="fas fa-school"></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
               
               
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                Tài khoản
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                <?php
                                        echo '<h2> Tổng &nbsp;' .$row2. '</h2>';
                                    ?>
                                </div>
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
            
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        
                        <div class="counter">
                            <div class="counter-title">
                                Nhân Viên
                            </div>
                            <div class="counter-info">
                               
                                <div class="counter-count">
                                <?php
                                        echo '<h2> Tổng &nbsp;' .$row3. '</h2>';
                                    ?>
                                </div>
                                </a>
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
            </div>
      </div>
        <!-- <div
        id="myChart" style="width:100%; max-width:600px; height:500px;">
        </div> -->

</body>
</html>
<?php 
    include("./footer.php");
?>