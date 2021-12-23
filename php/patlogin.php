<?php
 require 'configdb/db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<title>PATIENT LOGIN</title>
<link rel="stylesheet" type="text/css" href="css/patlogin.css">
</head>
<body>
<form action="patlogin.php" method="post">
    <div class="login-box">
<h1>Login Here</h1>
<div class="input-box">
<input type="email" placeholder="Email Id" name="patemail">
</div>
<div class="input-box">
<input type="password" placeholder="Password" name="patpassword">
</div>
<input class="btn" type="submit" name="plogin" value="Sign in">
</form>
<?php
    if(isset($_POST['plogin']))
    {
      //echo '<script type="text/javascript">alert("Php Working")</script>';
      $patemail=$_POST['patemail'];
      $patpassword=$_POST['patpassword'];
      $query= "select * from patsignup WHERE patemail='$patemail'AND patpassword='$patpassword'";
      $query_run = mysqli_query($con,$query);
      if(mysqli_num_rows($query_run)>0)
      {
          $_SESSION['patemail']= $patemail;
          header('location:patprofile.php');
      }
      else{
          echo '<script type="text/javascript">alert("Invalid Credentials")</script>';
      }

    }

?>
</div>
</body>
</html>