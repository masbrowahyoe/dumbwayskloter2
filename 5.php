<?php 
Function acak(){
$an = "abcdefghijklmnopqrstuvwxyz0123456789";
$su = strlen($an) - 1;
return substr($an, rand(0, $su), 1);
}
for ($a=0; $a < 4 ; $a++) {
	for ($i = 0; $i < 4; $i++)
	echo acak();
	echo "-";
	for ($i = 0; $i < 4; $i++)
	echo acak();
	echo "-";
	for ($i = 0; $i < 4; $i++)
	echo acak();
	echo "-";
	for ($i = 0; $i < 4; $i++)
	echo acak();
	echo "<br>";
}