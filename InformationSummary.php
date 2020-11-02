<?php
if(isset($_POST["view1"])) {
  $id = $_POST["idNum"];
  $con = mysqli_connect('127.0.0.1','root','','rr_portal');
  $query = "SELECT client.idNum, client.cName, client.cSurname, client.cPhone, client.cAddress, client.cEmail, premiums.pID, premiums.pPrice, premiums.pType, premiums.pDate FROM client INNER JOIN premiums ON client.idNum=premiums.cID WHERE client.idNum = '$id';";
  $result1 = mysqli_query($con,$query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R&R information</title>
    <link rel="stylesheet" href="CEO_CSS/styles.css">
    <link rel="stylesheet" href="CEO_CSS/info.css">
</head>

<body>
  <form action="" method="post">
    <h1><u>Information Summary</u></h1>
    <div align="center">
      <p>Enter the ID number of the client to get client information</p>
      <table width="30%">
        <tr>
          <td><label style="font-size: 25px;">ID number:</label></td>
          <td><input type="text" id="idNum1" name="idNum"></input></td>
          <td><button class="viewBtn" type="submit" name="view1" onclick="toggle()">View</button></td>
        </tr>
      </table>
    </div>
  </br></br></br>
    <div align="center" style="font-size:40px;">
      <table width="80%">
        <?php while($row = mysqli_fetch_array($result1)):;?>
        <tr>
          <td>ID number:</td>
          <td bgcolor="white"><?php echo $row['idNum'];?></td>
          <td>Name:</td>
          <td bgcolor="white"><?php echo $row['cName'];?></td>
        </tr>
        <tr>
          <td>Surname:</td>
          <td bgcolor="white"><?php echo $row['cSurname'];?></td>
          <td>Phone:</td>
          <td bgcolor="white"><?php echo $row['cPhone'];?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td bgcolor="white"><?php echo $row['cEmail'];?></td>
          <td>Address</td>
          <td bgcolor="white"><?php echo $row['cAddress'];?></td>
        </tr>
        <tr>
          <td>Premium Number:</td>
          <td bgcolor="white"><?php echo $row['pID'];?></td>
          <td>Premium Type:</td>
          <td bgcolor="white"><?php echo $row['pType'];?></td>
        </tr>
        <tr>
          <td>Premium Price:</td>
          <td bgcolor="white"><?php echo $row['pPrice'];?></td>
          <td>Date Created:</td>
          <td bgcolor="white"><?php echo $row['pDate'];?></td>
        </tr>
        <?php endwhile;?>
      </table>
    </div>
  </form>
</body>

</html>
