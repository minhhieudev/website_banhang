
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
  <h1>Quản lí bảng user</h1>
  <div class="contents">
    <table class="table" border="1px" cellspacing="0px">
    <tr class="row1">
        <td>idUser</td>
        <td>name</td>
        <td>tk</td>
        <td>mk</td>
        <td>Loại user</td>
        <td><a href="index.php?admin=&c=user&themuser=">Thêm User</a></td>
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
                <input type="hidden" name="a" value="themuser">
                <input type="submit" value="Thêm">
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
            <a class="but edit" href="index.php?admin=&c=user&idUserSua={idUser}">Sữa</a>
            <a onclick="return confirm('Bạn có chắc muốn xóa');" href="index.php?admin=&c=user&a=xoauser&idUser={idUser}">Xóa</a>
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