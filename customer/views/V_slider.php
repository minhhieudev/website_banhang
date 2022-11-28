<?php 
         $rs= $M_home->GetListSlider();
         foreach($rs as $row){
       ?>
         <img class="imgslider" src="public/upload/<?php echo $row["urlHinh"] ?>" width="100%" height="100%">
      <?php } ?>
     
      <script type="text/javascript">
      
      window.onload = function () {
  //slider
  var listImg=document.getElementsByClassName("imgslider");
          
  var index=0;
  function next()
  {
    index+=1;
    if(index>listImg.length-1) index=0;
    for(var i=0;i<listImg.length;i++){
      listImg[i].style.display="none";
    }
     listImg[index].style.display="block";

  }
  function back()
  {
    index-=1;
    if(index<0) index=listImg.length-1;

    for(var i=0;i<listImg.length;i++){
      listImg[i].style.display="none";
    }
     listImg[index].style.display="block";
  }
  
  setInterval(function(){
    next();
  },4000);

};
      </script>