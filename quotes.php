<?php
$name;
$surname;
$pIdRes;
$price;
$type;

if(isset($_POST["gen1"])) {
  $con = mysqli_connect('127.0.0.1','root','','rr_portal');

  $pI = $_POST["pNum"];
  $query = "SELECT client.cName, client.cSurname, premiums.pID, premiums.pPrice, premiums.pType FROM client INNER JOIN premiums ON client.idNum=premiums.cID WHERE pID='$pI';";
  $result1 = mysqli_query($con,$query);

  while($row = mysqli_fetch_array($result1)) {

    $name = $row['cName'];
    $surname = $row['cSurname'];
    $pIdRes = $row['pID'];
    $price = $row['pPrice'];
    $type = $row['pType'];
  }
  $myfile = fopen("Quotes\quote1.txt","w");
  $txt = "Quote\nTo whom it may consern\n\n\nName: ".$name."\nSurname: ".$surname."\nThe Policy number is: ".$pIdRes."\nThe Policy Type is: ".$type."\nThe Policy Price is: ".$price;
  fwrite($myfile,$txt);
  fclose($myfile);
}

 ?>

<html>
<head>
<title></title>
<style>
body{
background-color: #6699cc;
}

.content {
  max-width: 500px;
  margin: auto;
  padding: 10px;
}

.new-p-form{
	max-width:500px;
	<!--margin: 2rem auto;-->
	padding: 2rem;
	}

label{
		width: 110px;
		display: inline-block;
		padding: 5px;
		margin-left: 10px;
	}

input[type=text],[type=number]{

	border: 1px solid;

	}

#gen{
	display: inline-block;
	margin-left: 50px;
	padding-left: 10px;
	padding-top: 5px;
	padding-bottom: 5px;
	padding-right: 10px;
	font-weight: bold;
	margin-top: 20px;
	background-color:  #7CFC00;
	border: 1px solid;
	width: 100px;
	cursor: pointer;
}

#can{
	display: inline-block;
	margin-left: 10px;
	padding-top: 5px;
	padding-bottom: 5px;
	padding-right: 10px;
	font-weight: bold;
	margin-top: 20px;
	background-color:  orange;
	border: 1px solid;
	width: 100px;
	cursor: pointer;
}

</style>
</head>

<body>
<div class="content">
<h1><u>Quatation Generator</u></h1>

	<form class="new-p-form" method="post">
	<label for="p-num">Policy Number: </label>
	<input type="number" id="p-num" name="pNum">
	<br>
	<label for="c-name">Client by Name: </label>
	<input type="text" id="c-name">
	<br>
	<input type="submit" id="gen" value="Generate" name="gen1">
	<a href="BusinessForm.html"><input type="button" id="can" value="Cancel"></a>
	</form>

</div>
</body>

</html>
