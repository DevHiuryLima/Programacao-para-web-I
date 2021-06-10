<?php
	//30
	$vetor = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
	$valor = 4;
	$existe = false;
	foreach($vetor as $chave){
		if($valor==$chave){
			$existe = true;
		}
	}
	
	if($existe){
		echo "O $valor existe dentro do vetor.";
	}
	else{
		echo "[O valor não existe]";
	}
	
?>