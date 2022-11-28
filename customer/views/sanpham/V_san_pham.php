<center>
     <?php 
      
     if(isset($_GET["seach"])){
        $tukhoa=$_GET["tukhoa"];
         $qr=" select * from sanpham 
               where tenSp REGEXP '$tukhoa'
         ";
         $listsp=$M_home->get_list($qr);
     }else if(isset($_GET["filseach"])){
         $tukhoa=$_GET["tukhoa"];
         if(strlen($tukhoa)<1){
            $tukhoa=$_GET["tukhoa1"];
         }
         $loaiHang=$_GET["loaiHang"];
         $gia=$_GET["gia"];
         $ordergia=$_GET["ordergia"];
         $qrOrder='';
         $qrLoaiHang='';
         if($loaiHang=='0'){
            $qrLoaiHang=" ";
         }else{
            $qrLoaiHang="
            and loaiHang = '$loaiHang'
          ";
         }
         if($ordergia==0){
             $qrOrder=" ";
         }else if($ordergia==1) $qrOrder=" order by gia asc ";
         else if($ordergia==-1) $qrOrder=" order by gia desc ";
         $qrgia;
         if($gia==0){
             $qrgia=" ";
         }else if($gia==1){
             $qrgia="
               and giaSale < 1000000
             ";
         }else if($gia==3){
            $qrgia="
              and  giaSale >= 1000000 and  giaSale < 3000000
             ";
         }else if($gia==5){
            $qrgia="
             and giaSale >= 3000000 and  giaSale < 5000000
            ";
         }else if($gia==10){
            $qrgia="
             and giaSale >=5000000 and giaSale <=10000000
            ";
         }
         else if($gia==15){
            $qrgia="
             and giaSale >=10000000 
            ";
         }

         $qr=" select * from sanpham 
              where tenSp REGEXP '$tukhoa'
               $qrLoaiHang
               $qrgia
               $qrOrder
         ";
        
         $listsp=$M_home->get_list($qr);
     }else{
         $qr=" select * from sanpham  ";
         $listsp=$M_home->get_list($qr);
     }
        
       foreach($listsp as $rowsp){
     ?>
      <a href="index.php?c=chitietsanpham&a=<?php echo $rowsp["idSp"] ?>">
        <div  class="itemsp">
          <img class="imgsp" src="public/upload/<?php echo $rowsp["urlHinh"] ?>" width="100%" height="50%">
          <a href="index.php?chitietsp=<?php echo $rowsp["idSp"] ?>" onclick="checkLogin(0);" class="tensp"><?php echo $rowsp["tenSp"] ?></a>
          <p class="gia"><?php echo number_format( $rowsp["giaSale"] ,$decimals = 0 , $dec_point = ".",$thousands_sep = ".") ?> đ</p>
          <p class="giagoc"><?php echo number_format( $rowsp["gia"] ,$decimals = 0 , $dec_point = ".",$thousands_sep = ".") ?> đ</p><br>
          <img class="imgxem" src="public/images/xem.png" width="20px" height="20px">
          <div class="txtxem"><?php echo $rowsp["luotXem"] ?></div>
          <div class="txtdamua"><?php echo $rowsp["luotMua"] ?></div>
          <img class="imggiohang" src="public/images/giohang.png" width="20px" height="20px">
        </div>
        </a>
     <?php } ?>
      </center>