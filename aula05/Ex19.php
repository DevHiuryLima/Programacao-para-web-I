<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Verifica maior</title>
</head>
<body>
<?php
	
	function maiorMenor($num, $num2){
		if($num <= $num2){
			echo "<p>Este número é maior $num2.</p>";
		}
		else{
			echo "<p>Este número é maior $num.</p>";
		}
	}
	
	echo maiorMenor (8, 7);
	echo maiorMenor (16, 1);
	echo maiorMenor (8, 7);
?>
</body>
</html>
