<?php
	require("connect.php");

	if ($_POST) {
		$sql = "INSERT INTO categories(name,description) VALUES(?,?)";
		$data = $conn->prepare($sql);
		$data->execute([$_POST['name'],$_POST['descr']]);
	}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>hey hi hello bye die</title>
	<style>input {
	border-color: red };</style>
</head>
<body>
	<form action="#" method="POST">
		Name :<input type="text" name="name" /><br /><br />
		Desc :<input type="text" name="descr" /><br /><br />
		<input type="submit">
	</form>
	
</body>
</html>
<?php }
?>