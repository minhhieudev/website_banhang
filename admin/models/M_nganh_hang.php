<?php 
 require_once "./../lib/DB.php";
 class M_nganh_hang extends DB{
     public function __construct(){
         parent::__construct();
     }
     public function GetListNganhHang()
     {
         $qr="select * from nganhhang";
         return $this->get_list($qr);
     }
     public function ThemNganhHang($tenNH)
     {
         $value=CovertVn($tenNH);
         $qr="insert INTO `nganhhang`(`tenNH`, `value`) 
         VALUES (N'$tenNH','$value')";
         $this->qr($qr);
     }
     public function XoaNganhHang($idNH)
     {
         $qr="delete FROM `nganhhang` WHERE idNH=$idNH";
         $this->qr($qr);
     }
 }
?>