<?php
	function saudacao ($nome, $hora, $minuto, $segundo){
		
		if($hora>=0 && $hora<=5){
			echo "Boa Madrugada, $nome.<br/>";
		}
		else if ($hora>=6 && $hora<=11){
			echo "Bom dia, $nome.<br/>";
		}
		else if ($hora>=12 && $hora<=17){
			echo "Boa tarde, $nome.<br/>";
		}
		else if ($hora>=18 && $hora<=23){
			echo "Boa noite, $nome.<br/>";
		}
		else{
			echo "[ Hora invalida! ]";
		}
		
	}
	
	echo saudacao ("Justiniano", 01, 30, 00);
	echo saudacao ("Elvis", 11, 30, 00);
	echo saudacao ("Dolores", 15, 30, 00);
?>
