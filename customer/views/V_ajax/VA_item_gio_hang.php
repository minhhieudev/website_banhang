<?php 
//xoa
$qr="delete FROM `giohang` WHERE idGioHang =$idGioHang";
 $db->qr($qr);
//doc lai list gio hang
$idUser=$_SESSION['idUser'];
$listgiohang=$db->get_list("select * from giohang where idUser=$idUser");
foreach($listgiohang as $rowsp){
    $idsp=$rowsp["idSp"];
    $idGioHang=$rowsp["idGioHang"];
    $rowsp=$db->get_row("select * from sanpham where idSp=$idsp");
?>
  <div class="rowgiohang">
        <input type="checkbox" class="checksp" name="listIdSp[]" value="<?php echo $rowsp["idSp"] ?>">
        <img class="imgsp" src="public/upload/<?php echo $rowsp["urlHinh"] ?>" width="40px" height="50px">
        <p class="tensp"><?php echo $rowsp["tenSp"] ?></p>
        <p style="color:red;font-size:19px;margin-top:15px;margin-left:50px;float:left"><?php echo $rowsp["giaSale"] ?> .VND</p>
        <a class="butxoa" onclick="XoaItemGioHang(<?php echo $idGioHang ?>)">Xóa</a>
    </div>
<?php } ?>