<?php
	//28

$matriz = array();
$maior=-100;
	for($i=0; $i<5; $i++){
		for($j=0; $j<5; $j++){
			$matriz[$i][$j] = rand(0, 9);
		}
	}
	
	foreach($matriz as $indice => $valor){
		foreach($valor as $dados){
			echo "[$dados] ";
			if($dados>=$maior){
				$maior=$dados;
			}
		}
		echo "<br/>";
		
	}
	
	echo "<br/>O numero maior é: " . $maior;	
?>