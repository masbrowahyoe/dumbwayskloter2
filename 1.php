<?php
function pencocokan($datakey,$word){
	for ($i=0; $i <count($datakey) ; $i++) { 
		echo $datakey[$i] . " => ";
		$posisiku=strpos($word,$datakey[$i]);
		if ( $posisiku !== FALSE){
	  		echo "True";
		}else {
	  		echo "False";
		}
		echo "<br>";
	}
	
}
echo pencocokan(array('dumb','ways','the','best','asiap'),"asiapdumbway");
?>