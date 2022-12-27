
  
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
 
