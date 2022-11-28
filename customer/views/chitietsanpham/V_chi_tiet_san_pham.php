<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Chi tiet san pham</title>
        <link href="customer/views/css/StyleHome.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" language=”JavaScript” src="public/js/javascript.js"></script>
</head>

<body>
    <!--wrapper-->
  <div id="wraper">
      <!--blocks lien he-->
        <?php require_once "customer/views/V_lien_he.php" ?>
      <!--///lien he-->

    <!--block header-->
       <?php  require "customer/views/V_header.php" ?>
    <!--////block header-->

      <?php require "V_thong_tin_sp.php"; ?>
    <!--blocks footer-->
        <?php require "customer/views/V_footer.php" ?>
     <!--//////blocks footer-->

  </div>
  <!--/////wrapper-->

</body>
</html>