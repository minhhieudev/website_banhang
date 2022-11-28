<?php 
 require_once "lib/DB.php";
  class M_dat_hang extends DB{
      public function __construct(){
         parent::__construct();
      }

      public function TangLuotMua($idSp){
        $qrupdate="
           UPDATE `sanpham` SET `luotMua`= luotMua+1  WHERE idSp = $idSp; 
         ";
         $this->qr($qrupdate);
      }
      
      public function XoaTrongGioHang($idSp,$idUser){
        $qrdelete="
           DELETE FROM `giohang` WHERE idUser=$idUser and idSp=$idSp;
        ";
        $this->qr($qrdelete);
      }

      public function GetGiaTien($idSp){
        $giaTien=mysqli_fetch_array($this->qr("select giaSale from sanpham where idSp=$idSp"))["giaSale"];
        return $giaTien;
      }
      public function GetSanPham($idSp){
        $qr="select * from sanpham where idSp = $idSp";
        return $this->get_row($qr);
      }
      public function DatHang($listSp,$tienThanhToan ,$idUser,$diachi,$sdt,$name,$nameTP,$nameHuyen,$nameXa,$chuThich){
        
        $qr="
        INSERT INTO `donhang`(`listSp`,`tien`,`idUser`, `diaChi`, `sdt`, `tenNguoiNhan`,`tinh`,`huyen`,`xa`, `chuThich`)
        VALUES ('$listSp',$tienThanhToan ,$idUser,N'$diachi','$sdt',N'$name',N'$nameTP',N'$nameHuyen',N'$nameXa',N'$chuThich');
        ";
        $this->qr($qr);
    }
  }
  

?>