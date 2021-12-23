<?php
 require 'configdb/db.php';
 $query="select * from appointment";
 $result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Patient Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      body {
        background: #cccccc;
      }
      .search {
        width: 100%;
        position: relative;
        display: flex;
      }
      .searchTerm {
        width: 100%;
        border: 3px solid #9e0098;
        border-right: none;
        padding: 5px;
        height: 20px;
        border-radius: 5px 0 0 5px;
        outline: none;
      }
      .searchTerm:focus {
        color: #380136;
      }
      .searchButton {
        width: 40px;
        height: 36px;
        border: 1px solid #9e0098;
        background: #9e0098;
        text-align: center;
        color: #eeeeee;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
        font-size: 20px;
      }
      .wrap {
        width: 30%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
    </style>
    
  </head>
  <body style="background-color:rgb(0,51,102);">
  <form action="patprofile.php" method="post">
  
    <div class="wrap">
      <div class="search">
        <input type="text" name="paid" class="searchTerm" placeholder="Enter PATIENT ID">
        <button type="submit" name="search" class="searchButton">
          <i class="fa fa-search"></i>
        </button>
        </div>
        </div>
    
    <h1 align="center", style="color:white;"><u>YOUR DETAILS</u></h1>
    <table align="center" border="1px" style="width:1000px; line-height:40px">
        <tr>
            <th colspan="7"><h2>Details</h2></th>
        </tr>
        <t>
            <th><h2 style="color:brown;">YOUR ID</h2></th>
            <th><h2 style="color:brown;">NAME</h2></th>
            <th><h2 style="color:brown;">SYMPTOM</h2></th>
            <th><h2 style="color:brown;">PHONE NUMBER</h2></th>
            <th><h2 style="color:brown;">TIME</h2></th>
            <th><h2 style="color:brown;">DOCTOR ID</h2></th>
            <th><h2 style="color:brown;">BILL(Rs.)</h2></th>
    </t>  
            

     
    </form>
      <?php
    if(isset($_POST['search']))
    {
      //echo '<script type="text/javascript">alert("sign up clicked")</script>';
      @$paid=$_POST['paid'];
      @$pnam=$_POST['pnam'];
      @$patsym=$_POST['patsym'];
      @$patphn=$_POST['patphn'];
      @$time=$_POST['time'];
      @$docid=$_POST['docid'];
      @$appbill=$_POST['appbill'];
      $query="select * from appointment where paid='$paid' ";
      $query_run=mysqli_query($con,$query);

      while($rows=mysqli_fetch_assoc($query_run))
      {
        ?>
        <tr>
          <td style="color:white; text-align:center;"><b><?php echo $rows['paid']; ?></b></td>
          <td style="color:white; text-align:center;"><b><?php echo $rows['pnam']; ?></b></td>
          <td style="color:white; text-align:center;"><b><?php echo $rows['patsym']; ?></b></td>
          <td style="color:white; text-align:center;"><b><?php echo $rows['patphn']; ?></b></td>
          <td style="color:white; text-align:center;"><b><?php echo $rows['time']; ?></b></td>
          <td style="color:white; text-align:center;"><b><?php echo $rows['docid']; ?></b></td>
          <td style="color:white; text-align:center;"><b><?php echo $rows['appbill']; ?></b></td>
      </tr>
        <?php
      }
    }
    ?>
    </table>
    
  </body>
</html>