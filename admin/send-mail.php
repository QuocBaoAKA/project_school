<?php
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\SMTP;
     use PHPMailer\PHPMailer\Exception;
     include("./PHPMailer/src/PHPMailer.php");
     include("./PHPMailer/src/SMTP.php");
     include("./PHPMailer/src/Exception.php");
     include("./PHPMailer/src/OAuth.php");
     include("./PHPMailer/src/POP3.php");
     include("./vendor/autoload.php");
 if(isset($_POST["btn-mail"])){
    
    //  $toform = $_POST["email"];
    //  $sub = $_POST["tencd"];
    //  $content = $_POST["txt-nd"];
     $mail = new PHPMailer;                  
     $mail->isSMTP();                                         
     $mail->Host = 'smtp.gmail.com';                     
     $mail->SMTPAuth   = true;                                   
     $mail->Username   = 'vatvo.tvu113@gmail.com';                     
     $mail->Password   = '12345';                               
     $mail->SMTPSecure = 'tls';           
     $mail->Port       = 587; 
     
     $mail->setFrom($_POST["email"], $_POST["tencd"]);
     $mail->addAddress("quocbao.tv2204@gmail.com");
     $mail->addReplyTo($_POST["email"], $_POST["tencd"]);
     $mail->isHTML(true); 
     $mail->Subject = $_POST["tencd"];
     $mail->Body ='<h1 align=center>Name: ' .$_POST["tencd"].'<br> Email: '.$_POST["email"].' <br>Noidung: '.$_POST['txt-nd'].'</h1>';
     if(!$mail->send()){
         echo 'Đã gửi';
     }
     else{
         echo 'Thất bại';
     }
 }
?>