<?php
 require 'configdb/db.php';
 $query="select acno, descrp, tid, amt from account";
 $result=mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html>
    <head>
    <title>
    See Accounts
    </title>
    <link rel="stylesheet" type="text/css" href="css/drdetails.css">
    </head>


    <body style="background-color:rgb(4,29,49);">
    <form action="seeaccounts.php" method="post">
    <h1 align="center", style="color:white;"><u>See Accounts</u></h1>
    <table align="center" border="1px" style="width:1500px; line-height:40px">
        <tr>
            <th colspan="4"><h2>Details</h2></th>
        </tr>
        <t>
            <th><h2 style="color:brown;">ACCOUNT NO.</h2></th>
            <th><h2 style="color:brown;">DESCRIPTION</h2></th>
            <th><h2 style="color:brown;">TRANSACTION ID</h2></th>
            <th><h2 style="color:brown;">AMOUNT</h2></th>
        </t>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
        <td style="color:white; text-align:center;"><b><?php echo $rows['acno']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['descrp']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['tid']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['amt']; ?></b></td>
        </tr>
        <?php
        }
        ?>
       
        </table>
</body>
</html>