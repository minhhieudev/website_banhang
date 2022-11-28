<?php  
    require "../db/queryDB.php";
    ob_start();
    session_start();
    if(isset($_SESSION["gr"])){
         if($_SESSION["gr"]!=1){
            header("location:../index.php");
         }
    }else{
      header("location:../index.php");
    }

    function convertTien($tien){

      for($i=strlen($tien);$i>=0;$i--){
         
      }
      return $gia;
    }
?>
<?php
    //thêm sản phẩm
    $qr="";
    if(isset($_POST["addsp"])){
       $kt=0;
       if(!isset($_SESSION["checkAddSp"])){
             $kt=1;
       }else{
          if($_SESSION["checkAddSp"]!=$_POST["tenSpp"])
             $kt=1;
         else $kt=0;
       }
      if($kt==1){
         $_SESSION["checkAddSp"] = $_POST["tenSpp"];

      $tensp=$_POST["tenSpp"];
      $gia=$_POST["gia"];
      $giasale=$_POST["giaSale"];
      $urlhinh=$_FILES["urlHinh"]["name"];
      $loaihang=$_POST["loaihang"];
      $ttsp=$_POST["ttsp"];

      if($_FILES["urlHinh"]["error"]==0){
         move_uploaded_file($_FILES["urlHinh"]["tmp_name"], "../upload/".$_FILES["urlHinh"]["name"]);
      }
      $qr="
      INSERT INTO `sanpham`( `tenSp`, `gia`, `giaSale`, `loaiHang`, `urlHinh`,`thongtinSp`)
      VALUES (N'$tensp',$gia,$giasale,'$loaihang','$urlhinh',N'$ttsp');
      ";
      //ghi file
      $file = @fopen('data.txt', 'a');
      if (!$file)
        echo "Mở file không thành công";
      else {
          fwrite($file, $qr);
      }
      
      mysqli_query($con,$qr);
      }
   }
?>

<?php
    //thêm user
      $qr="";

      if(isset($_POST["adduser"])){
         $kt=0;
         if(!isset($_SESSION["checkAddUser"])){
            $kt=1;
         }else{
            if($_SESSION["checkAddUser"]!=$_POST["nameuser"]){
               $kt=1;
            }else{
               $kt=0;
            }
         }
         if($kt==1){
            $_SESSION["checkAddUser"] = $_POST["nameuser"];
           $name= $_POST["nameuser"];
           $tk=$_POST["tk"];
           $mk=$_POST["mk"];
           $gr=$_POST["gr"];
           $mk=md5($mk);
           $qr="
           INSERT INTO `user`(`tk`, `mk`, `name`, `gr`) 
           VALUES ('$tk','$mk',N'$name',$gr)
           ";
           mysqli_query($con,$qr);
         }
      }
?>
<?php
//thêm thông báo
  $qr="";

  if(isset($_POST["addtb"])){
     $kt=0;
     if(!isset($_SESSION["checkAddTb"])){
        $kt=1;
     }else{
        if($_SESSION["checkAddTb"]!=$_POST["tieuDe"]){
           $kt=1;
        }else{
           $kt=0;
        }
     }
     if($kt==1){
        $_SESSION["checkAddTb"] = $_POST["tieuDe"];

       $tieude= $_POST["tieuDe"];
       $ngaytb=$_POST["ngayTb"];
       $noidung=$_POST["noiDung"];
       $urlhinh=$_POST["urlHinhTb"];
      
       $qr="
       INSERT INTO `thongbao`(`tieuDe`, `ngayTb`, `noiDung`, `urlHinhTb`) 
       VALUES (N'$tieude','$ngaytb',N'$noidung','$urlhinh')
       ";
       mysqli_query($con,$qr);
     }
  }
?>
<?php
//thêm slider
  $qr="";
  if(isset($_POST["butaddslider"])){
     $kt=0;
     if(!isset($_SESSION["checkAddSlider"])){
        $kt=1;
     }else{
        if($_SESSION["checkAddSlider"]!=$_POST["urlSlider"]){
           $kt=1;
        }else{
           $kt=0;
        }
     }
     if($kt==1){
        $_SESSION["checkAddSlider"] = $_POST["urlSlider"];
       $urlSlider= $_POST["urlSlider"];
       $qr="
       INSERT INTO `slider`( `urlHinh`) 
       VALUES ('$urlSlider')
       ";
       mysqli_query($con,$qr);
     }
  }
?>

  <?php
