<?php
 require 'configdb/db.php';
 $query="select sid, sname, ssal, sbonus, sstat from payroll";
 $result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
    <head>
    <title>
    Payroll
    </title>
    <link rel="stylesheet" type="text/css" href="css/drdetails.css">
    </head>
<body>
    <header>
<form action="payroll.php" method="post">
    <body style="background-color:rgb(4,29,49);"></body>
    <h1 align="center", style="color:white;"><u>PAYROLL</u></h1>
    <table align="center" border="1px" style="width:1000px; line-height:40px">
        <tr>
            <th colspan="5"><h2>Details</h2></th>
        </tr>
        <t>
            <th><h2 style="color:brown;">STAFF ID</h2></th>
            <th><h2 style="color:brown;">STAFF NAME</h2></th>
            <th><h2 style="color:brown;">SALARY</h2></th>
            <th><h2 style="color:brown;">BONUS</h2></th>
            <th><h2 style="color:brown;">STATUS</h2></th>
        </t>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
        <td style="color:white; text-align:center;"><b><?php echo $rows['sid']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['sname']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['ssal']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['sbonus']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['sstat']; ?></b></td>
        </tr>
        <?php
        }
        ?>
    </table>


    
    </header>
</body>
</html>

