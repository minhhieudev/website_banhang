<?php 
  session_start();
  require "system/config.php";
  require "lib/helper.php";
  if(isset($_GET["admin"])) require_once "admin/controllers/Controller.php";
  else require "customer/controllers/Controller.php";

?>