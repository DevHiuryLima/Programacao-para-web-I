<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calcula imposto</title>
</head>
<body>
<?php
	function impostoRenda ($salario){
		if ($salario <= 1787.77){
			echo "isento.";
		}
		else if ($salario >1787.77 && $salario <=2679.29){
			$imposto = ( ($salario * 0.075) - 134.08);
			echo "<p>O valor do imposto de renda é $imposto.</p>";
		}
		else if ($salario >2679.29 && $salario <=3572.43){
			$imposto = ( ($salario * 0.15) - 335.03);
			echo "<p>O valor do imposto de renda é $imposto.</p>";
		}
		else if ($salario >3572.43 && $salario <=4463.81){
			$imposto = ( ($salario * 0.225) - 602.96);
			echo "<p>O valor do imposto de renda é $imposto.</p>";
		}
		else {
			$imposto = ( ($salario * 0.275) - 826.15);
			echo "<p>O valor do imposto de renda é $imposto.</p>";
		}

	}

	echo impostoRenda (2000);
	echo impostoRenda (3000);
	echo impostoRenda (4000);
?>
</body>
</html>