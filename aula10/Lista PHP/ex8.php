<?php

$vetor = array();
$vetor2= array();
$vetor3 = array();

for($i=0; $i<10; $i++){
	$vetor[$i]=rand(0, 100);
	$vetor2[$i]=rand(0, 100);
}

for($i=0; $i<10; $i++){
	$vetor3[] = $vetor[$i];
	$vetor3[] = $vetor2[$i];
}

print_r($vetor);
echo "<br/><br/>";
print_r($vetor2);
echo "<br/><br/>";
print_r($vetor3);


?>
