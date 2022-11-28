 
 <!--<form method="get" action="index.php">-->
      
 <div  class="item">
        <input id="txttukhoa" class="in intext" name="tukhoa" type="text" placeholder="Tên sản phẩm">
      </div>

      <div class="item">
        <select id="valLoaiHang" name="loaiHang" class="in" id="select">
          <option  value="0">Ngành hàng</option>
         <?php 
            foreach($M_home->GetListNganhHang() as $row){

         ?>
          <option class="itemsl" value="<?php echo $row["value"] ?>"><?php echo $row["tenNH"] ?></option>
            <?php } ?>
        </select>
      </div>

      <div class="item" >
        <select id="valOrderGia"  name="ordergia" class="in" id="select" required="">
        <option value="0">Giá Tăng/Giảm</option>
          <option value="1">Giá tăng dần</option>
          <option value="-1">Giá giảm dần</option>
        </select>
      </div>

      <div class="item">
        <select id="valGia" name="gia" class="in" id="select" >
        <option class="itemsl" value="0">Mức giá</option>
          <option class="itemsl" value="1">Dưới 1tr</option>
          <option class="itemsl" value="3">1tr - 3tr</option>
          <option class="itemsl" value="5">3tr - 5tr</option>
          <option class="itemsl" value="10">5tr - 10tr</option>
          <option class="itemsl" value="15">Trên 10tr</option>
        </select>
      </div>

      <div class="item">
        <input class="but" onclick="butLoc();" id="butloc" name="filseach" type="submit" value="Tìm kiếm">
      </div>


