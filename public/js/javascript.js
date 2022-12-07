//connect firebase
var config = {
  apiKey: "AIzaSyBYlb9TRSsSpcZkADwXyJuCr3UBA3O6zcE",
  authDomain: "kim99-70392.firebaseapp.com",
  databaseURL: "https://kim99-70392.firebaseio.com",
  projectId: "kim99-70392",
  storageBucket: "kim99-70392.appspot.com",
  messagingSenderId: "22569332238"
};
firebase.initializeApp(config);
///////////////////////
function getIduser() {
  var iduser = document.getElementById("iduser").innerHTML.trim();
  iduser = 'sms' + iduser + '/';
  return iduser;
}
//write sms vào firebase
function sendSms() {
  var name ='tesst';// document.getElementById("txtname").value;
  var text = document.getElementById("txtsms").value;
  firebase.database().ref(getIduser()).push({ name: name, text: text });
  document.getElementById('txtsms').value = '';
}
// hiển thị tin nhắn ra form chat
function displayChatMessage(name, text) {
  var chat = document.getElementById("chat");
  var inner = chat.innerHTML;
  var sms = inner + '<div class="rowsms">' + name + ":" + text + "</div>";
  chat.innerHTML = sms;
  $("#chat")[0].scrollTop = $("#chat")[0].scrollHeight;
}
//lắng nghe sự kiện add dữ liệu sms/


window.onload = function () {
  ////////////////////
  var commentsRef = firebase.database().ref(getIduser());
  commentsRef.on('child_added', function (snapshot) {
    var name = snapshot.val().name;
    var text = snapshot.val().text;
    displayChatMessage(name, text);
  });
}
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