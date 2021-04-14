<?php 



function greet($username,$phone = 1915461126){
	$name = $username.'|'.$phone.'<br>';
}

greet('hello');
greet('Greetings');
$res = greet('Shahinul Islam',1915);
echo $res;

 ?>