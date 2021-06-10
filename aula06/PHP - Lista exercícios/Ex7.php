<?php
	function positivoNegativo ($n){

		if($n>-1){
			echo"$n é um número positivo.<br/>";
		}
		else {
			echo "$n é um número negativo.<br/>";
		}

	}
	
	echo positivoNegativo (6);
	echo positivoNegativo (-2);
	echo positivoNegativo (5);
?>
