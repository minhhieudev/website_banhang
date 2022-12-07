
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
  table td{
    height:25px;
  }
  table{
    width: 60%;
    box-shadow: 20px 20px 10px grey;
    border: 2px solid;
  }
  .row1{
    font-size:23px;
    height:40px;
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
  <h1>Quản lí danh sách mặt hàng</h1>
  <div class="contents">
    <table class="table" border="1px" cellpadding="5px" cellspacing="0px">

    <tr class="row1">
        <td>Tên mặt hàng</td>
        <td>Value</td>
      
        <td><a class="bt3" href="index.php?admin=&c=nganhhang&themnganhhang"><ion-icon name="add-circle-outline"></ion-icon>Thêm</a></td>
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
        <td><a class="bt2" onclick="return confirm('Bạn có chắc muốn xóa');" href="index.php?admin=&c=nganhhang&a=xoanganhhang&idNH={idNH}"><ion-icon name="trash-outline"></ion-icon>Xóa</a></td>
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
