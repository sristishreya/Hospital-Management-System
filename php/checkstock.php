<?php
 require 'configdb/db.php';
 $query="select mname, mquan, mppt, mstat from addmedicine";
 $result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
    <head>
    <title>
    Medicine Stock
    </title>
    <link rel="stylesheet" type="text/css" href="css/drdetails.css">
    </head>
<body>
<form action="checkstock.php" method="post">
    <body style="background-color:rgb(4,29,49);"></body>
    <h1 align="center", style="color:white;"><u>Medicine Stock</u></h1>
    <table align="center" border="1px" style="width:1000px; line-height:40px">
        <tr>
            <th colspan="4"><h2>Details</h2></th>
        </tr>
        <t>
            <th><h2 style="color:brown;">MEDICINE NAME</h2></th>
            <th><h2 style="color:brown;">QUANTITY</h2></th>
            <th><h2 style="color:brown;">PRICE PER TABLET</h2></th>
            <th><h2 style="color:brown;">STATUS</h2></th>
        </t>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
        <td style="color:white; text-align:center;"><b><?php echo $rows['mname']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['mquan']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['mppt']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['mstat']; ?></b></td>
        </tr>
        <?php
        }
        ?>
    </table>


    

</body>
</html>

