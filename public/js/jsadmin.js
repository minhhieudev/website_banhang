
  //connect firebase
  var keymain;
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
 function getIduser(){
     var iduser=document.getElementById("iduser").innerHTML.trim();
     iduser='sms'+iduser+'/';
     return iduser;
 }
  window.onload = function()
  {
     
//load list sms page admin///////
 var check=0;
 var commentsRef = firebase.database().ref('/');
 commentsRef.on('child_added', function(snapshot) {
    var key=snapshot.key;
    var subkey= key.substring(3,key.length);
    var name;
    var text;
    var commentsRef = firebase.database().ref('sms'+subkey+'/');
    commentsRef.on('child_added', function(snapshot) {
         if(check==0){
             name=snapshot.val().name;
             text=snapshot.val().text;
             check=1;
         }
    });
     check=0;
     var chat=document.getElementsByClassName("listchat")[0];
     var inner= chat.innerHTML.trim();
     var sms= ' <li><a onclick="openChat('+subkey+');" href="#">'+name+':' +'</a><p class="ct">'+text+'</p>'+'</li>'+inner;
     chat.innerHTML=sms;
  });
};

 //write sms vào firebase
 function sendSms() {
     
    var name ='Admin';
    var text = document.getElementById("txtsms").value;
    firebase.database().ref('sms'+keymain+'/').push({ name: name , text : text});
    document.getElementById('txtsms').value='';
  }
// hiển thị tin nhắn ra form chat
function displayChatMessage(name, text){
    var chat=document.getElementById("chat");
   var inner= chat.innerHTML;
   var sms= inner+'<div class="rowsms">'+name +":"+ text+"</div>";
   chat.innerHTML=sms;
   $("#chat")[0].scrollTop = $("#chat")[0].scrollHeight;
   }
//open chat   ////
function openChat(key){
  
    keymain=key;
    var chat=document.getElementById("chat").innerHTML='';
      anFormLH(1);
    var commentsRef = firebase.database().ref('sms'+key+'/');
    commentsRef.on('child_added', function(snapshot) {
       
            var name=snapshot.val().name;
            var text=snapshot.val().text;
            displayChatMessage(name, text);
           
        
    });
     
  }

  function anFormLH(but){
    if(but == 1){
      document.getElementById("wrapformchat").style.display= "block";
    }
    else{
      document.getElementById("wrapformchat").style.display= "none";
    }
 }
var check=1;
 function anFormChat(){
  if(check== 1){
    document.getElementById("wrappagechat").style.display= "block";
    check=0;
  }
  else{
    document.getElementById("wrappagechat").style.display= "none";
    check=1;
  }
}
 
