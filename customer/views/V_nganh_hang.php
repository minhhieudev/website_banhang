<?php 
 
 foreach($M_home->GetListNganhHang() as $row){
?>
      <li class="item" onclick="butNganhHang('<?php echo $row["value"] ?>')"> 
          <a  ><?php echo $row["tenNH"] ?></a>
          
      </li>
<?php } ?>  
      
     