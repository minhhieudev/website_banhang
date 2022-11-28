<?php 
 
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Thong tin dat hang</title>
        <link href="customer/views/css/StyleHome.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" language=”JavaScript” src="public/js/javascript.js"></script>
       <script type="text/javascript">
          $(document).ready(function(){
     $('.tinh').change(function(){
        var matp=$('.tinh').val();
        $.get("index.php",{c:"getqh",matp:matp},function(data){
          $('.huyen').html(data);
        });
     });

     $('.huyen').change(function(){
      var maqh=$('.huyen').val();
      $.get("index.php",{c:"getxa",maqh:maqh},function(data){
        $('.xa').html(data);
      });
   });
});

       </script>
</head>
<body>
<?php require_once "customer/views/V_header.php"; ?>
<div class="dathang">
   <form method="post" action="index.php">
        <input name="c" type="hidden" value="dathang" >
        <table border="1px" cellspacing="0px" cols="2" rows="6">
         <tr>
             <td colspan="2"><h2>Thêm địa chỉ nhận hàng</h2></td>
             <td ></td>
         </tr>
         <tr>
              <td><label>Tên</label><input maxlength="25" name="name" class="in" type="text" placeholder="Tên người nhận hàng"></td>
              <td><label>Địa chỉ cụ thể</label><input maxlength="50" name="diachi" class="in" type="text" placeholder="Vui lòng nhập địa chỉ của bạn."> </td>
         </tr>
         <tr>
              <td><label>Số điện thoại</label><input maxlength="12" name="sdt" class="in" type="tell" min="0" placeholder="Xin vui lòng điền SĐT"></td>
              <td><label>Tỉnh/thành phố</label>
                   <select name="tinh" class="in tinh">
                       <option>Vui lòng chọn tỉnh/thành phố</option>
                       <?php
                          $rs=$M_thongtindathang->GetTinh();
                           foreach($rs as $row){
                       ?>
                       <option value="<?php echo $row["matp"] ?>"><?php echo $row["name"] ?></option>
                       <?php } ?>
                   </select>
              </td>
         </tr>
         <tr>
              <td><label>Chú thích</label><input maxlength="50" name="chuthich" class="in" type="text" placeholder="Vui lòng điền chú thích(nếu có)"></td>
              <td><label>Quận/Huyện</label>
                   <select name="huyen" class="in huyen">
                       <option>Vui lòng chọn Quận/Huyện</option>
                   </select>
              </td>
         </tr>
         <tr>
              <td></td>
              <td><label>Phường/Xã</label>
                   <select name="xa" class="in xa">
                       <option>Vui lòng chọn Phường/Xã</option>
                   </select>
              </td>
         </tr>
         <tr>
              <td><input type="submit" class="but buthuy" value="Hủy"></td>
              <?php 
                  if(isset($_GET["listIdSp"]))
                       foreach ($_GET["listIdSp"] as $idSp){
              ?>
                 <input type="hidden" name="listIdSp[]" value="<?php echo $idSp ?>">
              <?php
                 }
              ?>
              <td><input name="butdathang" type="submit" class="but butdathang" value="Đặt hàng"></td>
         </tr>
   </table>
  </form>
</div>
<?php require_once "customer/views/V_footer.php"; ?>
</body>
</html>