<?php

	function printname($name){
		return $name;
	}
	$b="it still works!";
	echo printname($b);

	echo "<br>";
	function sum($a,$b){
		return $a+$b;
	}
	echo sum(99999,1);
	echo "<br>";
	function take3($name,$mName,$sName){
		return $name. " " .$mName. " " . $sName ;
	}
	echo take3("sina","r","rah");
	
	echo "<br>***************************************<br>";

	function test(){
		$numargs = func_num_args();
     	echo "Number of arguments: $numargs\n";
     	if ($numargs >= 2) {
        	echo "Second argument is: " . func_get_arg(1) . "\n";
     }
	}
	test(1,2,3,4);

	echo "<br>***************************************<br>";
	global $a;

	$a = 1;
	function test2(){
		$a = 2;
		echo $GLOBALS['a'] . "local a: " .$a ;
	} 
	test2();
	echo "<br>***************************************<br>";

	//for defning constant or non changable values should be in cap letter
	define("NAME", "mert");
	$name = NAME;
	echo $name;
	

	echo "<br>***************************************<br>";
	//eve if we put number in a it is still true
	//if we want to put 2 var in if condition we have say like  $a==true not like $a  
	$a = true;
	if ($a==true) {
		echo "A is true";
	}else{	
	echo "A is false";
	}
	echo "<br>***************************************<br>";
	switch ($a) {
		case true:
			echo "TRUE!!!!!!";
			break;
		case true:
			echo "FALSE!!!!!!!!";
			break;
		
		default:
			# code...
			break;
	}
	echo "<br>***************************************<br>";

	if($i ==10){

	}else{
		i++;
		echo i;
	}



	
?>