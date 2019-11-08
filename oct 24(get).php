<?php
$guarded = ["name" , "surname"];
if($_GET){
	$flag = [];
	foreach ($_GET as $input => $value) {
		if (!in_array(	$input, $guarded)	) {
			array_push(	$flag, false);
			echo "['surename']=> X<br>";
		}
		else{
			array_push(	$flag, true);
		}
	}
	if (in_array(false, $flag)) {
		echo "	CSRF Caught<br >";
		echo "csrf => applied";
	}
	else{
		var_dump($_GET);
	}
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
		<input type="text" name="name" >
		<br />
		<input type="text" name="surname" >
		<input type="submit" >
	</form>
</body>
</html>
<?php
}