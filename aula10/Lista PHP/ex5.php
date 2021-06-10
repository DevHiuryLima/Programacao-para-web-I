<?php
//5

$vetor = array();
$cont=0;
for($i=0; $i<10; $i++){
	$vetor[$i]=rand(0, 200);
}

echo "[";
foreach($vetor as $indice => $valor){
	if($valor>99 && $valor<201){
		echo $valor . ", ";
		$cont++;
	}
	
}
echo "]<br/>";

echo "<br/>A quantidade de números entre 100 e 200 é: $cont";

?>
