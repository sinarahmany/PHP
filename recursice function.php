<?php
	
function multiply($count){
	return $count > 0 ? (321 + multiply($count-1)) : ($count < 0 ? multiply($count+1)-321 : 0) ; 
}
echo multiply(3) . "<br />";
echo multiply(-1) . "<br />";
echo multiply(0) . "<br />";

 ?>

