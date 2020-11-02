<?php
if(isset($_POST["up1"])) {
  $con = mysqli_connect('127.0.0.1','root','','rr_portal');

  $eName = $_POST["ename"];
  $user = $_POST["uname"];
  $phone = $_POST["num"];
  $Address = $_POST["addr"];
  $Email = $_POST["email"];

  $sql = "UPDATE employee SET eUsername='$user', eNumber='$phone', eAddress='$Address', eEmail='$Email'
  WHERE eName='$eName'";

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
    <a href="updateCred.php"><img src="logo/logo2.png" alt=""></a>
  </div>
</br></br>
  <form action="" method="post">

    <h1><u>Update employee Credentials</u></h1>

    <div class="flex-containerText">
        <p>Enter the desired employee name here</p>

    </div>
    <div class="flex-containerText">
        <h2>Employee Name :</h2>
        <input type="text" name="ename">
      </br></br>
    </div>
      <div align="center">
        <p>Customize the employee credentials here</p>
        <table>
          <tr>
            <td><h2>Username :</h2></td>
            <td><input type="text" name="uname"></br></td>
          </tr>
          <tr>
            <td><h2>Password :</h2></td>
            <td><input type="text" name="pass"></br></td>
          </tr>
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
        <input class="updateButton1" type="submit" onclick="val()" value="Update" name="up1"></input>
    </div>
    <script type="text/javascript">
      function val() {
        alert("employee succesfully updated");
      }
    </script>
</form>
</body>
</html>
