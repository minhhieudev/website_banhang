<div id="lienhe">
         <div style=" background-image: url(public/upload/sms.png)" onclick="anFormLH(1);" class="butlienhe"></div>
         <div id="wrapformchat">
           <div class="formchat">
             <div class="title">
                 <p class="txtlienhe">Admin</p>
                 <div onclick="anFormLH(0);" id="cancel">X</div>
            </div>
               <div class="khungchat" id="chat">
               </div>
              <div class="bot">
                <input id="txtsms" type="text" placeholder="Nhập sms...">
               
                <input id="butsend" type="submit" value="Gửi" onclick="sendSms();" >
              </div>
           </div>  
         </div>
</div>