<?php
	$num = 5;
	echo "valor da variavel é: $num<br>";
	echo "<br/>Pré-incremento<br/>";
	++$num;
	echo "$num <br/>";
	
	echo "<br/>Pós-incremento<br/>";
	echo "valor da variavel agora é: $num<br>";
	$num++;
	echo "$num <br/>";



	echo "<br/>Pós-decremento<br/>";
	echo "valor da variavel agora é: $num<br>";
	$num--;
	echo "$num <br>";

	echo "<br/>Pré-decremento<br/>";
	echo "valor da variavel agora é: $num<br>";
	--$num;
	echo "$num <br>";
	
	
	
	echo "<br/><br/><br/><br/>Atribuição<br/>";
	$num = 35;
	$num += 10;
	echo "<br/>$num <br/>";
	$num -= 5;
	echo "<br/>$num <br/>";
	$num *= 20;
	echo "<br/>$num <br/>";
	$num /= 4;
	echo "<br/>$num <br/>";
	$num %= 2;
	echo "<br/>$num <br/>";
?>