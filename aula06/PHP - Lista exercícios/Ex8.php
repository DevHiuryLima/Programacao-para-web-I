<?php
	function tabuada_multiplicacao ($num){

		for( $i=1; $i<=10; $i++){
			echo "$num x $i = " . $num * $i . "<br/>";
		}
	echo "<br/>";
	}
	
	echo tabuada_multiplicacao (1);
	echo tabuada_multiplicacao (2);
	echo tabuada_multiplicacao (3);
?>