//thêm ngành hàng

  $qr="";
  if(isset($_POST["addnh"])){
     $kt=0;
     if(!isset($_SESSION["checkAddnh"])){
        $kt=1;
     }else{
        if($_SESSION["checkAddnh"]!=$_POST["tenNH"]){
           $kt=1;
        }else{
           $kt=0;
        }
     }
     if($kt==1){
        $_SESSION["checkAddnh"] = $_POST["tenNH"];

       $tenNH= $_POST["tenNH"];
       $value=CovertVn($tenNH);
       $qr="
       INSERT INTO `nganhhang`( `tenNH`,`value`) 
       VALUES (N'$tenNH','$value')
       ";
       mysqli_query($con,$qr);
     }
  }
?>
<?php
//xóa sản phẩm
$qr="";
if(isset($_GET["xoa"])){
   $idxoa=$_GET["xoa"];
   $qr="
     DELETE FROM `sanpham` WHERE idSp=$idxoa;
   ";
   mysqli_query($con,$qr);
}
?>
<?php
//xóa Đơn đặt hàng
$qr="";
if(isset($_GET["xoaDDH"])){
   $idDonHang=$_GET["xoaDDH"];
   $qr="
     DELETE FROM `donhang` WHERE idDonHang=$idDonHang;
   ";
   mysqli_query($con,$qr);
}
?>


<?php 
//xóa user
$qr="";
if(isset($_GET["xoauser"])){
   $idxoa=$_GET["xoauser"];
   $qr="
     DELETE FROM `user` WHERE idUser=$idxoa;
   ";
   mysqli_query($con,$qr);
}
?>
<?php 
//xóa thoog báo
$qr="";
if(isset($_GET["xoatb"])){
   $idtb=$_GET["xoatb"];
   $qr="
     DELETE FROM `thongbao` WHERE idTb=$idtb;
   ";
   mysqli_query($con,$qr);
}
?>
<?php 
//xóa slider
$qr="";
if(isset($_GET["xoaslider"])){
   $idSlider=$_GET["xoaslider"];
   $qr="
     DELETE FROM `slider` WHERE idSlider=$idSlider;
   ";
   mysqli_query($con,$qr);
}
?>
<?php 
//xóa ngành hàng
$qr="";
if(isset($_GET["xoanh"])){
   $idNH=$_GET["xoanh"];
   $qr=" 
     DELETE FROM `nganhhang` WHERE idNH=$idNH;
   ";
   mysqli_query($con,$qr);
}
?>

<?php 
//sữa thoog tin sản phẩm
$qr="";
if(isset($_POST["tenSpSua"])){
   $idsua=$_GET["sua"];
   $tensp=$_POST["tenSpSua"];
   $gia=$_POST["gia"];
   $giasale=$_POST["giaSale"];
   $urlhinh=$_POST["urlHinh"];
   if(strlen($urlhinh)<1){
      $urlhinh=$_POST["urlHinh2"];
   }
   $loaihang=$_POST["loaihang"];
   $qr="
   UPDATE `sanpham` SET `tenSp`=N'$tensp',`gia`=$gia,`giaSale`=$giasale,`loaiHang`='$loaihang',`urlHinh`='$urlhinh'
   WHERE idSp=$idsua;
   ";
   mysqli_query($con,$qr);
}
?>
<?php 
//sữa thoog tin user
$qr="";
if(isset($_POST["nameusersua"])){
   $idsua=$_GET["suauser"];

   $name=$_POST["nameusersua"];
   $tk=$_POST["tk"];
   $mk=$_POST["mk"];
   $gr=$_POST["gr"];
   
   $qr="
   UPDATE `user` SET `tk`='$tk',`mk`='$mk',`name`=N'$name',`gr`=$gr
   WHERE idUser=$idsua;
   ";
   mysqli_query($con,$qr);
}
?>
<?php 
//sữa thông báo
$qr="";
if(isset($_GET["suatb"])){
   $idsua=$_GET["suatb"];

   $tieuDe=$_POST["tieuDe"];
   $ngayTb=$_POST["ngayTb"];
   $urlHinhTb=$_POST["urlHinhTb"];
   $noiDung=$_POST["noiDung"];
   
   $qr="
   UPDATE `thongbao` SET `tieuDe`=N'$tieuDe',`ngayTb`='$ngayTb',`noiDung`=N'$noiDung',`urlHinhTb`='$urlHinhTb'
   WHERE idTb=$idsua;
   ";
   mysqli_query($con,$qr);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>Trang Chủ Admin</title>
  <link href="public/cssAdmin/style.css" rel="stylesheet">
  <script src="https://www.gstatic.com/firebasejs/5.7.2/firebase.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.7.2/firebase-database.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" language=”JavaScript” src="public/js/jsadmin.js"></script>
</head>
<body>

<div class="chat" id="wrappagechat">
   <center><h3>Trả lời khách hàng</h3></center>
    <?php require "chat.php"; ?>
</div>
<a href="#" onclick="anFormChat();" class="butlienhe"></a>

</body>
</html>
