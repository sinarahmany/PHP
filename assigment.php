<?php $var = 'PHP Tutorial' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $var; ?></title>
</head>
<body>
	//1.
	<?php
		$MyInfo = ["Sina","Rahmany","12/May/1999","North Vancouver","CA"];
	?>
	<p><?php echo $MyInfo[0] ; ?></p>
	//2.
	<?php
		$cylinderArr=array(
			"Radius" =>[4],
			"Height" =>[9]
			);
		echo "Area = ".(2 * 3.14 * $cylinderArr["Radius"][0] * $cylinderArr["Radius"][0] + 2 * 3.14 * $cylinderArr["Radius"][0] * $cylinderArr["Height"][0])."<br>";// 
		echo "Volume = ".(3.14 * $cylinderArr["Radius"][0] * $cylinderArr["Radius"][0] * $cylinderArr["Height"][0])."<br>";
	?>

	//3.
	<?php
	phpinfo();
	?>

	//4.
	<?php
	$var = "PHP Tutorial";
	?>
	<h3><?php echo $var;  ?></h3>

	//5.
	<?php
	$a = 15;
	$b = 27;
	// Swap Logic
	echo "\nThe number before swapping is:\n";
	echo "Number a =".$a." and b=".$b;
	$temp = $a;
	$a = $b;
	$b = $temp;
 
	echo "\nThe number after swapping is: \n";
	echo "Number a =".$a." and b=".$b."\n";
	?>
	//6.
	<?php
	//whether ip is from share internet
	if (!empty($_SERVER['HTTP_CLIENT_IP']))   
	  {
	    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
	  }
	//whether ip is from proxy
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
	  {
	    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
	  }
	//whether ip is from remote address
	else
 	 {
 	   $ip_address = $_SERVER['REMOTE_ADDR'];
 	 }
	echo $ip_address;
	?>

	//7.
	<?php
		$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[	REQUEST_URI]";
 		 echo $full_url."\n";
	?>

	//8.
	<?php
		echo 'Current script owner: ' . get_current_user()."\n";
	?>

	//9.
	<?php
	// getenv() gets the value of an environment variable
	$rd = getenv('DOCUMENT_ROOT');
	echo $rd."\n";
	?>
	
	//10.
	<?php
 		echo php_uname()."\n";
		echo PHP_OS."\n";
		if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
			echo 'This is a server using Windows!';
		} else {
			echo 'This is a server not using Windows!'."\n";
		}
	?>

	//11.
	<?php
		echo "Your browser is :" . $_SERVER ['HTTP_USER_AGENT'];
	?>

	
</body>
</html>