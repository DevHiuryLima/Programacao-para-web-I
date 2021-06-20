<?php
	

	function parImpar ($valor){
		if($valor%2==0){
			return "Este numero é par.<br/>";
		}
		else{
			return "Este numero é impar.<br/>";
		}
	}
	

	function maiorMenor($num, $num2){
		if($num <= $num2){
			echo "Este número é maior $num2.<br/>";
		}
		else{
			echo "Este número é maior $num.<br/>";
		}
	}
	
	
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
	
	
	function verifica_data($dia, $mes, $ano){
		if(checkdate( $dia, $mes,  $ano)){
			echo "Data válida<br/>";
		}else{
			echo "Data inválida<br/>";
		}
	}
	
	
	
	
	function data_extenso_timestamp($timestamp){
		$dia = date('d', $timestamp);
		$mes = date('m', $timestamp);
		$ano = date('Y', $timestamp);
		switch ($mes){
			case 1:
				$mes_extenso = "Janeiro";
				break;
			case 2:
				$mes_extenso = "Fevereiro";
				break;
			case 3:
				$mes_extenso = "Março";
				break;
			case 4:
				$mes_extenso = "Abril";
				break;
			case 5:
				$mes_extenso = "Maio";
				break;
			case 6:
				$mes_extenso = "Junho";
				break;
			case 7:
				$mes_extenso = "Julho";
				break;
			case 8:
				$mes_extenso = "Agosto";
				break;
			case 9:
				$mes_extenso = "Setembro";
				break;
			case 10:
				$mes_extenso = "Outubro";
				break;
			case 11:
				$mes_extenso = "Novembro";
				break;
			case 12:
				$mes_extenso = "Dezembro";
				break;
			default: 
				echo "mes invalido.";
			break;
		}
		echo "$dia de $mes_extenso de $ano";
	}
	
	
	function data_extenso($dia, $mes, $ano){
		if(!checkdate($dia, $mes,  $ano))
			echo "Data inválida<br/>";
		else {		
			$data = mktime(0, 0, 0, $mes, $dia, $ano);

			$dia = date('d', $data);
			$mes = date('m', $data);
			$ano = date('Y', $data);

			echo $dia . "/" . $mes . "/" . $ano . "<br>";

			//Ou apenas utilizo a função anterior.
			// data_extenso_timestamp($data);
		}
	}
?> 
