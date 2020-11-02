<?php
$con = mysqli_connect('127.0.0.1','root','','rr_portal');
$query = "SELECT cName,cSurname FROM client";
$result1 = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Form</title>
    <link rel="stylesheet" href="CEO_CSS/updateCred.css">
  </head>
  <body bgcolor="#6699cc">
    <div align="center">
      <a href="homePageCeo.html"><img src="logo/logo2.png" alt=""></a>
    </div>
    <div>
      <h1 style="font-size:80px;"><u>Update Form</u></h1>
      <p style="font-size:40px;">Choose between employee and client list</p>
      <div>
        <ul class="navBar">
          <li><a href="updateCred.php">Employee</a></li>
          <li><a href="#updateClientCred.php" class="active">Client</a></li>
        </ul>
        </br>
      </div>
      <fieldset class="fieldset1">
        <h1>Client names</h1>
        <table width="50%">
          <tr>
            <?php while($row = mysqli_fetch_array($result1)):;?>
            <td bgcolor="white" style="font-size:32px;"><?php echo $row['cName']." ".$row['cSurname'];?></td>
            <td><a href="customiszeClient.php" target="_blank"><button type="button" name="update1" class="btnUpdate">Update</button></a></td>
            <td><a href="delClient.php" target="_blank"><button type="button" name="delete1" class="btnDel">Delete</button></a></td>
          </tr>
          <?php endwhile;?>
        </table>
      </fieldset>
    </div>
  </body>
</html>
