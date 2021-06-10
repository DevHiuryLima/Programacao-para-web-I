<?php
	function km_para_mi ($mi) {
		$km = $mi*1609;
		echo "$mi milhas é equivalente a $km quilômetros.<br/>";
	}
	
	echo km_para_mi (50);
	echo km_para_mi (90);
	echo km_para_mi (100);
?>