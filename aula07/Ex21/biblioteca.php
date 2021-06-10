<?php
	
	//Função 1
	function parImpar ($valor){
		if($valor%2==0){
			return "Este numero é par.<br/>";
		}
		else{
			return "Este numero é impar.<br/>";
		}
	}
	
	//Função 2
		function maiorMenor($num, $num2){
		if($num <= $num2){
			echo "Este número é maior $num2.<br/>";
		}
		else{
			echo "Este número é maior $num.<br/>";
		}
	}
	
	//Função 3
	function impostoRenda ($salario){
		if ($salario <= 1787.77){
			echo "isento.";
		}
		else if ($salario >1787.77 && $salario <=2679.29){
			$imposto = ( ($salario * 0.075) - 134.08);
			echo "O valor do imposto de renda é $imposto.<br/>";
		}
		else if ($salario >2679.29 && $salario <=3572.43){
			$imposto = ( ($salario * 0.15) - 335.03);
			echo "O valor do imposto de renda é $imposto.<br/>";
		}
		else if ($salario >3572.43 && $salario <=4463.81){
			$imposto = ( ($salario * 0.225) - 602.96);
			echo "O valor do imposto de renda é $imposto.<br/>";
		}
		else {
			$imposto = ( ($salario * 0.275) - 826.15);
			echo "O valor do imposto de renda é $imposto.<br/>";
		}

	}


?>