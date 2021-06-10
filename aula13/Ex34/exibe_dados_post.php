<?php

	//Fazendo conexão.
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";

	$conexao = mysqli_connect("$servidor", "$usuario", "$senha", "meubanco");



	//Obtendo os dados.
	$estados = array("AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT",
	"MS","MG","PA","PB","PR","PE","PI","RJ","RN","RS","RO","RR","SC","SP",
	"SE","TO","ac","al","ap","am","ba","ce","df","es","go","ma","mt","ms", 
	"mg","pa","pb","pr","pe","pi","rj","rn","rs","ro","rr","sc","sp","se","to");


    echo "<strong>Dados Pessoais</strong><br/>";
    if(isset($_POST["nome"])) {
    	echo "<strong>Nome: </strong>" . $_POST["nome"] . "<br/>";
    }
    else {
		echo "[Nome inválido]<br/>";
		echo "<br/><a href='javascript:history.back()'>Voltar</a>";
    }
    
	
	
	if(!filter_var ( $_POST["email"], FILTER_VALIDATE_EMAIL) ){
		echo "<strong>Email: </strong>[Email incorreto!]";
		echo "<br/><a href='javascript:history.back()'>Voltar</a>";
		die("");
	}
	else{
		echo "<strong>Email: </strong>" . $_POST["email"] . "<br/>";
	}
	
	if(isset($_POST["sexo"])) {
		echo "<strong>Sexo: </strong>" . $_POST["sexo"] . "<br/>";
	}
	else {
		echo "[Sexo inválido]<br/>";
		echo "<br/><a href='javascript:history.back()'>Voltar</a>";
	}
	
	echo "<strong>Endereço</strong><br/>";
	if(isset($_POST["rua"])) {
    	echo "<strong>Rua: </strong>" . $_POST["rua"] . "<br/>";
    }
    else{
		echo"[Rua inválida]<br/>";
		echo "<br/><a href='javascript:history.back()'>Voltar</a>";
    }
    
    if(isset($_POST["bairro"])) {
    	echo "<strong>Bairro: </strong>" . $_POST["bairro"] . "<br/>";
	}
	else{
		echo "[Bairro inválido]<br/>";
		echo "<br/><a href='javascript:history.back()'>Voltar</a>";
	}
	
	if(isset($_POST["cidade"])) {
		echo "<strong>Cidade: </strong>" . $_POST["cidade"] . "<br/>";
	}
	else {
		echo "[Cidade inválida]<br/>";
		echo "<br/><a href='javascript:history.back()'>Voltar</a>";
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
		echo "<br/><a href='javascript:history.back()'>Voltar</a>";
	}
	
	
	echo "<strong>Observações</strong><br/>";
	if(isset($_POST["obs"])) {
		echo $_POST["obs"] . "<br/>";
		echo "<br/>";
	}


	//Inserindo no baco.
	$nome  = $_POST['nome'];
	$email  = $_POST['email'];
	$sexo  = $_POST['sexo'];
	$rua  = $_POST['rua'];
	$bairro  = $_POST['bairro'];
	$cidade  = $_POST['cidade'];
	$estado  = $_POST['estado'];
	$cep  = $_POST['cep'];
	$obs = $_POST['obs'];

	$sql = "INSERT INTO `meubanco`.`cliente` (`nome`, `email`, `sexo`, `rua`, `bairro`, `cidade`, `estado`, `cep`, `observacoes`)
	VALUES ('$nome', '$email', '$sexo', '$rua', '$bairro',  '$cidade', '$estado', '$cep', '$obs')";

	$rs = mysqli_query($conexao, $sql);

	if($rs == ''){
		echo "<script language='javaScript'>window.alert ('ERRO! Usuario não cadastrado.');</script>";
		echo "<br/><a href='javascript:history.back()'>Voltar</a>";
    }
    else{
		echo "<script language='javaScript'>window.alert ('Cadastrado com sucesso!');</script>";
		echo "<br/><a href='javascript:history.back()'>Voltar</a>";
    }
?>
