<?php
    echo "<strong>Dados Pessoais</strong><br/>";
    if(isset($_GET["nome"])) {
    	echo "<strong>Nome:</strong>" . $_GET["nome"] . "<br/>";
    }
    else {
    	echo "[Nome inválido]<br/>";
    }
    
    if(isset($_GET["email"])) {
    	echo "<strong>E-mail:</strong>" . $_GET["email"] . "<br/>";
	}
	else {
		echo "[email inválido]<br/>";
	}
	
	if(isset($_GET["sex"])) {
		echo "<strong>Sexo:</strong>" . $_GET["sex"] . "<br/>";
	}
	else {
		echo "[Sexo inválido]<br/>";
	}
	
	if(isset($_GET["estado_civil"]) || $_GET["estado_civil"] == "Selecione...") {	
		echo "<strong>Estado civil:</strong>" . $_GET["estado_civil"] . "<br/>";
		echo "<br/>";
	}
	else {
		echo "[Estado civil inválido]<br/>";
	}
	
	
	echo "<strong>Endereço</strong><br/>";
	
	if(isset($_GET["rua"])) {
    	echo "<strong>Rua:</strong>" . $_GET["rua"] . "<br/>";
    }
    else{
    	echo"[Rua inválida]<br/>";
    }
    
    if(isset($_GET["bairro"])) {
    	echo "<strong>Bairro:</strong>" . $_GET["bairro"] . "<br/>";
	}
	else{
		echo "[Bairro inválido]<br/>";
	}
	
	if(isset($_GET["cidade"])) {
		echo "<strong>Cidade:</strong>" . $_GET["cidade"] . "<br/>";
	}
	else {
		echo "[Cidade inválida]<br/>";
	}
	
	if(isset($_GET["estado"])) {
		echo "<strong>Estado:</strong>" . $_GET["estado"] . "<br/>";
	}
	else{
		echo "[Estado invalido]<br/>";
	}
	
	if(isset($_GET["cep"])) {
		echo "<strong>CEP:</strong>" . $_GET["cep"] . "<br/>";
		echo "<br/>";
	}
	else{
		echo "[CEP inválido]";
	}
	
	echo "<strong>Endereço</strong><br/>";
	echo $_GET ["obs"];
?>
