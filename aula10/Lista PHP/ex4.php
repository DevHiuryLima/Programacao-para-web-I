<?php
//4

$vetor = array();
for($i=0; $i<20; $i++){
	$vetor[$i]=rand(0, 20);
}

echo "[";
foreach($vetor as $indice => $valor){
	if($valor%2!=0){
		echo $valor . ", ";
	}
	
}
echo "]";

?>
