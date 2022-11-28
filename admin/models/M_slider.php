<?php 
 require_once "./../lib/DB.php";
 class M_slider extends DB{
     public function __construct(){
         parent::__construct();
     }
     public function GetListSlider()
     {
         $qr="select * from slider";
         return $this->get_list($qr);
     }
     public function ThemSlider($urlHinh)
     {
         $qr="insert INTO `slider`( `urlHinh`)
          VALUES ('$urlHinh')";
         return $this->qr($qr);
     }
     public function XoaSlider($idSlider)
     {
         $qr="delete FROM `slider` WHERE idSlider=$idSlider";
         $this->qr($qr);
     }
 }
?>