<div id="dn-dk">
       <li>
          <a onclick="anFormdndk(1,2);" href="#">Đăng nhập</a>
        </li>
        <li>
          <a onclick="anFormdndk(1,3);" class="dk" href="#">Đăng kí</a>
        </li>
 

        <form class="f" method="POST"  id="form-dn" action="index.php">
          <input  type="hidden" name="c" value="home">
          <input  type="hidden" name="a" value="login">
          <h2>Đăng nhập tài khoản</h2>
          <img class="iconleft" src="public/images/iconuser.png" width="30px" height="30px" >
          <input class="txtrow" maxlength="50" name="txttk" id="txttk" type="text" placeholder="Tên đăng nhập">
        
          <img class="iconleft" src="public/images/iconpass.png" width="30px" height="30px" >
          <input class="txtrow" maxlength="50" name="txtmk" id="txtmk" type="password" placeholder="Mật khẩu">
          
          <br>
          <input  type="submit"  value="Đăng nhập" class="butsubmit" name="butdn" id="butdn">
          <a href="#" class="butcancel" onclick="anFormdndk(0);">Cancel</a>
      </form>

        <form class="f" method="POST" action="index.php" id="form-dk" style="background-color: rgb(86, 202, 248);">
        
          <h2>Đăng ký tài khoản</h2>
          <div class="row"><input class="txtrowdk ten" name="txtten" id="txtten" maxlength="50" type="text" placeholder="Họ tên"> </div>
          <div class="row"> <img class="iconleftdk" src="public/images/iconuser.png" width="30px" height="30px" > <input class="txtrowdk tk" name="txttk" id="txttk" maxlength="50" type="text" placeholder="Tên TK"></div>
          <div class="row"><img class="iconleftdk" src="public/images/iconpass.png" width="30px" height="30px" ><input class="txtrowdk" name="txtmk" id="txtmk" maxlength="50" type="password" placeholder="Mật khẩu"></div>
          <div class="row"> <img class="iconleftdk" src="public/images/iconpass.png" width="30px" height="30px" ><input class="txtrowdk" name="txtmk2" id="txtmk2" maxlength="50" type="password" placeholder="Nhập lại mật khẩu"></div>
          <br>
          <input class="butsubmit" name="butdk" id="butdk" type="submit" value="Đăng ký">
          <a href="#" class="butcancel" onclick="anFormdndk(0)">Cancel</a>
        </form>
</div>