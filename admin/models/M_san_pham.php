<?php 
 require_once "./../lib/DB.php";
 require_once "./../lib/helper.php";
 class M_san_pham extends DB{
     public function __construct(){
         parent::__construct();
     }
     public function GetListSanPham()
     {
         $qr="select * from sanpham";
         return $this->get_list($qr);
     }
     public function XoaSanPham($idSp)
     {
         $qr="DELETE FROM `sanpham` WHERE idSp=$idSp";
         $this->qr($qr);
     }
     public function GetListNganhHang()
     {
         $qr="select * FROM `nganhhang`";
         return $this->get_list($qr);
     }
     public function SuaSanPham($idSp,$tenSp,$gia,$giaSale,$loaiHang,$urlHinh)
     {
        $tenKhongDau=LoaiBoDau($tenSp);
         $qr="update `sanpham` SET
         `tenSp`='$tenSp',
         `tenSpKhongDau`='$tenKhongDau',
         `gia`=$gia,
         `giaSale`=$giaSale,
         `loaiHang`='$loaiHang',
         `urlHinh`='$urlHinh'
          WHERE idSp=$idSp";
         $this->qr($qr); 
     }
     public function ThemSanPham($tenSp,$gia,$giaSale,$loaiHang,$urlHinh)
     {
       $tenKhongDau=LoaiBoDau($tenSp);
         $qr="insert INTO `sanpham`(`tenSp`,`tenSpKhongDau`, `gia`, `giaSale`, `loaiHang`, `urlHinh`)
         VALUES ('$tenSp','$tenKhongDau',$gia,$giaSale,'$loaiHang','$urlHinh')";
         $this->qr($qr);
     }

 }
?>