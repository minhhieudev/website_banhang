
<style>
  .m{
    text-align:center;
  }
  .contents{
    display: flex; 
    justify-content: center;
    align-items: center; 
    font-weight: bold; 
    margin-top:12px;

  }
  table{
    box-shadow: 20px 20px 10px grey;
    border: 2px solid;
  }
  .m h1{
    color: #FFFF00;
    text-shadow: 1px 1px 2px #000000;
  }
  table tr:nth-child(odd){
    background-color:#eee;
    }
    table tr:nth-child(even){
        background-color:white;
    }
    table tr:nth-child(1){
        background-color:#33FF99;
    }
  .bt2{
  background:#FF3300;
  border-radius:25px;
  padding: 2px;
  color:white;
  left:0px;
 }
 .bt3{
  background:#FF8247;
  text-decoration: none;
  padding:3px;
  color:white;
  border-radius:25px;
 }
</style>


<div class="m">
  <h1>Quản lí Slider</h1>
  <div class="contents">
    <table class="table" border="1px" cellpadding="5px" cellspacing="0px">
    <tr class="row1">
        <td>Dường dẫn</td>
        <td>Ảnh</td>
      
        <td><a class="bt3" href="index.php?admin=&c=slider&themslider"><ion-icon name="add-circle-outline"></ion-icon>Thêm</a></td>
    </tr>
    <?php 
        if(isset($_GET["themslider"])){
            echo '<form method="get" action="index.php">
              <tr>
                <td>...</td>
                  <td><input type="file" name="urlHinh"></td>
                  <input type="hidden" name="admin" value="admin">
                  <input type="hidden" name="c" value="slider">
                  <input type="hidden" name="a" value="themslider">
                  <td><input type="submit" name="butaddslider" value="Thêm" ></td>
              </tr>
              </form>
            ';
        }
    ?>
    <?php  
      
        foreach($M_slider->GetListSlider() as $row){
            ob_start();
    ?>
        <tr>
        <td>{urlHinh}</td>
        <td width="500px" height="100px"><img src="./../public/upload/{urlHinh}" width="100%" height="100%"></td>
        <td><a class="bt2" onclick="return confirm('Bạn có chắc muốn xóa');" href="index.php?admin=&c=slider&a=xoaslider&idSlider={idSlider}"><ion-icon name="trash-outline"></ion-icon>Xóa</a></td>
        </tr>
    <?php 
      $s=ob_get_clean();
      $s=str_replace("{urlHinh}",$row["urlHinh"],$s);
      $s=str_replace("{idSlider}",$row["idSlider"],$s);
      echo $s;
    }
    ?>
    </table>
  </div>
</div>