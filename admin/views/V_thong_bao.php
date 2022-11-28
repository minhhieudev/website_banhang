<style>
  .main{
    text-align:center;
  }
  .contents{
    display: flex; 
    justify-content: center;
    align-items: center;  
  }
  table{
    width: 60%;
  }
</style>
<div class="main">
 <h1>Quản lí Thông báo</h1>
 <div class="contents">
  <table class="table" border="1px" cellpadding="5px" cellspacing="0px">
  <tr class="row1">
      <td>Id Thông báo</td>
      <td>Tiêu đề</td>
      <td>Ngày</td>
      <td>url Hình</td>
      <td>Nội dung</td>
      <td><a href="index.php?admin=&c=thongbao&themthongbao">Thêm</a></td>
  </tr>
  <?php  
  
      if(isset($_GET["themthongbao"])){
        echo '
        <tr>
        <form method="get" action="index.php">
        <td align="center">idTb</td>
        <td><input type="text" name="tieuDe" placeholder="Tiêu đề" ></td>
        <td><input type="date" name="ngayTb" ></td>
        <td><input type="file" name="urlHinhTb"></td>
        <td><input type="text" name="noiDung" ></td>
        
        <td>
          <input type="hidden" name="admin" value="admin">
          <input type="hidden" name="c" value="thongbao">
          <input type="hidden" name="a" value="themthongbao">
          <input type="submit" value="Thêm">
          </form>
        </tr>
        ';
      }
      foreach($M_thongbao->GetListThongBao() as $row){
          ob_start();
          if(isset($_GET["suathongbao"])&&$row["idTb"]==$_GET["suathongbao"]){
            echo '
            <tr>
            <form method="get" action="index.php">
            <td align="center">idTb</td>
            <td><input type="text" name="tieuDe" value="{tieuDe}" ></td>
            <td><input type="date" name="ngayTb" value="{ngayTb}" ></td>
            <td><input type="text" name="urlHinhTb" value="{urlHinhTb}" ></td>
            <td><input type="text" name="noiDung" value="{noiDung}"></td>
            <td>
              <input type="hidden" name="admin" value="admin">
              <input type="hidden" name="c" value="thongbao">
              <input type="hidden" name="a" value="suathongbao">
              <input type="hidden" name="idTb" value="{idTb}">
              <input type="submit" value="Cập nhật">
            </form>
            </tr>
            ';
          }else{
  ?>
        <tr>
        <td align="center">{idTb}</td>
        <td>{tieuDe}</td>
        <td>{ngayTb}</td>
        <td>{urlHinhTb}</td>
        <td>{noiDung}</td>
        
        <td><a href="index.php?admin=&c=thongbao&suathongbao={idTb}">Sữa</a>--
        <a onclick="return confirm('Bạn có chắc muốn xóa');" href="index.php?admin=&c=thongbao&a=xoathongbao&idTb={idTb}">Xóa</a></td>
        </tr>
    <?php }
    $s=ob_get_clean();
    $s=str_replace("{idTb}",$row["idTb"],$s);
    $s=str_replace("{tieuDe}",$row["tieuDe"],$s);
    $s=str_replace("{ngayTb}",$row["ngayTb"],$s);
    $s=str_replace("{urlHinhTb}",$row["urlHinhTb"],$s);
    $s=str_replace("{noiDung}",$row["noiDung"],$s);
    echo $s;
  }
    ?>
  </table>
 </div>
</div>