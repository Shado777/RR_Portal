<?php
$con = mysqli_connect('127.0.0.1','root','','rr_portal');
$query = "SELECT taskName,eName,tDesc,completed FROM taskreceive";
$result1 = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R&R EMployee Task Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1><u>Employee Task Portal</u></h1>
  </br></br>
<?php while($row = mysqli_fetch_array($result1)):;?>
    <div class="flex-containerBoxes">
        <div class="box">
            <table width="70%" style="border-spacing:1em;">
              <tr>
                <td style="font-size:40px;"><?php echo "Task name:".$row['taskName'];?></td>
                <td style="font-size:40px;"><?php echo"For employee: ".$row['eName'];?></td>
              </tr>
              <tr>
                <td style="font-size:40px;"><?php echo"Task description: ".$row['tDesc'];?></td>
              </tr>
            </table>
        </div>
        <input class="button" style="background-color: #D3D3D3;" id="complete1" type="submit" name="true" onclick="val1()" value="Complete">
        </input>
    </div>
  <?php endwhile;?>
  <script type="text/javascript">
    function val1() {
      alert("Task set as completed");
      document.getElementById("complete1")..style.backgroundColor = "green";
    }
  </script>
</body>
</html>
