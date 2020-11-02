<?php
$con = mysqli_connect('127.0.0.1','root','','rr_portal');
$query = "SELECT idNum,cName,cSurname FROM client";
$result1 = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R&R CLient Information</title>
    <link rel="stylesheet" href="CEO_CSS/styles.css">
</head>

<body>
  <div align="center">
    <a href="BusinessForm.html"><img src="logo/logo2.png" alt=""></a>
  </div>
</br></br></br>
    <h1><u>Client Information</u></h1>

    <div class="flex-containerText">
        <div class="box1">
            <h2>This form is for viewing Premiums and Policies </h2>
        </div>
    </div>
    <div align="center">
      <table width="50%" align="center" style="border-spacing:1em;">
        <tr>
          <th>Id Number: </th>
          <th>Client name and surname:</th>
        </tr>
        <tr>
          <?php while($row = mysqli_fetch_array($result1)):;?>
            <td bgcolor="white" style="font-size:40px;"><center><?php echo $row['idNum'];?></center></td>
            <td bgcolor="white" style="font-size:40px;"><center><?php echo $row['cName']." ".$row['cSurname'];?></center></td>
          </tr>
        <?php endwhile;?>
      </table>
      <div align="center">
        <a href="InformationSummary.php" target="_blacnk"><button class="viewButton" type="button">View</button></a>
      </div>
    </div>
</body>

</html>
