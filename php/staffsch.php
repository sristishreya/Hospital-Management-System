<?php
 require 'configdb/db.php';
 $query="select * from staff";
 $result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
    <head>
    <title>
    Staff Schedule
    </title>
    <link rel="stylesheet" type="text/css" href="css/drdetails.css">
    </head>


    <body style="background-color:rgb(4,29,49);">
    <form action="staffsch.php" method="post">
    <h1 align="center", style="color:white;"><u>Staff Schedule</u></h1>
    <table align="center" border="1px" style="width:1500px; line-height:40px">
        <tr>
            <th colspan="4"><h2>Details</h2></th>
        </tr>
        <t>
            <th><h2 style="color:brown;">STAFF ID</h2></th>
            <th><h2 style="color:brown;">NAME</h2></th>
            <th><h2 style="color:brown;">DATE</h2></th>
            <th><h2 style="color:brown;">AT</h2></th>
        </t>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
        <td style="color:white; text-align:center;"><b><?php echo $rows['sid']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['sname']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['sdate']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['sat']; ?></b></td>
        </tr>
        <?php
        }
        ?>
       
        </table>
</body>
</html>