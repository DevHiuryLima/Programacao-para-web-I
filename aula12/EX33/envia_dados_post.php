<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$nome = $_POST['nome'];
		$assunto = $_POST['assunto'];
		$destinatario = $_POST['emailD'];
		$mensagem = $_POST['menssagem'];
		
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		//cabeçalhos adicionais
		$headers .= 'From: $nome <seunome@seusite.com.br>' ;
		
		mail($destinatario, $assunto, $mensagem, $headers);
		
		echo "<button onclick="history.back()">Voltar</button>";
	?>
</body>
</html>
