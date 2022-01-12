<?php
    require("user/header.php");
    // require("admin/ketnoi.php");
    if(isset($_POST["check-email"]) == true){
    $email= $_POST['email'];
    $kn = new PDO("mysql:host=localhost;dbname=csdl_huy1;charset=utf8", "root", "");
    $kn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM tbl_taikhoan WHERE Email = ?";
    $stmt = $kn->prepare($sql);
    $stmt->execute( [$email] );
    $count = $stmt->rowCount();
    if($count==0){
        $_SESSION['message1'] = "Email bạn nhập chưa đăng ký tài khoản!";
        // header('Location: ./QLNS.php');
        exit(0);
    }
    else{
        $matkhaumoi = substr( md5( rand(0,999999)), 0, 8);
        $sql = "UPDATE tbl_taikhoan SET MatKhau = ? WHERE Email = ?";
        $stmt = $kn->prepare($sql);
        $stmt->execute( [$matkhaumoi, $email]);
        
        Guimail($email, $matkhaumoi);
    }
    
    }
?>
<?php
    function Guimail($email, $matkhaumoi){
    require "PHPMailer-master/PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/PHPMailer-master/src/SMTP.php"; 
    require 'PHPMailer-master/PHPMailer-master/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'quocbao.tv2204@gmail.com'; // SMTP username
        $mail->Password = 'sygxlxdnnygycgfy
        ';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('quocbao.tv2204@gmail.com', 'Tân Minh Trí ADMIN' ); 
        $mail->addAddress($email); 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thư lấy lại mật khẩu';
        $noidungthu = "<p>Bạn nhận được mail lấy lại mật khẩu từ yêu cầu của bạn từ website Trường Mầm non - Tiểu học Tân minh Trí.</p>
            Mật khẩu mới của bạn là {$matkhaumoi}
        ";
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        $_SESSION['message'] = "Email xác nhận của bạn đã được gửi!";
       
        exit(0);
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
    }
    }
?>

<style>
    .row {
        width: 500px;
        margin: auto;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-radius: 8px;
    }
    .col-md-4 {
        width: 90%;
        margin: auto;
    }
    .form-control {
        height: 45px;
    }
    .form-group .button {
        width: 150px;
        height: 40px;
        margin: auto;
        margin-top: 15px;
        margin-bottom: 15px;
        border-radius: 8px;
    }
    .text-center {
        padding-top: 15px;
    }
</style>
    <div class="container">
        <div class="row">
        <?php
            if(isset($_SESSION['message']))
                        {
                            echo '<div class="alert alert-success alert-dismissible fade show">
                                  <strong>Thông báo!</strong> ' .$_SESSION['message'].'
                                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                              </div>';
                            unset($_SESSION['message']);
                            
                        }
                if(isset($_SESSION['message1'])){
                    echo '<div class="alert alert-danger alert-dismissible fade show">
                                  <strong>Thông báo!</strong> ' .$_SESSION['message1'].'
                                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                              </div>';
                            unset($_SESSION['message1']);
                }
             ?>
            <div class="col-md-4 offset-md-4 form">
                <form action="" method="POST" autocomplete="">
                    <h2 class="text-center">Lấy lại mật khẩu</h2>
                    <p class="text-center">Nhập địa chỉ email tài khoản mà bạn đã đăng ký.</p>
                   
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Nhập email của bạn..." required value="<?php if (isset($email) == true) echo $email  ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Gửi yêu cầu">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    require("user/fotter.php");
?>