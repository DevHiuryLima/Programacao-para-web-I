<?php
	$vetor = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

	foreach($vetor as $valor){
		if ($valor%2==0){
			echo "$valor: Par<br/>";
		}
		else {
			echo "$valor: Impar<br/>";
		}
	}
?>