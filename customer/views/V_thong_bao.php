<div class="title">Thông báo mới</div>
        <hr>
       <?php 
           
         foreach($M_home->GetListThongBao() as $row){
       ?>
        <div class="rowtb">
          <img class="imgtb" src="public/upload/<?php echo $row["urlHinhTb"] ?>" width="50px" height="50px">
          <div class="text">
            <a  class="tieude"><?php echo $row["tieuDe"] ?></a>
            <p class="tomtat"><?php echo $row["ngayTb"] ?></p>
          </div>
        </div>
      <?php  } ?>