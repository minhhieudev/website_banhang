<?php 
 require_once "./../lib/DB.php";
 class M_user extends DB{
     public function __construct(){
         parent::__construct();
     }
     public function GetListUser()
     {
         $qr="select * from user";
         return $this->get_list($qr);
     }
     public function ThemUser($tk,$mk,$name,$gr)
     {
         $mk=md5($mk);
         $qr="insert INTO `user`( `tk`, `mk`, `name`, `gr`) VALUES ('$tk','$mk','$name',$gr)";
         $this->qr($qr);
     }
     public function SuaUser($idUser,$tk,$mk,$name,$gr)
     {
         $qr="update `user` SET `tk`='$tk',`mk`='$mk',`name`='$name',`gr`=$gr WHERE idUser=$idUser";
         $this->qr($qr);
     }
     public function XoaUser($idUser)
     {
         $qr="delete FROM `user` WHERE idUser=$idUser";
         $this->qr($qr);
     }
 }
?>