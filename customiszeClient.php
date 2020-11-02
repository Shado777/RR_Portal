<?php
if(isset($_POST["up2"])) {
  $con = mysqli_connect('127.0.0.1','root','','rr_portal');

  $cName = $_POST["ename"];
  $phone = $_POST["num"];
  $Address = $_POST["addr"];
  $Email = $_POST["email"];

  $sql = "UPDATE client SET cPhone='$phone', cAddress='$Address', cEmail='$Email'
  WHERE cName='$cName'";

  mysqli_query($con,$sql);
  mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R&R Customize Employees</title>
    <link rel="stylesheet" href="CEO_CSS/styles.css">
    <link rel="stylesheet" href="CEO_CSS/prem.css">
</head>

<body>
  <div align="center">
    <a href="updateClientCred.php"><img src="logo/logo2.png" alt=""></a>
  </div>
</br></br>
  <form action="" method="post">

    <h1><u>Update client Credentials</u></h1>

    <div class="flex-containerText">
        <p>Enter the desired client name here</p>

    </div>
    <div class="flex-containerText">
        <h2>Client Name :</h2>
        <input type="text" name="ename">
      </br></br>
    </div>
      <div align="center">
        <p>Customize the client credentials here</p>
        <table>
          <tr>
            <td><h2>Number :</h2></td>
            <td><input type="text" name="num"></br></td>
          </tr>
          <tr>
            <td><h2>Address :</h2></td>
            <td><input type="text" name="addr"></br></td>
          </tr>
          <tr>
            <td><h2>Email :</h2></td>
            <td><input type="text" name="email"></br></td>
          </tr>
        </table>
      </div>
    </br></br>
    <div align="center">
        <input class="updateButton1" type="submit" value="Update" name="up2"></input>
    </div>
</form>
</body>
</html>
