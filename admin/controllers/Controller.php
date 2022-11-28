<?php 

$nameView='';
if(isset($_GET["c"])){
    $nameView=$_GET["c"];
    
        switch($_GET["c"]){
        case "dondathang":
            require_once "./models/M_don_dat_hang.php";
            $M_dondathang=new M_don_dat_hang();
            if(isset($_GET["a"])){
                switch($_GET["a"]){
                   case 'xoadondathang':
                   $M_dondathang->XoaDonDatHang($_GET["idDH"]);
                   break;
                }
            }
            $listDonHang=$M_dondathang->GetDonDatHang();
                    require_once "./views/V_home.php";
        break;
        case "sanpham":
            require_once "./models/M_san_pham.php";
            $M_sanpham=new M_san_pham();
            if(isset($_GET["a"])){
                switch($_GET["a"]){
                   case 'xoasanpham':
                     $M_sanpham->XoaSanPham($_GET["idSp"]);
                   break;
                   case 'suasanpham':
                     $M_sanpham->SuaSanPham($_GET["idSpSua"],$_GET["tenSp"],$_GET["gia"],$_GET["giaSale"],$_GET["loaiHang"],$_GET["urlHinh"]);
                   break;
                   case 'themsanpham':
                     $M_sanpham->ThemSanPham($_GET["tenSp"],$_GET["gia"],$_GET["giaSale"],$_GET["loaiHang"],$_GET["urlHinh"]);
                   break;
                }
            }
                    require_once "./views/V_home.php";

        break;
        case "user":
            require_once "./models/M_user.php";
            $M_user=new M_user();
            if(isset($_GET["a"])){
                switch($_GET["a"]){
                   case 'themuser':
                     $M_user->ThemUser($_GET["tk"],$_GET["mk"],$_GET["name"],$_GET["gr"]);
                   break;
                   case 'suauser':
                   $M_user->SuaUser($_GET["idUser"],$_GET["tk"],$_GET["mk"],$_GET["name"],$_GET["gr"]);
                   break;
                   case 'xoauser':
                   $M_user->XoaUser($_GET["idUser"]);
                   break;
                }
            }
                   require_once "./views/V_home.php";

        break;
        case "thongbao":
            require_once "./models/M_thong_bao.php";
            $M_thongbao=new M_thong_bao();
            if(isset($_GET["a"])){
                switch($_GET["a"]){
                   case 'themthongbao':
                   $M_thongbao->ThemThongBao($_GET["tieuDe"],$_GET["ngayTb"],$_GET["noiDung"],$_GET["urlHinhTb"]);
                   break;
                   case 'suathongbao':
                   $M_thongbao->SuaThongBao($_GET["idTb"],$_GET["tieuDe"],$_GET["ngayTb"],$_GET["noiDung"],$_GET["urlHinhTb"]);
                   break;
                   case 'xoathongbao':
                   $M_thongbao->XoaThongBao($_GET["idTb"]);
                   break;
                }
            }
                   require_once "./views/V_home.php";

        break;
        case "slider":
            require_once "./models/M_slider.php";
            $M_slider=new M_slider();
            if(isset($_GET["a"])){
                switch($_GET["a"]){
                   case 'themslider':
                   $M_slider->ThemSlider($_GET["urlHinh"]);
                   break;
                   case 'xoaslider':
                   $M_slider->XoaSlider($_GET["idSlider"]);
                   break;
                 
                }
            }
                   require_once "./views/V_home.php";

        break;
        case "nganhhang":
            require_once "./models/M_nganh_hang.php";
            $M_nganhhang=new M_nganh_hang();
            if(isset($_GET["a"])){
                switch($_GET["a"]){
                   case 'themnganhhang':
                   $M_nganhhang->ThemNganhHang($_GET["tenNH"]);
                   break;
                   case 'xoanganhhang':
                   $M_nganhhang->XoaNganhHang($_GET["idNH"]);
                   break;
                 
                }
            }
                    require_once "./views/V_home.php";

        break;
        default:
                  require_once "./views/V_home.php";

        break;
        }
    }else{
        require_once "./views/V_home.php";

    }

?>