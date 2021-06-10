<!DOCTYPE html>

<html>
	<head>
		<title>Envie um email</title>
		<meta charset="utf-8"/>
		<style type="text/css" media="all">
			body {
				font-size: 10pt;
				font-family: Arial;
				background: white;
			}
			table {
				width: 500px;
			}
		</style>
</head>
<body>
	<table align="center">
		<tr>
			<td>
				<form action="envia_dados_post.php"  method="POST">
					<fieldset>
					<legend><strong>Envie um email</strong></legend>
					Nome:
						<input type="text" name="nome" size="50" required/><br/>
					<br/>
					Assunto:
						<input type="text" name="assunto" size="50" required/><br/>
					<br>
					E-mail de Destino:
						<input type="text" name="emailD" size="30" required/><br/>
					<br/>
					Mensagen:
					<br/>
					<textarea rows="10" cols="50" name="msg"></textarea>

					<p align="center">
						<input type="submit" name="Enviarr" value="Enviar">
						<input type="reset" name="limpar" value="Limpar">
					</p>
				</form>
			</td>
		</tr>
	</table>
</body>
</html>
    
