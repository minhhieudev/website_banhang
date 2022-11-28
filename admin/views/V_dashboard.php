<?php
    require_once "./models/M_san_pham.php";
    require_once "./models/M_don_dat_hang.php";
    require_once "./models/M_user.php";

    $M_user=new M_user();
    $M_sanpham=new M_san_pham();
    $M_dondathang=new M_don_dat_hang();
    $listSp=$M_sanpham->GetListSanPham();
    $listDon= $M_dondathang->GetDonDatHang();
    $listUser= $M_user->GetListUser();
    $leng1 = count($listDon);
    $leng2 = count($listUser);
    $leng = count($listSp);
 ?>
<div class="dashboard">
              <div style="margin:30px 0 20px 50px">
                  <font size="6">DASHBOARD   </font> Welcome admin
              </div>
              <div class="thongke">
                 <li style=" background-color: rgb(26, 224, 149); " class="item-dashboard">
                     <img style=" background-color: rgb(24, 148, 101); " class="imgdb" src="./../public/images/user.png" width="70px" height="70px">
                     <div class="tt">User <br> <?php echo $leng2 ?></div>
                 </li>
                 <li style=" background-color: rgb(228, 72, 124);" class="item-dashboard">
                        <img style=" background-color: rgb(194, 56, 102);" class="imgdb" src="./../public/images/order.png" width="70px" height="70px">
                        <div class="tt">Đơn đặt hàng <br> <?php echo $leng1 ?></div>
                </li>
                <li style=" background-color: rgb(247, 128, 49);" class="item-dashboard">
                        <img style=" background-color: rgb(199, 85, 40);" class="imgdb" src="./../public/images/sanpham.png" width="70px" height="70px">
                        <div class="tt">Sản phẩm<br><?php echo $leng ?> </div>
                </li>
                <li style=" background-color: rgb(38, 125, 206);" class="item-dashboard">
                        <img style=" background-color: rgb(28, 96, 160);" class="imgdb" src="./../public/images/view.png" width="70px" height="70px">
                        <div class="tt">Lượt xem<br>50</div>
                </li>
                
              </div>
              <div class="tkdate">
                    <li style="background-color: #67ee72;"  class="item-tkdate">
                        <p><font size="5">Hôm nay</font></p>
                        <div>Lượt xem : <font color="red">20</font></div>
                        <div>Lượt mua : <font color="red">5</font></div>
                        <div>Người đăng kí mới : <font color="red">3</font></div>
                        <div>Lượt truy cập : <font color="red">3</font></div>
                    </li>
                    <li style="background-color: #ff8b1f;"  class="item-tkdate">
                            <p><font size="5">Tuần này</font></p>
                            <div>Lượt xem : <font color="red">20</font></div>
                            <div>Lượt mua : <font color="red">5</font></div>
                            <div>Người đăng kí mới : <font color="red">3</font></div>
                            <div>Lượt truy cập : <font color="red">3</font></div>
                        </li>
                        <li style="background-color: #1b6bff;" class="item-tkdate">
                                <p><font size="5">Tháng này</font></p>
                                <div>Lượt xem : <font color="red">20</font></div>
                                <div>Lượt mua : <font color="red">5</font></div>
                                <div>Người đăng kí mới : <font color="red">3</font></div>
                                <div>Lượt truy cập : <font color="red">3</font></div>
                            </li>
                    
              </div>
          </div>