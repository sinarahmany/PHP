<?php 
	
	// Main PDO Functions, Prepared by Mert Tan

	/******************
	*	
	* Main PDO Connection
	*
	*******************/
	$servername = "localhost";
	$username = "root";
	$password = "";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=21nov", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully";
	}
	catch(PDOException $e)
	{
		echo "Connection failed: " . $e->getMessage();
	}
	


	$sql = "INSERT INTO 21nov (name, surname, email) VALUES (?,?,?)";
	$data = $conn->prepare($sql);
	$data->execute([$name, $surname, $email]);
	



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>hey hi hello bye </title>
	<style>input {
	border: 2px solid purple };</style>
</head>
<body>
	<form action="#" method="POST">
		Name :<input type="text" name="name" /><br /><br />
		Surename :<input type="text" name="surename" /><br /><br />
		E-mail :<input type="text" name="email" /><br /><br />
		Password :<input type="text" name="password" /><br /><br />
		Password-Re :<input type="text" name="password-re" /><br /><br />
		<input type="submit">
	</form>
	
</body>
</html>
<?php }
?>