<?php
	$estados = array("AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE","PI","RJ","RN","RS","RO","RR","SC","SP","SE","TO","ac","al","ap","am","ba","ce","df","es","go","ma","mt","ms","mg","pa","pb","pr","pe","pi","rj","rn","rs","ro","rr","sc","sp","se","to");
    echo "<strong>Dados Pessoais</strong><br/>";
    if(isset($_POST["nome"])) {
    	echo "<strong>Nome: </strong>" . $_POST["nome"] . "<br/>";
    }
    else {
    	echo "[Nome inválido]<br/>";
    }
    
	
	
	if(!filter_var ( $_POST["email"], FILTER_VALIDATE_EMAIL) ){
		echo "<strong>Email: </strong>[Email incorreto!]";
		echo "<br/><a href='javascript:history.back()'>Voltar</a>";
		die("");
	}
	else{
		echo "<strong>Email: </strong>" . $_POST["email"] . "<br/>";
	}
	
	if(isset($_POST["sex"])) {
		echo "<strong>Sexo: </strong>" . $_POST["sex"] . "<br/>";
	}
	else {
		echo "[Sexo inválido]<br/>";
	}
	
	if(isset($_POST["estado_civil"]) || $_POST["estado_civil"] != "Selecione...") {	
		echo "<strong>Estado civil: </strong>" . $_POST["estado_civil"] . "<br/>";
		echo "<br/>";
	}
	else {
		echo "[Estado civil inválido]<br/>";
	}
	
	echo "<strong>Endereço</strong><br/>";
	if(isset($_POST["rua"])) {
    	echo "<strong>Rua: </strong>" . $_POST["rua"] . "<br/>";
    }
    else{
    	echo"[Rua inválida]<br/>";
    }
    
    if(isset($_POST["bairro"])) {
    	echo "<strong>Bairro: </strong>" . $_POST["bairro"] . "<br/>";
	}
	else{
		echo "[Bairro inválido]<br/>";
	}
	
	if(isset($_POST["cidade"])) {
		echo "<strong>Cidade: </strong>" . $_POST["cidade"] . "<br/>";
	}
	else {
		echo "[Cidade inválida]<br/>";
	}
	
	if (!in_array($_POST['estado'], $estados)){
		echo "<strong>Estado: </strong>[estado invalido!]";
		echo "<br/><a href='javascript:history.back()'>Voltar</a>";
		die("");
	}
	else{
		echo "<strong>Estado: </strong>" . $_POST["estado"] . "<br/>";
	}

	
	if(isset($_POST["cep"])) {
		echo "<strong>CEP:</strong>" . $_POST["cep"] . "<br/>";
		echo "<br/>";
	}
	else{
		echo "[CEP inválido]";
	}
	
	
	echo "<strong>Observações</strong><br/>";
	if(isset($_POST["obs"])) {
		echo $_POST["obs"] . "<br/>";
		echo "<br/>";
	}
?>
