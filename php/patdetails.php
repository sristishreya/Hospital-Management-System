<?php
 require 'configdb/db.php';
 $query="select paid, pnam, patsym, patphn from appointment";
 $result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
    <head>
    <title>
    Patient Details
    </title>
    <link rel="stylesheet" type="text/css" href="css/patdetails.css">
    </head>


    <body style="background-color:rgb(4,29,49);">
    <form action="patdetails.php" method="post">
    <h1 align="center", style="color:white;"><u>Patient Details</u></h1> 
    <table align="center" border="1px" style="width:1000px; line-height:40px">
        <tr>
            <th colspan="4"><h2>Details</h2></th>
        </tr>
        <t>
            <th><h2 style="color:brown;">PATIENT ID</h2></th>
            <th><h2 style="color:brown;">NAME</h2></th>
            <th><h2 style="color:brown;">SYMPTOM</h2></th>
            <th><h2 style="color:brown;">PHONE</h2></th>
        </t>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
        <td style="color:white; text-align:center;"><b><?php echo $rows['paid']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['pnam']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['patsym']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['patphn']; ?></b></td>
        </tr>
        <?php
        }
        ?>
        
    </table>
</body>
</html>

