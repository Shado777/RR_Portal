<?php
  if(isset($_POST["asign1"])){

    $con = mysqli_connect('127.0.0.1','root','','rr_portal');

    $tName = $_POST["tName"];
    $eName = $_POST["ename"];
    $tdisc = $_POST["desc1"];

    $sql = "INSERT INTO taskReceive (taskName,eName,tDesc,completed)
    VALUES ('$tName','$eName','$tdisc','false')";

    mysqli_query($con,$sql);
    mysqli_close($con);
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

fieldset{
	border: 1px solid;
	width: 80%;
}

.new-t-form{
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 0.8em;
	padding: 1em;
	margin-left: 20%;
}

.new-t-form *{
	box-sizing: border-box;
}

.new-t-form input[type="text"], textarea{
	display: block;
	width: 100%;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 0.9em;
	padding: 0.3em;
}

.new-t-form textarea{
	height: 100px;
}

.new-t-form p{
	font-size: 1.2em;
}

#assign{
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
	margin-bottom: 20px;
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

.tasks-f{
	position: flex;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 0.8em;
	padding: 1em;
	margin-right: 80%;
	transform: translate(-65%, -75%);
	width: 110%;
}

.tasks-f *{
	box-sizing: border-box;
}

.inner{
	width: 100%;
}

.tasks-f p{
	font-size: 1.2em;
}

.tasks-f label[for=task-name],[for=emp]{
	display: block;
	width: 200px;
}

 .right{

 }

.inner .right{
	float: right;
	top: -20%;
	margin-top: 0;
	display: block;
	width: 20%;
}

#exit{
	margin-left: 50px;
	padding-left: 10px;
	padding-top: 5px;
	padding-bottom: 5px;
	padding-right: 10px;
	font-weight: bold;
	background-color:  #ff0000;
	border: 1px solid;
	width: 100px;
	cursor: pointer;
	margin-top: -100%;
	font-size: 1.2em;
}

</style>
</head>
<body>
<div class="content">
<h1 align="center"><u>Task Manager</u></h1>

<form class="new-t-form" method="post">
<fieldset >
	<center><p>Assign new task</p></center>
	<br>
	<label for="taskN">Task name:</label>
	<input type="text" id="taskN" name="tName">
	<br>
	<label for="emp">Employee:</label>
	<input type="text" id="emp" name="ename">
	<br>
	<label for="taskD">Task description: </label>
	<textarea id="taskD" name="desc1"></textarea>
	<br>
	<input type="submit" id="assign" value="Assign" onclick="val()" name="asign1">
	<a href="BusinessForm.html"><input type="button" id="can" value="Cancel"></a>
</fieldset>
<script type="text/javascript">
  function val() {
    alert("Task send to employee!");
  }
</script>
</form>
</div>
</body>
</html>
