<?php
//just open do not close it 

	$a = 5;
	//both used for printing 
	//echo $a;
	//print($a);
	//*****************
	$b ="PHP";
	var_dump($b);
	echo "</br>";
	//******************
	$name = "Sina";
	$surename = "Rahmany";
	echo "</br>";
	echo $name . "" . $surename;
	echo "</br>";
	//or
	echo "{$name} {$surename}";
	// for comment cntl + ?(the key on left side of right shift)  
	//or
	echo "</br>";
	$tr = trim($name);
	$tr2 = trim($surename);
	print($tr);
	print($tr2);
	//************************
	echo "</br>";
	$bla= "Soheil said \"the PHP class is the best!\"";
	echo $bla;
	echo "</br>";
	//************************
	$myArray = [1,2,3];
	//print_r($myArray) ;
	var_dump($myArray);
	echo "</br>";
	//************************
	$myclassroom = ["Sina","Taylor","Jack","Ava"];
	var_dump($myclassroom);
