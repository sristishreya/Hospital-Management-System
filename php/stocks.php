<?php
 require 'configdb/db.php';
 $query="select * from stocks";
 $result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
    <head>
    <title>
    Stocks
    </title>
    <link rel="stylesheet" type="text/css" href="css/drdetails.css">
    </head>


    <body style="background-color:rgb(4,29,49);">
    <form action="stocks.php" method="post">
    <h1 align="center", style="color:white;"><u>Stocks</u></h1>
    <table align="center" border="1px" style="width:1500px; line-height:40px">
        <tr>
            <th colspan="3"><h2>Details</h2></th>
        </tr>
        <t>
            <th><h2 style="color:brown;">STOCK HOLDER</h2></th>
            <th><h2 style="color:brown;">NO. OF STOCKS</h2></th>
            <th><h2 style="color:brown;">TOTAL VALUES</h2></th>
        </t>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
        <td style="color:white; text-align:center;"><b><?php echo $rows['sholder']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['sno']; ?></b></td>
        <td style="color:white; text-align:center;"><b><?php echo $rows['stotal']; ?></b></td>
        
        </tr>
        <?php
        }
        ?>
        </table>
</body>
</html>