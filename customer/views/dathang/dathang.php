<div class="donhang">
     <h1 class="t">Đặt hàng thành công</h1>

     <div class="ttdathang">
        <p class="info">Họ tên người nhận : <?php echo $name ?> </p>
        <p class="info">Số điện thoại: <?php echo $sdt ?>
        <p  class="info">Địa chỉ : <?php echo $diachi.' , '.$nameXa.' , '.$nameHuyen.' , '.$nameTP ?> </p>
      </div>
      <div class="listdonhang">
         <?php 
               foreach($listIdSp as $idSp) {
                 $rowsp=$M_dat_hang->GetSanPham($idSp);
         ?>
           <div class="rowdonhang">
                <img src="public/upload/<?php if(isset($_POST['listIdSp'])) echo $rowsp["urlHinh"];  ?>" width="40px" height="46px">
                <p class="tenSp"><?php if(isset($_POST['listIdSp'])) echo $rowsp["tenSp"]; ?></p>
                <p class="giaSp"><?php if(isset($_POST['listIdSp'])) echo $rowsp["giaSale"];  ?>.VND</p>
           </div>
               <?php } ?>
               <div class="rowdonhang tt">
                    <p class="textThanhToan">Tổng tiền thanh toán : <?php echo $tienThanhToan ?>đ </p>
               </div>
      </div>
</div>