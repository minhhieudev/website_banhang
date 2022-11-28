
<form method="get" action="index.php">
<input type="hidden" name="c" value="thongtindathang">
<div class="giohang">
<?php 
   if(isset($_SESSION["idUser"])){
     $rs=$M_giohang->GetGioHang($_SESSION["idUser"]);
   foreach($rs as $r){
      $rowsp=$M_giohang->GetSanPham($r["idSp"]);
      $idGioHang=$r["idGioHang"];
?>
   <div class="rowgiohang">
        <input type="checkbox" class="checksp" name="listIdSp[]" value="<?php echo $rowsp["idSp"] ?>">
        <img class="imgsp" src="public/upload/<?php echo $rowsp["urlHinh"] ?>" width="40px" height="50px">
        <p class="tensp"><?php echo $rowsp["tenSp"] ?></p>
        <p style="color:red;font-size:19px;margin-top:15px;margin-left:50px;float:left"><?php echo $rowsp["giaSale"] ?> .VND</p>
        <a class="butxoa"  onclick="XoaItemGioHang(<?php echo $idGioHang ?>)">Xóa</a>
    </div>
<?php }} ?>
  <input class="butmua" name="butmuangay" type="submit" value="Mua ngay">
</div>
  </form>
