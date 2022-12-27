
///////////////////////////////////////////////////////////////////
// các onclick ẩn hiện
//ẩn hiện form chát liên hệ
function anFormLH(but) {
  if (but == 1) {
    document.getElementById("wrapformchat").style.display = "block";
  }
  else {
    document.getElementById("wrapformchat").style.display = "none";
  }
}
// ẩn hiện form đăng nhập, đăng ký
function anFormdndk(but, dndk) {
  
  if (but == 1) {
    
    if (dndk == 2) {
      
      document.getElementById("form-dn").style.setProperty('display', 'block'); 
      
          
}
    else { document.getElementById("form-dk").style.setProperty('display', 'block'); }
  } else {
    
    
    document.getElementById("form-dn").style.setProperty('display', 'none');
    document.getElementById("form-dk").style.setProperty('display', 'none');
  }
  
}

///
function checkdangnhap(iidUser, gr) {
  if (iidUser == "-1") alert("Vui lòng đăng nhập..");
  else if (gr == 1) document.getElementById("admin_bt").href = "admin";
  else {
    alert("Bạn không có quyền truy cập !");
  }
}
function checkdn(iidUser) {
  if (iidUser == "-1") alert("Tài khoản hoặc mật khẩu không chính xác");

}

// check dang nhap admin
function themvaogiohang(iidSp, iidUser) {
  if (iidUser == "-1") alert("Vui lòng đăng nhập..");
  else
    $.get(
      "index.php",
      { c: "ajax", a: "themvaogiohang", idSp: iidSp, idUser: iidUser },
      function (data) {
        alert("Đã thêm vào giỏ hàng");
      }
    );
}
////////////////////////
//ajax
//click but loc sp

function butLoc() {
  var ttukhoa = $("#txttukhoa").val();
  var tukhoa1 = $("#txtinput").val();
  var lloaiHang = $("#valLoaiHang").val();
  var orderGia = $("#valOrderGia").val();
  var ggia = $("#valGia").val();
  $.get("index.php", {
    c: "seach", tukhoa1: tukhoa1, filseach: "1", tukhoa: ttukhoa, loaiHang: lloaiHang
    , gia: ggia, ordergia: orderGia
  }, function (data) {
    $("#listsp").html(data);
  });
}
function butNganhHang(loaiHang){
  var lloaiHang=loaiHang;
  var ttukhoa = "";
  var tukhoa1 =  "";
  var orderGia =  "0";
  var ggia =  "0";
  $.get("index.php", {
    c: "seach", tukhoa1: tukhoa1, filseach: "1", tukhoa: ttukhoa, loaiHang: lloaiHang
    , gia: ggia, ordergia: orderGia
  }, function (data) {
    $("#listsp").html(data);
  });
}
function butTimKiem() {
  var txtsearch = document.getElementById("txtinput").value;
 
  $.get('index.php', {seach :'', c: "seach", tukhoa: txtsearch }, function (data) {
    $("#listsp").html(data);
  });
  document.getElementById('txtinput').value = '';
}

function checkLogin(check){
   if(check==0) return false;
   else return true;
}
function XoaItemGioHang(idGioHang){
  $.get('index.php', { idGioHang:idGioHang , c: "ajax",a:'xoaitemgiohang'}, function (data) {
    $(".giohang").html(data);
  });
  
}