<?php 
    switch($action){
        case "xoaitemgiohang":
         $idGioHang=$_GET["idGioHang"];
         require_once "lib/DB.php";
         $db=new DB();
         require "customer/views/V_ajax/VA_item_gio_hang.php";
      break;
      case "themvaogiohang":
         require_once "lib/DB.php";
         $db=new DB();
         $idsp=$_GET['idSp'];
         $iduser=$_GET['idUser'];
         $db->qr("insert INTO `giohang`(`idSp`, `idUser`) VALUES ($idsp,$iduser)");
      break;
        default :
          echo ' ';
        break;
    }
?>