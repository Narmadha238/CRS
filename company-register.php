<?php
  session_start();

  if(isset($_SESSION['id_user'])) {
    header("Location: user/dashboard.php");
    exit();
  }

  require_once("db.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Company Registration</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>

  </head>

  <body class="entire_page">

  <font face="calibri">



  <section>
    <div class="container Container_element">
      <div class="row" align="center">
        
  <div style="height: 80px;">
    <p style="font-size: 34px; color: black; text-align: center; line-height: 73px;">Register as a Company</p>
  </div>

  <br>

  <p style="font-size: 18px; color: red; text-align: center;"> ( Fields marked with * are required. ) </p>

  <br>
        <form method="post" action="addcompany.php">

          <div>

            <table style="border:none;">

              <tr>
                <td><label for="companyname" style="font-size: 20px; color: #053a5a;">Company Name&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="text" id="companyname" name="companyname" placeholder="Company Name *" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="headofficecity" style="font-size: 20px; color: #053a5a;">Head Office City&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="text" id="headofficecity" name="headofficecity" placeholder="Head Office City *" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="contactno" style="font-size: 20px; color: #053a5a;">Contact Number&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="Number" id="contactno" pattern=".{10,10}" minlength="10" maxlength="10" name="contactno" placeholder="Contact Number *" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="website"" style="font-size: 20px; color: #053a5a;">Website&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="text" id="website"" name="website"" placeholder="Website"></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="companytype"" style="font-size: 20px; color: #053a5a;">Company Type&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="text" id="companytype"" name="companytype"" placeholder="Company Type"></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="email" style="font-size: 20px; color: #053a5a;">Company Email Address&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="email" id="email" name="email" placeholder="Email Address *" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="password" style="font-size: 20px; color: #053a5a;">Password&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="password" id="password" name="password" placeholder="Password *" required=""></td>
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
          if(isset($_SESSION['registerError'])){                
          ?>
          <div>
          <p style="text-align: center; color: red; font-size: 28px;">Email already Exists!</p>
          </div>
          <?php
          unset($_SESSION['registerError']);}
          ?>

        </form>
        <div align="center">
            <a href="index.php"  style="text-align:center; color:rgb(40, 40, 102); font-size:30px; border-style:solid; border-radius:25px; border-width:2px; border-color:rgb(40, 40, 102); background-color:transparent; padding:10px;"> Back</a>
            </div>
            <br><br>
            
    <div align="center" style=" margin-top: -1.4%; height: 55px;">
      <a href="https://www.facebook.com/TataConsultancyServices" target="_blank"><img src="img/facebook.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;" /></a>
      <a href="https://www.twitter.com/tcs" target="_blank"><img src="img/twitter.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;" /></a>
      <a href="https://www.youtube.com/channel/UCaHyiyvJp4hhPNhIU7r9uqg" target="_blank"><img src="img/youtube.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;" /></a>
    </div>
    <br><br>
      </div>
    </div>
  </section>

 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </font>
  </body>
</html>