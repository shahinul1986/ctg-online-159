<?php 

function greet($count)
{

	$count--;
	echo "hello<br>";

	if($count !=0){
		greet($count);
	}
}

greet(10);

 ?>