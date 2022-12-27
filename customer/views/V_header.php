
<div id="header">
  
    <a style="background-image: url(public/upload/va.jpg );" href="index.php" id="logoweb"></a>
    
        <div id="form-search">
        <input type="text" name="tukhoa" id="txtinput" placeholder="Tìm sản phẩm......">
        <input  style="background-image: url(public/images/imgsearch.png);"  onclick="butTimKiem();" type="submit" id="butsubmit" name="seach" value="">
        
      </div>
    <a style="background-image: url(public/images/icongiohang.png);" href="index.php?c=giohang"  id="butgiohang"></a>
    
    
    <?php
             if(isset($_SESSION["idUser"])){
                echo '<div class="log">
                    <div class="tentk">
                    <p>HELLO: </p> <input id="txtname" type="submit" value="'.$_SESSION["tk"].' " >
                    <a style="background-image: url(../../admin/assets/imgs/15.jpg );" href="index.php" id=""></a>
                    </div>
                    <form class="formlogout" method="POST" action="index.php">
                      <input  type="hidden" name="c" value="home">
                      <input  type="hidden" name="a" value="logout">
                      <input style="background-color: #1670c4; border-radius: 10px;" class="butlogout" name="logout" id="logout" type="submit" value="Logout">
                    </form>
                    
                  </div>';
              }else{
                   
                    require_once "customer/views/V_dn_dk.php" ;
                   
                }
      ?>
    
</div>
