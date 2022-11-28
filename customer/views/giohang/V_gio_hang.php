
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Giỏ Hàng</title>
        <link href="customer/views/css/StyleHome.css" rel="stylesheet">
  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type=”text/javascript” src=”http://code.jquery.com/jquery-2.0.3.min.js”></script>
        <script type="text/javascript" language=”JavaScript” src="public/js/javascript.js"></script>
</head>

<body>
    <!--wrapper-->
  <div id="wraper">
    <!--block header-->
       <?php  require "customer/views/V_header.php" ?>
    <!--////block header-->
      <?php require "gio_hang.php"; ?>
    <!--blocks footer-->
        <?php require "customer/views/V_footer.php" ?>
     <!--//////blocks footer-->

  </div>
  <!--/////wrapper-->
</body>
</html>