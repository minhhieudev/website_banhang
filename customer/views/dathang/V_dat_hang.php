<?php
   if(isset($_SESSION["dathang"])){
     header("location: index.php");
   }else{
    $_SESSION["dathang"]="1";
    
    $arrayListSp="";
   if (isset($_POST['listIdSp'])) {

      foreach($_POST['listIdSp'] as $value) {
         if(strlen($arrayListSp)>=1){ $arrayListSp=$arrayListSp.','.'{idSp}';}
         else{ $arrayListSp=$arrayListSp.'{idSp}';}
         $arrayListSp=str_replace("{idSp}",$value, $arrayListSp);
       }
   }
   $listIdSp=$_POST['listIdSp'];
   $listSp=$arrayListSp;

   $idUser=$_SESSION["idUser"];
   $tinh=$_POST["tinh"];
   $huyen=$_POST["huyen"];
   $xa=$_POST["xa"];
   $diachi=$_POST["diachi"];
   $sdt=$_POST["sdt"];
   $name=$_POST["name"];
   $chuThich=$_POST["chuthich"];
   $tienThanhToan=0;

    $nameTP=$M_dat_hang->get_row("select * from `devvn_tinhthanhpho` where matp = $tinh")["name"];
    $nameHuyen=$M_dat_hang->get_row("select * from `devvn_quanhuyen` where maqh = $huyen")["name"];
    $nameXa=$M_dat_hang->get_row("select * from `devvn_xaphuongthitran` where xaid = $xa")["name"];
   // tăng lượt mua của sản phẩm 
   // xóa sản phẩm trong giỏ hàng
   //tính tiền thanh toán
   if(isset($_POST['listIdSp'])) {
      foreach($_POST['listIdSp'] as $idSp) {
        $tienThanhToan+=$M_dat_hang->GetGiaTien($idSp);
        $M_dat_hang->TangLuotMua($idSp);
        $M_dat_hang->XoaTrongGioHang($idSp,$idUser);
      }
  }
  $M_dat_hang->DatHang($listSp,$tienThanhToan ,$idUser,$diachi,$sdt,$name,$nameTP,$nameHuyen,$nameXa,$chuThich);
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Đặt hàng thành công</title>
        <link href="customer/views/css/StyleHome.css" rel="stylesheet">
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type=”text/javascript” src=”http://code.jquery.com/jquery-2.0.3.min.js”></script>
        <script type="text/javascript" language=”JavaScript” src="public/js/javascript.js"></script>
</head>
<body>
  <!--wrapper-->
  <div id="wraper">
    <!--block header-->
       <?php  require_once "customer/views/V_header.php" ?>
    <!--////block header-->
    <?php  require_once "customer/views/dathang/dathang.php" ?>

  <?php require_once "customer/views/V_footer.php" ?>
</body>
</html>