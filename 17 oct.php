<?php  

//write a code for a method which multiplies a value by 321,without using loops,the multiply operator,or divide operator. 
function multiply($y, $z) 
{   
    if($y == 0) 
    return 0; 

    if($y > 0 ) 
    return ($z + multiply( $y-1, $z)); 

    if($y < 0 ) 
    return -multiply(-$y ,$z); 
} 

echo multiply(-10,321);


echo "<br>*************************************<br>";


$a=-4;
$b=-1;

$c=4;
$d=1;
//abs() if a value is - it turns it to + 
if(abs($a-$b) > abs($c-$d)){
	echo "$a-$b is biggger";
}elseif (abs($a-$b) < abs($c-$d)) {
	echo "$c-$d is biggger";
}elseif (abs($a-$b) == abs($c-$d)) {
	echo "they are equal";
}

echo "<br>*************************************<br>";
//generate a float number like 0.xx
echo mt_rand(1,100)/100;


 


