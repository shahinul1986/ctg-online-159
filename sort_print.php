<?php 

/*Suppose you want to arrange a party at your house. You have 10 friends on your list. (Take random 10 names in the array). Due to money shortage, you want to invite only those friends who's name has not more than 5 Characters. So write a program to sort out those friends' names from the array and print them using loop*/

$arr = array('Shahin', 'Helal', 'Shoan','Raju', 'siam', 'Shams', 'Shuva', 'Arafac Mahmud','Alif mahmud','Rafique');
for($i = 0; $i<9; $i++){

	if(strlen($arr[$i]) <= 4){
		echo $arr[$i]. "<br>";
	}
}

 ?>