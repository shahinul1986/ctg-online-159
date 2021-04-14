<?php 

/*Make an array of numbers 1-10. Find the odd numbers from the list using loop. */

$arr = array(1,2,3,4,5,6,7,8,9,10);

for($i=0;$i<10; $i++){

	if($arr[$i] % 2 == 1){
		echo $arr[$i]."<br>";
	}
}


 ?>