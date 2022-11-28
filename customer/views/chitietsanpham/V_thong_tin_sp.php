<?php  
    $idSp=$_GET["a"];
    $M_chitietsanpham->TangLuotXem($idSp);
    $rowsp=$M_chitietsanpham->GetSanPham($idSp); 
?>
<div class="chitietsp">
    <img src="public/upload/<?php echo $rowsp["urlHinh"] ?>" class="imgmain">
    <div class="divright">
       <p class="tensp"><?php echo $rowsp["tenSp"] ?></p>
       <div class="divgia"> <?php echo number_format( $rowsp["giaSale"] ,$decimals = 0 , $dec_point = ".",$thousands_sep = ".") ?> đ </div>
       <h4 style="margin-left:20px;">Bảo hành 12 tháng.Cam kết chính hãng</h4>
       
       <div onclick='themvaogiohang(<?php echo $rowsp["idSp"]?>,<?php if(isset($_SESSION["idUser"])) echo $_SESSION["idUser"]; else echo "-1" ?>)' class="butthemvaogiohang">
            <img src="public/images/giohang.png" width="50px" height="50px">
            <p>Thêm vào giỏ hàng</p>
      </div>
       <form method="get" action="index.php">
          <input name="c" type="hidden" value="thongtindathang">  
          <input name="listIdSp[]" type="hidden" value="<?php echo $idSp ?>">
          <input class="butmua" name="butmuangay" type="submit" value="Mua ngay">
        </form>
        <br>
        <p class="txtSlMua">Có <?php echo $rowsp["luotMua"] ?> người đã mua sản phẩm này.</p>
        <p class="txtSlXem"><?php echo $rowsp["luotXem"] ?> :Lượt ghé thăm sản phẩm.</p>
    </div>
   <br>
   <div class="thongtinsp">
      <div class="t">Thông tin sản phẩm :</div>
      <?php echo $rowsp["thongtinSp"] ?>
   </div>
</div>

