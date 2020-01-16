<?php
function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyz";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i <= 9; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
for(int $i==0;$i<=50;$i++){
	echo randomPassword();
	$id=rand(0000,9999);
	echo $id;
	echo "<br>";
} 


































?>