<?php
if($_GET){
  echo "Name :" .  $_GET["name"] . "<br> LastName : " . $_GET["Lname"] .  $_GET["thelist"] ."<br>" . $_GET["radio1"] . "<br>". $_GET["vehicle1"];
  
}else{
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET</title>
	<style >
		input{
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<form action="#" method="GET">
		<input type="text" name="name" placeholder="Name" >
		<br />
		<input type="text" name="Lname" placeholder="LastName" >
		<br />
		<select name="thelist" onChange="combo(this, 'theinput')">
  			<option value="">General programming</option>
  			<option>Web Design</option>
  			<option>EMBEDDED Coding </option>
  			<option>Network Admin... </option>
  			<option>Game Developer </option>
		</select> 
		<br />

		<p>Bounce Points : </p>
		<input type="checkbox" name="vehicle1" value="Experienced"> Experienced <br>

		<input type="checkbox" name="vehicle1" value="Job Offer"> Job Offer <br>
		<br />


		<label>Term 1
		<input type="radio" name="radio1" value="Term 1">
		</label>
		<label>Term 2
		<input type="radio" name="radio1" value="Term 2">
		</label>
		<label>Term 3
		<input type="radio" name="radio1" value="Term 3">
		</label>
		<label>Term 4
		<input type="radio" name="radio1" value="Term 4">
		</label>

		<input type="submit" >

	</form>
</body>
</html>
<?php
}