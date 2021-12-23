<?php
 require 'configdb/db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<title>ADMIN LOGIN</title>
<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<form action="admin.php" method="post">
    <div class="login-box">
<h1>Login Here</h1>
<div class="input-box">
<input type="email" placeholder="Email Id" name="aemail">
</div>
<div class="input-box">
<input type="password" placeholder="Password" name="apassword">
</div>
<input class="btn" type="submit" name="alogin" value="Sign in">
</form>
<?php
    if(isset($_POST['alogin']))
    {
      //echo '<script type="text/javascript">alert("Php Working")</script>';
      $aemail=$_POST['aemail'];
      $apassword=$_POST['apassword'];
      $query= "select * from admin WHERE aemail='$aemail'AND apassword='$apassword'";
      $query_run = mysqli_query($con,$query);
      if(mysqli_num_rows($query_run)>0)
      {
          $_SESSION['aemail']= $aemail;
          header('location:adlogin.php');
      }
      else{
          echo '<script type="text/javascript">alert("Invalid Credentials")</script>';
      }

    }

?>
</div>
</body>
</html>