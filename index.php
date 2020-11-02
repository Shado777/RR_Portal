<?php
  if(isset($_POST["login"])) {
    $con = mysqli_connect('127.0.0.1','root','','rr_portal');

    $ceoName = $_POST["userName"];
    $ceoPass = $_POST["passWord"];

    $sql = "SELECT ceoName FROM ceo WHERE ceoUserName='$ceoName' and ceoPassword='$ceoPass'";

    $result1 = mysqli_query($con,$sql);
    $row = mysqli_num_rows($result1);
    if($row == 1){
      header("location:homePageCeo.html");
    }
    else {
      $error = "Login is incorrect";
      echo "$error";
    }
    mysqli_query($con,$sql);
    mysqli_close($con);
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>R&RLogin</title>
    <link rel="stylesheet" href="CEO_CSS/login.css">
  </head>
  <body style="background-color:#6699CC;">
    <form action="" method="post">
  </br></br></br></br></br></br></br></br></br></br>
    <div align="center" class="insertBox">
      <fieldset class="fieldset">
        </br></br></br>
        <div align="center">
          <img src="logo/logo2.png">
        </div>
        </br></br>
        <table width="60%" style="border-spacing:1em;">
          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 40px;"  for="userName">Username:</label></td>
            <td><input class="insert1" type="text" name="userName"></td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 40px;" class="txt" for="passWord">Password:</label></td>
            <td><input class="insert1" type="text" name="passWord"></td>
          </tr>
        </table>
      </br></br>
        <div>
          <a href="homePageCeo.html"><button class="btn1" style="font-size: 20px;" type="submit" onclick="val()" name="login"><b>Log on</b></button>
        </div>
        </br></br></br>
      </fieldset>
    </div>
    </form>
  </body>
</html>
