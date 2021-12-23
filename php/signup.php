<?php
 require 'configdb/db.php';
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<title>PATIENT'S PROFILE SIGN UP</title>
<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
    <div class="login-box">
    <form action="signup.php" method="post">
<h1>Patient Signup</h1>
<div class="input-box">
<input type="email" placeholder="Email Id" name="patemail">
</div>
<div class="input-box">
<input type="password" placeholder="Password" name="patpassword">
</div>
<div class="input-box">
<input type="id" placeholder="Patient ID" name="patid">
</div>
<div class="input-box">
<input type="name" placeholder="Patient Name" name="patname">
</div>
<div class="input-box">
<input type="age" placeholder="Patient Age" name="patage">
</div>
<div class="input-box">
<input type="gender" placeholder="Gender" name="gender">
</div>
<div class="input-box">
<input type="add" placeholder="Address" name="address">
</div>
<input class="btn" type="submit" name="sign_up" value="Sign up">
</form>
<?php
    if(isset($_POST['sign_up']))
    {
        //echo '<script type="text/javascript">alert("sign up clicked")</script>';
        @$patemail=$_POST['patemail'];
        @$patpassword=$_POST['patpassword'];
        @$patid=$_POST['patid'];
        @$patname=$_POST['patname'];
        @$patage=$_POST['patage'];
        @$gender=$_POST['gender'];
        @$address=$_POST['address'];
        if($patemail=="" || $patpassword=="" || $patid=="" || $patname=="" || $patage=="" || $gender=="" || $address=="")
        {
            echo '<script type="text/javascript">alert("Fill all the column")</script>';
        }
        else{
            $query= "insert into patsignup values('$patemail','$patpassword',$patid,'$patname',$patage,'$gender','$address')";
		 $query_run=mysqli_query($con,$query);
		 if($query_run)
		 {
			echo '<script type="text/javascript">alert("Inserted successfully")</script>';
		 }
		 else{
			echo '<script type="text/javascript">alert("Values not inserted ")</script>';
		 }
        }
    }

?>
</div>
</body>
</html> 