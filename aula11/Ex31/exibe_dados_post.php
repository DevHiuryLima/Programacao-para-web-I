<?php
    echo "<strong>Dados Pessoais</strong><br/>";
    if(isset($_POST["nome"])) {
    	echo "<strong>Nome:</strong>" . $_POST["nome"] . "<br/>";
    }
    else {
    	echo "[Nome inválido]<br/>";
    }
    
    if(isset($_POST["email"])) {
    	echo "<strong>E-mail:</strong>" . $_POST["email"] . "<br/>";
	}
	else {
		echo "[email inválido]<br/>";
	}
	
	if(isset($_POST["sex"])) {
		echo "<strong>Sexo:</strong>" . $_POST["sex"] . "<br/>";
	}
	else {
		echo "[Sexo inválido]<br/>";
	}
	
	if(isset($_POST["estado_civil"]) || $_POST["estado_civil"] != "Selecione...") {	
		echo "<strong>Estado civil:</strong>" . $_POST["estado_civil"] . "<br/>";
		echo "<br/>";
	}
	else {
		echo "[Estado civil inválido]<br/>";
	}
	
	
	echo "<strong>Endereço</strong><br/>";
	
	if(isset($_POST["rua"])) {
    	echo "<strong>Rua:</strong>" . $_POST["rua"] . "<br/>";
    }
    else{
    	echo"[Rua inválida]<br/>";
    }
    
    if(isset($_POST["bairro"])) {
    	echo "<strong>Bairro:</strong>" . $_POST["bairro"] . "<br/>";
	}
	else{
		echo "[Bairro inválido]<br/>";
	}
	
	if(isset($_POST["cidade"])) {
		echo "<strong>Cidade:</strong>" . $_POST["cidade"] . "<br/>";
	}
	else {
		echo "[Cidade inválida]<br/>";
	}
	
	if(isset($_POST["estado"])) {
		echo "<strong>Estado:</strong>" . $_POST["estado"] . "<br/>";
	}
	else{
		echo "[Estado invalido]<br/>";
	}
	
	if(isset($_POST["cep"])) {
		echo "<strong>CEP:</strong>" . $_POST["cep"] . "<br/>";
		echo "<br/>";
	}
	else{
		echo "[CEP inválido]";
	}
	
	echo "<strong>Endereço</strong><br/>";
	echo $_POST["obs"];
?>
