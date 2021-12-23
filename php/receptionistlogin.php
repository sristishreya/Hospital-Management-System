<?php
 require 'configdb/db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<title>RECEPTIONIST LOGIN</title>
<link rel="stylesheet" type="text/css" href="css/receptionistlogin.css">
</head>
<body>
<form action="receptionistlogin.php" method="post">
    <div class="login-box">
<h1>Login Here</h1>
<div class="input-box">
<input type="email" placeholder="Email Id" name="remail">
</div>
<div class="input-box">
<input type="password" placeholder="Password" name="rpassword">
</div>
<input class="btn" type="submit" name="rlogin" value="Sign in">
</form>
<?php
    if(isset($_POST['rlogin']))
    {
      //echo '<script type="text/javascript">alert("Php Working")</script>';
      $remail=$_POST['remail'];
      $rpassword=$_POST['rpassword'];
      $query= "select * from receptionist WHERE remail='$remail'AND rpassword='$rpassword'";
      $query_run = mysqli_query($con,$query);
      if(mysqli_num_rows($query_run)>0)
      {
          $_SESSION['remail']= $remail;
          header('location:appoint.php');
      }
      else{
          echo '<script type="text/javascript">alert("Invalid Credentials")</script>';
      }
    }

?>
</div>
</body>
</html>