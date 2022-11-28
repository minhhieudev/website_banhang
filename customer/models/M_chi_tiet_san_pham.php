<?php 
require_once "lib/DB.php";
 class M_chi_tiet_san_pham extends DB{
     public function __construct(){
         parent::__construct();
         unset($_SESSION["dathang"]);
     }
     public function TangLuotXem($idSp){
         $this->qr("update `sanpham` set `luotXem`=luotXem+1 WHERE idSp=$idSp");
     }
     public function GetSanPham($idSp){
         $qr="select * from sanpham where idSp=$idSp;";
     return $this->get_row($qr);
    }
 }
?>