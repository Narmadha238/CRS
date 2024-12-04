<?php 

  session_start();

  if(isset($_SESSION['id_user'])) {
    header("Location: user/dashboard.php");
    exit();
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Company Login</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


  </head>
  <body  class="entire_page">

  <font face="calibri">

<section>
    <div class="container  Container_element">
      <div class="row" align="center">
        
  <div style=" height: 80px;">
    <p style="font-size: 34px; color: black; text-align: center; line-height: 75px;">Company Login</p>
  </div>

  <br>
  <br>


        <form method="post" action="checkcompanylogin.php">
          <div>

            <table style="border:none;">

              <tr>
                <td><label for="email" style="font-size: 22px; color: #053a5a;">Email Address&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding:4px; padding-left: 10px; padding-right: 10px; border: 1px solid black; border-radius: 5px;" type="email" id="email" name="email" placeholder="Email" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="password" style="font-size: 22px; color: #053a5a;">Password</label></td>
                <td style="font-size: 22px; color: #053a5a;">:</td>
                <td><input style="font-size: 20px; padding:4px; padding-left: 10px; padding-right: 10px; border: 1px solid black; border-radius: 5px;" type="password" id="password" name="password" placeholder="Password" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td></td>
                <td></td>
                <td><a href="companyforgot-password.php" style="font-size: 22px; color: red;">Forgot Password? Click Here...</a></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td></td>
                <td></td>
                <td><button type="submit" style="font-size: 18px; background-color: #053a5a; color: white; width: 50%; height: 50px; border-color: transparent; border-radius: 5px;">Submit</button></td>
              </tr>

            </table>

            <br>

          </div>

          <?php
          if(isset($_SESSION['registerCompleted'])){                
          ?>
          <div>
          <p id="successMessage" style="text-align: center; color: red; font-size: 28px;">You have registered successfully!</p>
          </div>
          <?php
          unset($_SESSION['registerCompleted']);}
          ?>

          <?php
          if(isset($_SESSION['loginError'])){                
          ?>
          <div>
          <p style="text-align: center; color: red; font-size: 28px;">Invalid Email or Password!</p>
          </div>
          <?php
          unset($_SESSION['loginError']);}
          ?>

        </form>

      </div>
      <br><br>
            
      <div align="center">
            <a href="mainlogin.php"  style="text-align:center; color:rgb(40, 40, 102); font-size:30px; border-style:solid; border-radius:25px; border-width:2px; border-color:rgb(40, 40, 102); background-color:transparent; padding:10px;"> Back</a>
            </div>
            
            
     
      <br><br>
      <div align="center" style=" margin-top: 10px; height: 55px;">
      <a href="https://www.facebook.com/TataConsultancyServices" target="_blank"><img src="img/facebook.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;" /></a>
      <a href="https://www.twitter.com/tcs" target="_blank"><img src="img/twitter.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;" /></a>
      <a href="https://www.youtube.com/channel/UCaHyiyvJp4hhPNhIU7r9uqg" target="_blank"><img src="img/youtube.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;" /></a>
    </div>
    <br><br>
    </div>
  </section>
  <br>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script type="text/javascript">
    $(function(){
      $("#successMessage:visible").fadeOut(5000);
    });
  </script>

  </font>
  </body>
</html>