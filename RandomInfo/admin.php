<?php
$SDT = file('SDT.txt');
$o1 = rand(0,32);
$o2 = rand(00000000,99999999);

$id = rand(300000000000,999999999999);

$Ho = file('Ho.txt');
$a = rand(0,19);

$Dem = file('Dem.txt');
$b = rand(0,39);

$Ten = file('Ten.txt');
$c = rand(0,99);

$HuyenTinh = file('HuyenTinh707.txt');
$d = rand(0,706);

$Xa = file('Xa303.txt');
$f = rand(0,302);

$Ngay = rand(01,30);
if ($Ngay<10) {
	$Ngay = "0$Ngay";
}

$Thang = rand(01,12);
if ($Thang<10) {
	$Thang = "0$Thang";
}

$Nam = rand(1970,2000);

$SoNha = rand(10,1000);

function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!@#$%&!@#$%&";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 12; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

$pw = randomPassword();

$chars = "abcdefghijklmnopqrstuvwxyz0123456789";
$size = strlen( $chars );
for( $i = 0; $i < 10; $i++ ) {
$str .= $chars[ rand( 0, $size - 1 ) ];
 }

echo "$Ho[$a] $Dem[$b] $Ten[$c]<br><br>$SoNha Xã $Xa[$f] Huyện $HuyenTinh[$d]<br><br>$Thang/$Ngay/$Nam<br><br>84$SDT[$o1]$o2<br><br>$id<br><br>$pw<br><br>$str@mailforspam.com<br><br>";

	$ipaddress = '';
	if (getenv('HTTP_CLIENT_IP')) {
		$ipaddress = getenv('HTTP_CLIENT_IP');
	} else if (getenv('HTTP_X_FORWARDED_FOR')) {
		$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
	} else if (getenv('HTTP_X_FORWARDED')) {
		$ipaddress = getenv('HTTP_X_FORWARDED');
	} else if (getenv('HTTP_FORWARDED_FOR')) {
		$ipaddress = getenv('HTTP_FORWARDED_FOR');
	} else if (getenv('HTTP_FORWARDED')) {
		$ipaddress = getenv('HTTP_FORWARDED');
	} else if (getenv('REMOTE_ADDR')) {
		$ipaddress = getenv('REMOTE_ADDR');
	} else {

		$ipaddress = 'UNKNOWN';
	}

	echo $ipaddress;
	echo "<br>";
	$format = "%d-%B-%Y";
	$timestamp = time();
	echo $strTime = strftime($format, $timestamp );
	
echo "<br><br>P@ssword64<br>Tintacnhi@@123<br>Nolove@@123";

?>