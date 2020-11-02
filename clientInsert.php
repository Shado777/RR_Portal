<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vlient Insert</title>
    <link rel="stylesheet" href="CEO_CSS/employeeInsert.css">
  </head>
  <body style="background-color:#6699CC;">
    <form action="" method="post">


    <h1 align="center" style="font-size:50px;"><u>Client Insert Form</u></h1>
    <p align="center" style="font-size:25px;">To insert the user, please fill in the credentials</p>
    <div align="center" class="insertBox">
      <table width="40%" style="border-spacing:1em;">
        <tr>
          <td style="font-size:25px;"><b>Id Number:</b></td>
          <td><input type="text" class="insert1" name="IdNum"></td>
        </tr>
        <tr>
          <td style="font-size:25px;"><b>Name:</b></td>
          <td><input type="text" class="insert1" name="name"></td>
        </tr>
        <tr>
          <td style="font-size:25px;"><b>Surname:</b></td>
          <td><input type="text" class="insert1" name="surname"></td>
        </tr>
        <tr>
          <td style="font-size:25px;"><b>Number:</b></td>
          <td><input type="text" class="insert1" name="phone"></td>
        </tr>
        <tr>
          <td style="font-size:25px;"><b>Adress:</b></td>
          <td><input type="text" class="insert1" name="address"></td>
        </tr>
        <tr>
          <td style="font-size:25px;"><b>Email:</b></td>
          <td><input type="text" class="insert1" name="email1"></td>
        </tr>
      </table>
    </div>
  </br></br></br></br></br></br></br></br></br></br>
    <div align="center">
      <table width="15%">
        <tr>
          <td><button class="btn1" style="font-size: 20px;" onclick="enter1()" type="submit" name="Continue1"><b>Continue</b></button></td>
          <td><a href="homePageCeo.html"><button class="btn2" style="font-size: 20px;" onclick="cans()" type="button" name="Cancel1"><b>Cancel</b></button></td>
        </tr>
      </table>
      <?php
        if(isset($_POST["Continue1"])){

          $con = mysqli_connect('127.0.0.1','root','','rr_portal');

          $idNum = $_POST["IdNum"];
          $eName = $_POST["name"];
          $eSurname = $_POST["surname"];
          $eNumber= $_POST["phone"];
          $eAddress = $_POST["address"];
          $eEmail = $_POST["email1"];



          $sql = "INSERT INTO client (idNum,cName,cSurname,cPhone,cAddress,cEmail)
          VALUES ('$idNum','$eName','$eSurname','$eNumber','$eAddress','$eEmail')";

          mysqli_query($con,$sql);
          mysqli_close($con);
        }
      ?>
      <script type="text/javascript">
        function enter1() {
          alert("Enter to database");
        }
        function cans() {
          alert("Returning to homepage");
          window.location.href = "homePageCeo.html";
        }
      </script>
    </div>
    </form>
  </body>
</html>
