<?php 
include('connect.php');

  $ID = $_SESSION['ID'];
  
  $level = $_SESSION['level'];
 	if($level!='admin'){
    Header("Location: ../logout.php");  
  }  
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <?php include('headadmin.php'); ?>

    <div class="container fonts" style="margin-top:10px;">
        <div class="content_right" style="background-color:#fffff8; height:200px;">
            <div class="text-center" style="padding-left:10px; margin-top:20px;">
                <h1 align="">เกี่ยวกับ</h1>
                <img src="uploadshed/1.png" align="center" width="400" height="600">
                <p>หนังสือ อ้างอิง</p>
                <p></p>

            </div>
        </div>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>