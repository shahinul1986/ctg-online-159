<?php 

/* question-6 take 3 names of your friends, find the shortest name , if the name's length is odd, print the name with "you are different", if even print name with "you are general".*/

$name1 = "Karim";
$name2 = "Dilshan";
$name3 = "Abdullah";

$result = "";

if(strlen($name1) <strlen($name2) && strlen($name1) <strlen($name3)){
	$result= $name1;
}elseif (strlen($name2) <strlen($name1) && strlen($name2) <strlen($name3)) {
	$result = $name2;
}else{
	$result = $name3;
}

if(strlen($result) % 2 == 0){
	echo $result."You are General";
}else{
	echo $result."You are different";
}

 ?>