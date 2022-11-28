<?php 
 require_once "./../lib/DB.php";
 class M_thong_bao extends DB{
     public function __construct(){
         parent::__construct();
     }
     public function GetListThongBao()
     {
         $qr="select * from thongbao";
         return $this->get_list($qr);
     }
     public function ThemThongBao($tieuDe,$ngayTb,$noiDung,$urlHinhTb)
     {
         $qr="insert INTO `thongbao`(`tieuDe`, `ngayTb`, `noiDung`, `urlHinhTb`) 
         VALUES (N'$tieuDe','$ngayTb',N'$noiDung','$urlHinhTb')";
        $this->qr($qr);
     }
     public function SuaThongBao($idTb,$tieuDe,$ngayTb,$noiDung,$urlHinhTb)
     {
         $qr="UPDATE `thongbao` SET `tieuDe`='$tieuDe',`ngayTb`='$ngayTb',`noiDung`='$noiDung',`urlHinhTb`='$urlHinhTb' WHERE idTb=$idTb";
          $this->qr($qr);
     }
     public function XoaThongBao($idTb)
     {
         $qr="delete FROM `thongbao` WHERE idTb=$idTb";
          $this->qr($qr);
     }
 }
?>