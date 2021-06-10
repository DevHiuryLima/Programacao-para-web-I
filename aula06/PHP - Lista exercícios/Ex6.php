<?php
	function saudacao_sexo ($nome, $sexo){

		if($sexo == "Masculino" or $sexo == "masculino"){
			echo "Seja bem-vindo, $nome.<br/>";
		}
		else if ($sexo == "Feminino" or $sexo == "feminino"){
			echo "Seja bem-vinda, $nome.<br/>";
		}
		else{
			echo "[  Sexo invalido!  ]";
		}

	}
	
	echo saudacao_sexo ("Justiniano", "Masculino");
	echo saudacao_sexo ("Dolores", "feminino");
	echo saudacao_sexo ("Elvis", "masculino");
?>
