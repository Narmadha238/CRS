<?php
//To Handle Session Variables on This Page
session_start();
//If user Not logged in then redirect them back to homepage. 
//This is required if user tries to manually enter dashboard.php in URL.
if(empty($_SESSION['id_admin'])) {
	header("Location: index.php");
	exit();
}
//Including Database Connection From db.php file to avoid rewriting in all files
require_once("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Users List</title>

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
    

    <font face="calibri">
    <div class="container Container_element">
      <div class="row">
        <div class="col-md-12" align="center">
        <p class="login_para_title">ADMIN PANEL</p>
          <div class="list-group" align="center" style="width: 50%; border: 1px solid #053a5a; border-radius: 5px;">
            <a href="dashboard.php" class="list-group-item" style="color:black; font-size: 20px;">Dashboard</a>
            <a href="user.php" class="list-group-item active" style="color:black; font-size: 20px; background-color:lightblue;">Users</a>
            <a href="company.php" class="list-group-item" style="color:black; font-size: 20px;">Company</a>
            <a href="job-posts.php" class="list-group-item" style="color:black; font-size: 20px;">Job Posts</a>
          </div>
          <div class="col-md-12" align="center" style="font-size: 22px;" id="print">
        <?php
          $sql = "SELECT * FROM users";
          $result = $conn->query($sql);
          if($result->num_rows > 0) {
            echo '<h3>Total Number of Users: ' . $result->num_rows . '</h3>'; 
          }
        ?>
        <br>
          <table class="table">
            <thead>
              <th style="font-size: 22px; color: #053a5a; width: 6%">Sr.No</th>
              <th style="font-size: 22px; color: #053a5a; width: 12%">First Name</th>
              <th style="font-size: 22px; color: #053a5a; width: 12%">Last Name</th>
              <th style="font-size: 22px; color: #053a5a; width: 19%">Email</th>
              <th style="font-size: 22px; color: #053a5a; width: 41%">Address</th>
              <th style="font-size: 22px; color: #053a5a; width: 10%">Action</th>
            </thead>
            <tbody>
              <?php
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  $i = 0;
                  while($row = $result->fetch_assoc()) {
                    ?>
                      <tr>
                        <td style="font-size: 20px;"><?php echo ++$i; ?></td>
                        <td style="font-size: 20px;"><?php echo $row['firstname']; ?></td>
                        <td style="font-size: 20px;"><?php echo $row['lastname']; ?></td>
                        <td style="font-size: 20px;"><?php echo $row['email']; ?></td>
                        <td style="font-size: 20px;"><?php echo $row['address']; ?></td>
                        <td style="font-size: 20px;"><a href="delete-user.php?id=<?php echo $row['id_user']; ?>">Delete</a></td>
                      </tr>
                    <?php
                  }
                }
              ?>
            </tbody>
          </table>
          <br><br>
          <a href="../logout.php" style="color:rgb(40, 40, 102); font-size:30px; border-style:solid; border-radius:25px; border-width:2px; border-color:rgb(40, 40, 102); background-color:transparent; padding:10px;">Logout</a>
    
          <br><br>
          <div align="center" style="margin-top:10px; height: 55px;">
      <a href="https://www.facebook.com/TataConsultancyServices" target="_blank"><img src="../img/facebook.png" style="width: 30px; height: 30px; margin:5px;" /></a>
      <a href="https://www.twitter.com/tcs" target="_blank"><img src="../img/twitter.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;" /></a>
      <a href="https://www.youtube.com/channel/UCaHyiyvJp4hhPNhIU7r9uqg" target="_blank"><img src="../img/youtube.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;" /></a>
    </div>
        </div>
        
  
      </div>
    </div>
    
  


  </div></div><br>
  
        </div>

        <br>

        

  <br><br>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  </body>
</html>