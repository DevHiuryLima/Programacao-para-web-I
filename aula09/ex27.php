<?php
	//27
$clientes = array();

$clientes['João']['CPF'] = "0123456-00";
$clientes['João']['RG'] = "11111";
$clientes['João']['Telefone'] = "999999999";

$clientes['Creuza']['CPF'] = "7891011-00";
$clientes['Creuza']['RG'] = "22222";
$clientes['Creuza']['Telefone'] = "999999999";

$clientes['Juscelino']['CPF'] = "1213141-00";
$clientes['Juscelino']['RG'] = "33333";
$clientes['Juscelino']['Telefone'] = "999999999";

$clientes['Dolores']['CPF'] = "5161718-00";
$clientes['Dolores']['RG'] = "44444";
$clientes['Dolores']['Telefone'] = "999999999";

$clientes['Alberto']['CPF'] = "1920212-00";
$clientes['Alberto']['RG'] = "55555";
$clientes['Alberto']['Telefone'] = "999999999";



foreach($clientes as $nomes => $complementos){
	echo "=> Nome: $nomes<br>";
	foreach($complementos as $dados => $valor){
		echo "	$dados => $valor<br>";
	}
	echo "<br/>";
}
?>
