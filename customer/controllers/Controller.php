<?php 

    $action;
    if(isset($_POST["c"])){
        switch($_POST["c"]){
            case "dathang":
               require_once "customer/models/M_dat_hang.php";
               $M_dat_hang=new M_dat_hang();
               require_once "customer/views/dathang/V_dat_hang.php";
               unset($_POST["c"]);
            break;
            case "home":
               $action=$_POST['a'];
               require_once "customer/controllers/C_home.php";
            break;
            case "logout":
               $action=$_POST['a'];
               require_once "customer/controllers/C_home.php";
            break;
        }
    }else
    if(isset($_GET["c"])){
        switch($_GET["c"]){
            case 'chitietsanpham':
              require_once "customer/models/M_chi_tiet_san_pham.php";
              $M_chitietsanpham=new M_chi_tiet_san_pham();
              require_once "customer/views/chitietsanpham/V_chi_tiet_san_pham.php";
            break;
            case "thongtindathang":
                require_once "customer/models/M_thong_tin_dat_hang.php";
                $M_thongtindathang=new M_thong_tin_dat_hang();
                require_once "customer/views/thongtindathang/V_thong_tin_dat_hang.php";
            break;
            case "getqh":
                require_once "customer/models/M_thong_tin_dat_hang.php";
            break;
            case "getxa":
                require_once "customer/models/M_thong_tin_dat_hang.php";
            break;
            case "giohang":
                require_once "customer/models/M_gio_hang.php";
                $M_giohang=new M_gio_hang();
                require_once "customer/views/giohang/V_gio_hang.php";
            break;
            case "seach":
            require_once "customer/models/M_home.php";
            $M_home=new M_home();
            require_once "customer/views/sanpham/V_san_pham.php";
        break;
        case "ajax":
           $action=$_GET["a"];
            require_once "customer/controllers/C_ajax.php";
        break;
        }
    }else{
        $action='';
        require_once "customer/controllers/C_home.php";
    }
    
?>