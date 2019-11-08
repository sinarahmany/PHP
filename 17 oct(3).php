<?php if ($_POST){
	
	echo eval("return ". $_POST["num1"] . $_POST["operator"] . $_POST["num2"]."; ");
	//var_dump($_POST);
}
else{

	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Submitting</title>
</head>
<body>
	<form action="#" method="post">
		<input type="text" name="num1" placeholder="number 1">
		<br />
		<select name="operator" >
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<br />
		<input type="text" name="num2" placeholder="number 2" required>
		<br />
		<input type="submit" value="Submit">
		<br />
		
	</form>
</body>
</html>
<?php
 } ?>

