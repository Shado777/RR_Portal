<?php
$con = mysqli_connect('127.0.0.1','root','','rr_portal');

$query = "SELECT SUM(pPrice) AS sumPrice FROM premiums";
$query2 = "SELECT COUNT(idNum) AS clientCount FROM client";
$query3 = "SELECT COUNT(eName) AS empCount FROM employee";
$query4 = "SELECT MAX(pPrice) AS highPrice FROM premiums";

$result1 = mysqli_query($con,$query);
$result2 = mysqli_query($con,$query2);
$result3 = mysqli_query($con,$query3);
$result4 = mysqli_query($con,$query4);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Business Statistics</title>
  </head>
  <body bgcolor="#6699cc">
    <form action="" method="post">
    <div align="center">
      <table width="60%">
        <tr>
          <?php while($row = mysqli_fetch_array($result1)):;?>
          <td style="font-size:30px;">Total sum of policies:</td>
          <td style="font-size:30px;" bgcolor="white"><?php echo $row['sumPrice'] ?></td>
        </tr>
        <?php endwhile;?>
        <tr>
          <?php while($row2 = mysqli_fetch_array($result2)):;?>
          <td style="font-size:30px;">Total number of clients:</td>
          <td style="font-size:30px;" bgcolor="white"><?php echo $row2['clientCount'] ?></td>
        </tr>
        <?php endwhile;?>
        <tr>
          <?php while($row3 = mysqli_fetch_array($result3)):;?>
          <td style="font-size:30px;">Total number of employees:</td>
          <td style="font-size:30px;" bgcolor="white"><?php echo $row3['empCount'] ?></td>
        </tr>
          <?php endwhile;?>
        <tr>
          <?php while($row4 = mysqli_fetch_array($result4)):;?>
          <td style="font-size:30px;">Higest policy price:</td>
          <td style="font-size:30px;" bgcolor="white"><?php echo $row4['highPrice'] ?></td>
        </tr>
          <?php endwhile;?>
      </table>
    </div>
    </form>
  </body>
</html>
