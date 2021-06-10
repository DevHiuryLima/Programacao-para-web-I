<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro de Clientes</title>
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
					<form action="exibe_dados_get.php"  method="GET">
						<fieldset>
                        <legend><strong>Dados Pessoais</strong></legend>
							Nome:
								<input type="text" name="nome" size="50">
							<br>
							E-mail:
								<input type="text" name="email" size="30">
							<br>
							Sexo:
								<label for="sex_masc"><input type="radio" name="sex" value="masculino" id="sex_masc">Masculino</label>
								<label for="sex_fem"><input type="radio" name="sex" value="feminino" id="sex_fem">Feminino</label>
							<br>
							Estado civil:
								<select name="estado_civil">
									<option value="" selected="selected">Selecione...</option>
									<option value="casado">Casado</option>
									<option value="solteiro">Solteiro</option>
									<option value="divorciado">Divorciado</option>
								</select>

						</fieldset>
						<br>
                        
						<fieldset>
                        <legend><strong>Endereço</strong></legend>
							Rua:
								<input type="text" name="rua" size="50">
							<br>
							Bairro:
								<input type="text" name="bairro" size="20">
							<br>
							Cidade:
								<input type="text" name="cidade" size="30">
							Estado:
								<input type="text" name="estado" size="2">
							<br>
							CEP:
								<input type="text" name="cep" size="10">
						</fieldset>
						<br>

						<fieldset>
                        <legend><strong>Observações</strong></legend>
							<textarea rows="10" cols="50" name="obs"></textarea>
						</fieldset>

						<p align="center">
							<input type="submit" name="salvar" value="Salvar">
							<input type="reset" name="limpar" value="Limpar">
						</p>
					</form>
				</td>
			</tr>
		</table>
	</body>
</html>
