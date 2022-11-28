<?php 
    switch($action){
        case "login":
         require_once "customer/models/M_home.php";
         $M_home=new M_home();
         require "customer/views/V_home.php";
         unset($_POST["c"]);
      break;
       case "regis":
       require_once "customer/models/M_home.php";
         $M_home=new M_home();
         require "customer/views/V_home.php";
         unset($_POST["c"]);
      break;
      case "logout":
               require_once "customer/models/M_home.php";
               $M_home=new M_home();
               unset($_SESSION["idUser"]);
               unset($_SESSION["tk"]);
               unset($_SESSION["gr"]);
               require "customer/views/V_home.php";
               unset($_POST["c"]);
        break;
        default :
          require_once "customer/models/M_home.php";
          $M_home=new M_home();
          require "customer/views/V_home.php";
        break;
    }
?>