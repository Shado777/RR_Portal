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
  background-color: #6699cc;
}


.new-p-form{
	<!--max-width:500px;-->
	<!--margin: 2rem auto;-->
	padding: 2rem;

	input{

		display: block;
	}

}
label{
		width: 110px;
		display: inline-block;
		padding: 5px;
		margin-left: 10px;
	}

label[for=ID],[for=f-name],[for=s-name],[for=address]{
	width: 80px;
	display: inline-block;
}

.btnCr{
	position: relative;
	top: -150px;
	left: 90px;
	height: 30px;
	width: 110px;
	background-color: #7CFC00;
	border: none;
	cursor: pointer;
}

.btnCan{
	position: relative;
	top: -110px;
	left: 405px;
	height: 30px;
	width: 110px;
	background-color: orange;
	border: none;
	cursor: pointer;
}
</style>
</head>

<body>
<div class="content">
<h1><b><u> New Premiums </b></u></h1>
<p>This form is for creating new Premiums and policies for clients</p>


	<form class="new-p-form" method="post">
		<p><b> Client Details:</b> </p>
		<label for="ID" >ID Number: </label>
		<input type="number" id="ID" name="id">
		<br>
		<label for="f-name" >Name: </label>
		<input type="text" id="f-name" name="fname">
		<br>
		<label for="s-name" >Surname: </label>
		<input type="text" id="s-name" name="sname">
		<br>
		<label for="address">Address: </label>
		<input type="text" id="address" name="address">
		<br>

		<p><b>Premium Details</b></p>

		<label for="p-num">Policy Number: </label>
		<input type="number" id="p-num" name="pID">
		<br>
		<label for="policyPrice">Policy Price: </label>
		<input type="number" id="policy-num" name="pPrice">
		<br>
		<label for="policy-t">Policy type: </label>
		<input type="text" id="policy-t" name="pType">


			<input type="submit" value="Create" id="createBtn" class="btnCr" name="create1">
			<a href="PremiumPolicy.html"><input type="button" value="Cancel" id="cancelBtn" onclick="cancel()" class="btnCan"></a>
      <?php
        if(isset($_POST["create1"])){

          $con = mysqli_connect('127.0.0.1','root','','rr_portal');

          $pID = $_POST["pID"];
          $pPrice = $_POST["pPrice"];
          $pType = $_POST["pType"];
          $cName = $_POST["fname"];
          $cSurname = $_POST["sname"];
          $cAddress = $_POST["address"];
          $cID = $_POST["id"];

          $sql = "INSERT INTO premiums (pID,pPrice,pType,pDate,cName,cSurname,cAddress,cID)
          VALUES ('$pID','$pPrice','$pType',now(),'$cName','$cSurname','$cAddress','$cID')";

          mysqli_query($con,$sql);
          mysqli_close($con);
        }
      ?>
	</form>
</div>
</body>
</html>
