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






