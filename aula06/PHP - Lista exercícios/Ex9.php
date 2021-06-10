<?php
	function km_para_mi ($km) {
		$mi = $km/1609;
		echo "$km quilômetros é equivalente a $mi milhas.<br/>";
	}
	
	echo km_para_mi (100);
	echo km_para_mi (50);
	echo km_para_mi (90);
?>