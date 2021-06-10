<?php
//6

$vetor = array();
$soma = 0;
$maior=-1000;
$menor=1000;

for($i=0; $i<10; $i++){
	$vetor[$i]=rand(0, 20);
}


foreach($vetor as $indice => $valor){
	$soma += $valor;
	if ($valor >= $maior) {
		$maior = $valor;
	}
	if ($valor <= $menor) {
		$menor = $valor;
	}
}

var_dump($vetor); //print_r também mostra o array.
echo "<br/>";

echo "<br/>A soma de todos os numeros do vetor é: $soma.";
echo "<br/>O maior número é $maior.";
echo "<br/>O menor número é $menor.";
echo "<br/>A média dos números é " . $soma/count($vetor) ."<br/>";


?>
