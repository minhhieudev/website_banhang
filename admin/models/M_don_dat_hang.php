<?php 
 require_once "./../lib/DB.php";
 class M_don_dat_hang extends DB{
     public function __construct(){
         parent::__construct();
     }
     public function GetDonDatHang(){
        $qr=" select * from donhang ";
       return $this->get_list($qr);
     }
     public function GetSanPham($idSp){
        $qr=" select * from sanpham where idSp=$idSp";
       return $this->get_row($qr);
     }
     public function XoaDonDatHang($idDH){
      $qr="delete FROM `donhang` WHERE idDonHang=$idDH";
      $this->qr($qr);
   }

 }

?>