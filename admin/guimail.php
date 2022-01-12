<?php
    require("./ketnoi.php");
    require("./header.php");
   
?>
<style>
    .mail-form{
        display: flex;
        width: 90%;
        margin: auto;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    .mail-image {
        float: left;
        width: 40%;
        height: 350px;
    }
    .mail-image img{
        width: 100%;
        height: 100%;
    }
    .mail-input {
        float: right;
        width: 50%;
        margin: auto;
        margin-left: 2rem;
    }
    .mail-input input{
        width: 100%;
        height: 40px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 15px;
        outline: none;
        padding-left: 10px;
    }
    .mail-input input:focus{
        border: 2px solid #0066ff;
    }
    .mail-frm textarea{
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
</style>

<?php 
      include("./ketnoi.php");
      $id = $_REQUEST["id"];
      $query = mysqli_query($kn, "select * from tbl_phieudangkynhaphoc where MaDK = '".$id."'");
      foreach($query as $key)
      {
        $id = $key["MaDK"];
        $mail = $key["Mail"];
      
      }

    ?>

<div class="mail-form">
    <form action="send-mail.php" method="POST">
    <div class="mail-image">
        <img src="./upload/undraw_mail_sent_re_0ofv.svg" alt="" srcset="">
    </div>
    <div class="mail-input">
    <div class="mail-frm">
        <input type="text" name="tencd" required placeholder="Tên chủ đề...">
    </div>
    <div class="mail-frm">
        <input type="email" name="email" value="<?php echo $mail ?>" required placeholder="Địa chỉ mail">
    </div>
    <div class="mail-frm">
        <textarea name="txt-nd" id="" cols="30" rows="10" placeholder="Nội dung..."></textarea>
    </div>
    <button name="btn-mail" class="submit-mail">Submit</button>
    </div>
    </form>
</div>
<?php
    require("./footer.php");
?>

