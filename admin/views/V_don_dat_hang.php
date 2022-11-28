<style>
.s1{
  background-color: coral;
  color: black;
  font-size:20px;
  text-align:center;
}
table{
  width: 90%;
  box-shadow: 20px 20px 10px grey;
  border: 2px solid;
  
    
}
table tr:hover{
    background-color:#ddd;
    cursor:pointer;
}
table tr:nth-child(odd){
    background-color:#eee;
}
table tr:nth-child(even){
    background-color:white;
}
table tr:nth-child(1){
    background-color:skyblue;
}
 
.s2{
  background-color: red;
  padding: 8px;
}
.content{
  text-align:center;     
}
.s{
  display: flex; 
  justify-content: center;
  align-items: center;
  
}
h1{
  color:red;
}
.bt_xoa{
  color: white;
  background-color:red;
  text-decoration: none;
}
</style>
<div class="content">
  <h1>Quản lý đơn đặt hàng</h1>
  <div class="s">
    <table class="table" border="2px" cellpadding="2px" cellspacing="0px">
    <tr class="row1">
        <td class="s1">Tên sản phẩm (Giá)</td>
        <td class="s1">Thành tiền</td>
        <td class="s1">Tên người mua</td>
        <td class="s1">id User</td>
        <td class="s1">Số điện thoại</td>
        <td class="s1">Địa chỉ</td>
        <td class="s1">Tỉnh / Thành phố</td>
        <td class="s1">Quận / Huyện</td>
        <td class="s1">Xã / Phường</td>
        <td class="s1">Chú thích</td>
        <td class="s1"></td>
    </tr>
    <?php  
        foreach($listDonHang as $row){
    ?>
        <tr>
        <td>
            <?php 
            //tên các sản phẩm
              $listTenSp=explode(",", $row["listSp"]);
              $thanhtien=0;
              foreach($listTenSp as $value){ 
                $rowTenSp=$M_dondathang->GetSanPham($value);
                $thanhtien+=$rowTenSp["giaSale"];
                echo $rowTenSp["tenSp"].'(<font color="red">'. $rowTenSp["giaSale"].'</font>)'.'<br>';
              }
          ?>
        </td>
        <td><font color="red"><?php echo $thanhtien  ?></font></td>
        <td><?php echo $row["tenNguoiNhan"]  ?></td>
        <td align="center"><?php echo $row["idUser"]  ?></td>
        <td><?php echo $row["sdt"]  ?></td>
        <td><?php echo $row["diaChi"]  ?></td>
        <td><?php echo $row["tinh"]  ?></td>
        <td><?php echo $row["huyen"]  ?></td>
        <td><?php echo $row["xa"]  ?></td>
        <td><?php echo $row["chuThich"]  ?></td>
        <td class="s2"><a class="bt_xoa" onclick="return confirm('Bạn có chắc muốn xóa');" href="index.php?admin=&c=dondathang&a=xoadondathang&idDH=<?php echo $row["idDonHang"]  ?>">Xóa</a></td>
        </tr>
    <?php 
    }
    ?>
    </table>
  </div>
</div>