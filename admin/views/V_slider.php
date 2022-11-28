
<style>
  .main{
    text-align:center;
  }
  .contents{
    display: flex; 
    justify-content: center;
    align-items: center;  
  }
</style>


<div class="main">
  <h1>Quản lí Slider</h1>
  <div class="contents">
    <table class="table" border="1px" cellpadding="5px" cellspacing="0px">
    <tr class="row1">
        <td>Dường dẫn</td>
        <td>Ảnh</td>
      
        <td><a href="index.php?admin=&c=slider&themslider">Thêm</a></td>
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
        <td><a onclick="return confirm('Bạn có chắc muốn xóa');" href="index.php?admin=&c=slider&a=xoaslider&idSlider={idSlider}">Xóa</a></td>
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