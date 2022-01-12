
<?php
include("./ketnoi.php");
    session_start();
    if(isset($_POST['sualgd']))
    {
        $id = $_POST["txt_mgd"];
        $id1 = $_POST["txt_mgv"];
        $mlh = $_POST["malh"];
        $monhoc = $_POST["mamonhoc"];
        $bd= $_POST["txt_bd"];
        $sotiet= $_POST["txt_sotiet"];
        $th= $_POST["txt_th"];
    
        $query = "UPDATE tbl_lichgiangday SET MaGV ='$id1', MalopHoc ='$mlh', MaMonHoc ='$monhoc', BuoiDay ='$bd', SoTiet ='$sotiet', TuanHoc ='$th' WHERE MaGiangDay ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            $_SESSION['status'] = "Cập nhật lịch giảng dạy thành công!";
            header('Location: ./QLLGD.php');
            exit(0);
            
        }
        else{
            $_SESSION['status1'] = "cập nhật lịch giảng dạy không thành công!";
            header('Location: ./QLLGD.php');
            exit(0);
           
        }   
    }

?>