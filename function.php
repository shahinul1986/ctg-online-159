<?php 

/*Pass first name and last name with parameter and print out the names together in one string.*/


function greet($fistname,$lastname){
	$name = $fistname.' '.$lastname.'<br>';
	echo $name;
}

greet('Md Shahinul','Islam');

?>