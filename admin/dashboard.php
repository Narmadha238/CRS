<?php
session_start();
if(empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}
require_once("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard</title>

    <link rel="icon" href="../img/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="admin.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="entire_page">
    <div class="container Container_element">
      <div class="row">
        <div class="col-md-12" align="center">
            <p class="login_para_title">ADMIN PANEL</p>
          <h3 style="font-size: 30px; color:purple;">Welcome To Dashboard, Admin!</h3>
          <div class="list-group" align="center" style="margin:60px; width: 50%; border: 1px solid #053a5a; border-radius: 5px;">
            <a href="dashboard.php" class="list-group-item active" style="font-size: 20px; color:black; background-color:lightblue;">Dashboard</a>
            <a href="user.php" class="list-group-item" style="font-size: 20px; color:black;">Users</a>
            <a href="company.php" class="list-group-item" style="font-size:20px; color:black;">Company</a>
            <a href="job-posts.php" class="list-group-item" style="font-size:20px; color:black;">Job Posts</a>
          </div>
          <a href="../logout.php" style="color:rgb(40, 40, 102); font-size:30px; border-style:solid; border-radius:25px; border-width:2px; border-color:rgb(40, 40, 102); background-color:transparent; padding:10px;">Logout</a>
    <br><br>
    <div align="center" style=" margin-top: 20px; height: 55px;">
      <a href="https://www.facebook.com/TataConsultancyServices" target="_blank"><img src="../img/facebook.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;" /></a>
      <a href="https://www.twitter.com/tcs" target="_blank"><img src="../img/twitter.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;" /></a>
      <a href="https://www.youtube.com/channel/UCaHyiyvJp4hhPNhIU7r9uqg" target="_blank"><img src="../img/youtube.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;" /></a>
    </div>
        </div>
      </div>
    </div>
    <br><Br>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </font>
  </body>
</html>