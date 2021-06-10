<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Par ou impar</title>
</head>
<body>
<?php
	function parImpar ($valor){
		if($valor%2==0){
			return "<p>Este numero é par.</p>";
		}
		else{
			return "<p>Este numero é impar.</p>";
		}
	}
	echo  parImpar(15);
	echo  parImpar(18);
	echo  parImpar(3);
?>
</body>
</html>