<?php
//1
$linha=3;
$coluna=3;


for($i=0; $i<$linha; $i++){
	if($i==0){
		echo "<table width=20% border=1>";
	}
	
	echo "<tr>";
	
	for($j=0; $j<$coluna; $j++){
		echo "<td align='center'>texto</td>";
	}
	echo "</tr>";
	
	if($i>$linha){
		echo "</table>";
	}

}


?>