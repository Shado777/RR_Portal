<?php
$con = mysqli_connect('127.0.0.1','root','','rr_portal');
$query = "SELECT cName,cSurname,pID FROM premiums";
$result1 = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R&R Update</title>
    <link rel="stylesheet" href="CEO_CSS/styles.css">
</head>

<body>
  <form action="" method="post">

    <a href="PremiumPolicy.html"><h1><u>Update Premiums and Policies Form</u></h1></a>

        <div class="flex-containerText">
            <div class="box1">
                <h2>This form is for updating Premiums and Policies </h2>
            </div>
        </div>


    <div class="flex-containerText">


        <table class="updateTable">
            <tr>
                <th>Client Name</th>
                <th>Policy Number</th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
              <?php while($row = mysqli_fetch_array($result1)):;?>
                <td bgcolor="white"><?php echo $row['cName']." ".$row['cSurname'];?></td>
                <td bgcolor="white" name="idRes"><center><?php echo $row['pID'];?><center></td>
                <td>
                    <a href="PremiumCredentials.php" target="_blank"><input class="updateButton" type="button" value="Update"></input></a>
                </td>
                <td>
                    <a href="deletePremiumCred.php" target="_blank"><input class="deleteButton" type="button" value="Delete" name="del1"></input></a>
                </td>
            </tr>
            <?php endwhile;?>
        </table>
    </div>
    </form>
</body>

</html>
