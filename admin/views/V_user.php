
<style>
  .m{
    text-align:center;
  }
  .m h1{
    color: #FF3300;
    text-shadow: 1px 1px 2px #000000;
  }
  .contents{
    display: flex; 
    justify-content: center;
    align-items: center;  
    font-size:20px;
    font-weight: bold;
    margin-top:20px;
  }
  table{
    width: 70%;
    size:25px;
    box-shadow: 20px 20px 10px grey;
    border: 2px solid;
  }
  table td{
        height:26px;
  }
  table tr{
    height:35px;
  }
  .row1{
    height:40px;
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
   .bt3{
  background:#FF8247;
  text-decoration: none;
  padding:3px;
  color:white;
  border-radius:25px;
 }
 .bt1{
  border-radius:25px;
  padding: 2px;
  color:white;
  background: #00BFFF;
 }
 .bt2{
  background:#FF3300;
  border-radius:25px;
  padding: 2px;
  color:white;
  left:0px;
 }
</style>
<div class="m">
  <h1>Quản lí bảng user</h1>
  <div class="contents">
    <table class="table" border="1px" cellspacing="0px">
    <tr class="row1">
        <td>ID User</td>
        <td>Name</td>
        <td>Tài khoản</td>
        <td>Mật khẩu</td>
        <td>Loại user</td>
        <td><a class="bt3" href="index.php?admin=&c=user&themuser="><ion-icon name="add-circle-outline"></ion-icon>Thêm User</a></td>
    </tr>
    
    <?php
        if(isset($_GET["themuser"])){
            echo '
            <tr>
            <form method="get" action="index.php">
            <td align="center">idUser</td>
            <td><input type="text" name="name" placeholder="Họ tên"></td>
            <td><input type="text" name="tk" placeholder="Tài khoản"></td>
            <td><input type="text" name="mk" placeholder="Mật khẩu"></td>
            <td>
                <select name="gr">
                    <option value="0">Người dùng</option>
                    <option value="1">Admin</option>
                </select>
            </td>
            <td align="center">
                <input type="hidden" name="admin" value="admin">
                <input type="hidden" name="c" value="user">
                <input  type="hidden" name="a" value="themuser">
                <input  type="submit" value="Thêm">
            </td>
            </form>
        </tr>
            ';
        }
        foreach($M_user->GetListUser() as $row){
            ob_start();
            if(isset($_GET["idUserSua"])&&$row["idUser"]==$_GET["idUserSua"]){
                echo '
                <tr>
                <form method="get" action="index.php">
                <td align="center">idUser</td>
                <td><input type="text" name="name" value="{name}"></td>
                <td><input type="text" name="tk" value="{tk}"></td>
                <td><input type="text" name="mk" value="{mk}"></td>
                <td>
                    <select name="gr" value="{gr}">
                        <option value="0">Người dùng</option>
                        <option value="1">Admin</option>
                    </select>
                </td>
                <td align="center">
                    <input type="hidden" name="admin" value="admin">
                    <input type="hidden" name="c" value="user">
                    <input type="hidden" name="a" value="suauser">
                    <input type="hidden" name="idUser" value="{idUser}">
                    <input type="submit" value="Cập nhật">
                </td>
                </form>
            </tr>
                ';
            }else {
    ?>
    <tr>
        <td align="center">{idUser}</td>
        <td>{name}</td>
        <td>{tk}</td>
        <td>{mk}</td>
        <td>{gr}</td>
        <td align="center">
            <a class="but edit bt1" href="index.php?admin=&c=user&idUserSua={idUser}"><ion-icon name="create-outline"></ion-icon>Sửa</a>
            <a class="bt2" onclick="return confirm('Bạn có chắc muốn xóa');" href="index.php?admin=&c=user&a=xoauser&idUser={idUser}"><ion-icon name="trash-outline"></ion-icon>Xóa</a>
        </td>
    </tr>

    <?php }
        $s=ob_get_clean();
        $s=str_replace("{idUser}",$row["idUser"],$s);
        $s=str_replace("{name}",$row["name"],$s);
        $s=str_replace("{tk}",$row["tk"],$s);
        $s=str_replace("{mk}",$row["mk"],$s);
        if($row["gr"]==1) $gr='Admin'; else $gr='Người dùng';
        $s=str_replace("{gr}",$gr,$s);
        echo $s;
        }
    ?>
    </table>
    </div>
</div>