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
		$conn = new PDO("mysql:host=$servername;dbname=dbc", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully";
	}
	catch(PDOException $e)
	{
		echo "Connection failed: " . $e->getMessage();
	}
	echo "<br />";
	$data = $conn->prepare("SELECT * FROM order_details");
	$data->execute();

	/******************
	*	
	* Main PDO Query Types
	*
	*******************/

	/********** prepare() **********/

	$data = $conn->prepare("SELECT * FROM users");
	$data->execute();

	// query
	$data = $conn->query('SELECT * from FOO')

	//One row from user input using prepare

	$user_id = $_POST["user_id"];
	$sql= "SELECT * FROM employees WHERE id = :employeeId";
	$data = $conn->prepare($sql);
	$data->bindParam(':employeeId', $user_id, PDO::PARAM_INT);
	$data->execute();
	$row =$data->fetchObject();
	//output echo $row->name;



	// Multi Row get from user
	$user = "%".$_GET['name']."%";
	$sql= "SELECT * FROM employees WHERE name LIKE :name";
	$data = $conn->prepare($sql);
	$data->bindParam(':name', $user, PDO::PARAM_STR);
	$data->execute();


	$sql = "SELECT * FROM users";
	$stmt = $conn->query($sql);
	while($row = $stmt->fetchObject()){
		echo $row->name;
	}



	/******************
	*	
	* Main PDO Insert Types
	*
	*******************/

	$sql = "INSERT INTO users (name, surname, gender) VALUES (?,?,?)";
	$data = $conn->prepare($sql);
	$data->execute([$name, $surname, $gender]);
	



 ?>