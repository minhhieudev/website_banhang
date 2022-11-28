<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>Trang Chủ Admin</title>
  <link href="./../public/cssAdmin/styleMain.css" rel="stylesheet">

  <script type=”text/javascript” src=”http://code.jquery.com/jquery-2.0.3.min.js”></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" language=”JavaScript” src="public/js/jsadmin.js"></script>
</head>

<body>

<div class="vhome">
  <div class="menuleft">
    
      <li class="qt"><a href="#"><img class="imgqt" src="./../public/images/admin.png" height="30px" width="30px" ><p><font size="6">Quản trị</font></p></a></li>
      <li><a href="index.php?admin=1"><img src="./../public/images/dashboard.png" height="100%" width="100%" ></a></li>
      <li><a href="index.php?admin=1&c=dondathang"><img class="icon" src="./../public/images/order.png" height="30px" width="30px" ><p>Đơn đặt hàng</p></a></li>
      <li><a href="index.php?admin=1&c=sanpham"><img class="icon" src="./../public/images/sanpham.png" height="30px" width="30px" ><p>Sản phẩm</p></a></li>
      <li><a href="index.php?admin=1&c=user"><img class="icon" src="./../public/images/user.png" height="30px" width="30px" ><p>User</p></a></li>
      <li><a href="index.php?admin=1&c=thongbao"><img class="icon" src="./../public/images/notification.png" height="30px" width="30px" ><p>Thông báo</p></a></li>
      <li><a href="index.php?admin=1&c=slider"><img class="icon" src="./../public/images/slider.png" height="30px" width="30px" ><p>Ảnh Slider</p></a></li>
      <li><a href="index.php?admin=1&c=nganhhang"><img class="icon" src="./../public/images/list.png" height="30px" width="30px" ><p>Danh sách ngành hàng</p></a></li>
  
  </div>
  
  <div class="divright">
        <div class="head">
            <li class="item-head"><a><img style="float:left" src="./../public/images/email.png" width="20px" height="20px">Message<font color="red">10</font></a></li>
            <li class="item-head"><a><img style="float:left" src="./../public/images/setting.png" width="20px" height="20px">Setting</a></li>
            <li class="item-head"><a><img style="float:left" src="./../public/images/exit.png" width="20px" height="20px">Logout</a></li>
        </div>
        <div class="content">
              <?php      
                  switch($nameView){
                    case 'dondathang':
                      require_once "./views/V_don_dat_hang.php";
                    break;
                    case 'sanpham':
                      require_once "./views/V_san_pham.php";
                    break;
                    case 'user':
                      require_once "./views/V_user.php";
                    break;
                    case 'thongbao':
                      require_once "./views/V_thong_bao.php";
                    break;
                    case 'slider':
                      require_once "./views/V_slider.php";
                    break;
                    case 'nganhhang':
                      require_once "./views/V_nganh_hang.php";
                    break;
                    default:
                      require_once "./views/V_dashboard.php";
                    break;
                  }
              ?>
        </div>
  </div>
</div>
</body>
</html>