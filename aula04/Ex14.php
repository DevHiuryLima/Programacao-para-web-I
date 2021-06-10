<?php
	$num = 8;
	$soma = 0;
	echo "O número é $num.<br/><br/>";
	for($i=1; $i<=$num; $i++){
		echo "$i<br/>";
		$soma +=$i;
	}
	echo "<br/>A soma dos números nesse intervalo é: $soma.";
	
?>