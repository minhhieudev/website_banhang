
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
  <h1>Quản lí danh sách mặt hàng</h1>
  <div class="contents">
    <table class="table" border="1px" cellpadding="5px" cellspacing="0px">

    <tr class="row1">
        <td>Tên mặt hàng</td>
        <td>value</td>
      
        <td><a href="index.php?admin=&c=nganhhang&themnganhhang">Thêm</a></td>
    </tr>
    <?php 
      if(isset($_GET["themnganhhang"]))
      echo '
      <form method="get" action="index.php">
      <tr>
      <td><input type="text" name="tenNH" placeholder="Nhập tên mặt hàng" ></td>
      <td>(Tự khởi tạo)</td>
        <input type="hidden" name="admin" value="admin">
        <input type="hidden" name="c" value="nganhhang">
        <input type="hidden" name="a" value="themnganhhang">
      <td><input type="submit" name="addnh" value="Thêm"></td>
      </tr>
      </form>
      ';
    ?>
    <?php  
        foreach($M_nganhhang->GetListNganhHang() as $row){
            ob_start();
    ?>
        <tr>
        <td>{tenNH}</td>
        <td>{value}</td>
        <td><a onclick="return confirm('Bạn có chắc muốn xóa');" href="index.php?admin=&c=nganhhang&a=xoanganhhang&idNH={idNH}">Xóa</a></td>
        </tr>
    <?php 
      $s=ob_get_clean();
      $s=str_replace("{idNH}",$row["idNH"],$s);
      $s=str_replace("{tenNH}",$row["tenNH"],$s);
      $s=str_replace("{value}",$row["value"],$s);
    
      echo $s;
    }
    ?>
    </table>
</div>
</div>
