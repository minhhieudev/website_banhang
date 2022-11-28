<?php 
require_once "lib/DB.php";
class M_gio_hang extends DB{
    public function __construct(){
       parent::__construct();
       if(isset( $_SESSION["dathang"])) unset($_SESSION["dathang"]);
    }

    public function GetGioHang($idUser){
        $qr="
        select * from giohang
        where idUser=$idUser
        ";
       return $this->get_list($qr);
    }

    public function GetSanPham($idSp){
        $qr="
        select * from sanpham
        where idSp=$idSp
        ";
       return $this->get_row($qr);
    }

}
?>