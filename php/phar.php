<?php
 require 'configdb/db.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/phar.css">
</head>
<body>
<form action="phar.php" method="post">
  <body style="background-color:rgb(4,29,49);"></body>
<h1 align="center", style="color:white;"><u>PHARMACY</u></h1>


  <h2 align="center", style="color:white;"><u> ADD MEDICINE DEATILS</u></h2>
  <header>
  <div class="column">
   
            
    <div class="form-box">
      
      <div class="input-box">
      <input type="med_name" placeholder="MEDICINE NAME" name="mname">
      </div>
      <div class="input-box">
      <input type="pptablet" placeholder="PRICE" name="mppt">
      </div>
      <div class="input-box">
      <input type="quantity" placeholder="QUANTITY" name ="mquan">
      </div>
      <div class="input-box">
      <input type="status" placeholder="STATUS" name="mstat">
      </div>
      <div class="btn">
      <input class="btn" type="submit" name="madd" value="Add Details"id="add">
      </div>
      <div class="btn">
      <a href="checkstock.php">
        <input class="btn" type="button" name="mcheck" value="Check Stock"id="cstock"></a>
      </div>
</form>
      <?php
    if(isset($_POST['madd']))
    {
        //echo '<script type="text/javascript">alert("sign up clicked")</script>';
        @$mname=$_POST['mname'];
        @$mppt=$_POST['mppt'];
        @$mquan=$_POST['mquan'];
        @$mstat=$_POST['mstat'];

        if($mname=="" || $mppt=="" || $mquan=="" || $mstat=="")
        {
            echo '<script type="text/javascript">alert("Fill all the column")</script>';
        }
        else{
            $query= "insert into addmedicine values('$mname',$mppt,$mquan,'$mstat')";
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
      
  </header>
      
</body>
</html>

