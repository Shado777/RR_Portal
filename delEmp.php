<?php
if(isset($_POST["del1"])) {
  $con = mysqli_connect('127.0.0.1','root','','rr_portal');

  $pID = $_POST["pID"];

  $sql = "DELETE FROM employee WHERE eName='$pID';";

  mysqli_query($con,$sql);
  mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R&R Employee Deletion</title>
    <link rel="stylesheet" href="CEO_CSS/styles.css">
    <link rel="stylesheet" href="CEO_CSS/prem.css">
</head>

<body>
  <form action="" method="post">

    <h1><u>Delete Employee </u></h1>

    <div class="flex-containerText">
        <p>Please delete the employee here.</p>

    </div>
    <div class="flex-containerText">
        <h2>Employee name :</h2>
        <input type="text" name="pID">
    </div>

    <div class="flex-containerText">
        <table class="policyTable">
            <tr>
                <th>
                  <input class="delButton1" type="submit" onclick="del()" value="Delete" name="del1"></input>
                </th>
            </tr>
        </table>
    </div>
    <script type="text/javascript">
      function del() {
        alert("Employee deleted!");
      }
    </script>
</form>
</body>
</html>
