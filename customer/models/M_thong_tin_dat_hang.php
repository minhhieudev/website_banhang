<?php 
require_once "lib/DB.php";
class M_thong_tin_dat_hang extends DB{
   public function __construct(){
       parent::__construct();
   }
   public function GetTinh(){
     $qr=" select matp,name FROM `devvn_tinhthanhpho`";
     return $this->get_list($qr);
   }
   public function GetQH($matp){
        $qr=" select * FROM `devvn_quanhuyen`where matp='$matp'";
        return $this->get_list($qr);
   }
   public function GetXa($maqh){
        $qr="select * FROM `devvn_xaphuongthitran` where maqh='$maqh'";
        return $this->get_list($qr);
   }
   public function DangKi($maqh){
        $qr="select * FROM `devvn_xaphuongthitran` where maqh='$maqh'";
        return $this->get_list($qr);
   }
}

if(isset($_GET["matp"])){
     $matp=$_GET["matp"];
     $M=new M_thong_tin_dat_hang();
     echo '<option>Quận/Huyện</option>';
     $rs=$M->GetQH($matp);
    foreach($rs as $row)
    echo '<option value='. $row["maqh"].'>'.$row["name"] .'</option>';

}else if(isset($_GET["maqh"])){
     $maqh=$_GET["maqh"];
     $M=new M_thong_tin_dat_hang();
     echo '<option>Xã/Phường</option>';
     $rs=$M->GetXa($maqh);
    foreach($rs as $row)
    echo '<option value="'. $row["xaid"].'">'.$row["name"] .'</option>';
}
?>