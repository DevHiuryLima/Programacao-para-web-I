<?php
	//25
	$vetor = array();
	for($i=1; $i<100; $i++){
		$vetor[$i] = rand(1, 1000);
	}
	
	foreach($vetor as $valor){
		echo $valor . ", ";
	}
?>