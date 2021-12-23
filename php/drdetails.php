<?php
 require 'configdb/db.php';
 $query="select regisid, drname, qual, special, yoe from docsignup";
 $result=mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html>
    <head>
    <title>
    Doctor Details
    </title>
    <link rel="stylesheet" type="text/css" href="css/drdetails.css">
    </head>


    <body style="background-color:rgb(4,29,49);">
    <form action="drdetails.php" method="post">
    <h1 align="center", style="color:white;"><u>Doctor Details</u></h1>
    <table align="center" border="1px" style="width:1500px; line-height:40px">
        <tr>
            <th colspan="5"><h2>Details</h2></th>
        </tr>
        <t>
            <th><h2 style="color:brown;">REGISTRATION ID</h2></th>
            <th><h2 style="color:brown;">NAME</h2></th>
            <th><h2 style="color:brown;">QUALIFICATIONS</h2></th>
            <th><h2 style="color:brown;">SPECIALIZATION</h2></th>
            <th><h2 style="color:brown;">YEAR OF EXP.</h2></th>
        </t>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
        <td style="color:white; text-align:center;"><b><?php echo $rows['regisid']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['drname']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['qual']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['special']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['yoe']; ?></b></td>
        </tr>
        <?php
        }
        ?>
        </table>
</body>
</html>