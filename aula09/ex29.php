<?php
	//29
	$vetor = array();
	$vetor2 = array();
	for($i=0; $i<50; $i++){
		$vetor[$i] = rand(1, 1000);
		$vetor2[$i] = rand(1, 1000);
	}
	
			//Mescla o vetor com o vetor2.
	$vetor3 = array_merge($vetor, $vetor2);
	
		//Ordena o vetor3.
	sort($vetor3);
	
	
	foreach($vetor as $valor){
		echo $valor . ", ";
	}

?>