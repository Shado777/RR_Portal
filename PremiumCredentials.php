<?php
if(isset($_POST["update1"])) {
  $con = mysqli_connect('127.0.0.1','root','','rr_portal');

  $pID = $_POST["pID"];
  $price = $_POST["policyPrice"];
  $pType = $_POST["policyType"];

  $sql = "UPDATE premiums SET pPrice='$price', pType='$pType'
  WHERE pID='$pID'";

  mysqli_query($con,$sql);
  mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R&R Premium credentials</title>
    <link rel="stylesheet" href="CEO_CSS/styles.css">
    <link rel="stylesheet" href="CEO_CSS/prem.css">
</head>

<body>
  <form action="" method="post">

    <h1><u>Premium Credentials</u></h1>

    <div class="flex-containerText">
        <p>Please update the premium for the client here.</p>

    </div>
    <div class="flex-containerText">
        <h2>Premium number :</h2>
        <input type="text" name="pID">
    </div>

    <div class="flex-containerText">
        <table class="policyTable">
            <tr>
                <th>
                    <p>Policy Price:</p>
                </th>
                <th> <input type="text" id="pPrice" name="policyPrice"></th>
            </tr>
            <tr>
                <th>
                    <p>Policy Type:</p>
                </th>
                <th> <input type="text" id="pType" name="policyType"></th>
            </tr>
            <br>
            <tr>
                <th>
                    <input class="updateButton1" type="submit" value="Update" name="update1"></input>
                </th>
            </tr>
        </table>
    </div>
</form>
</body>

</html>
