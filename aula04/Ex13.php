<?php
	$n = 10;
	$n2 = 1;
	echo "Os números inseridos são $n e $n2<br/><br/>";
	if ($n <= $n2){
		while($n <= $n2){
			if($n%2==0){
				echo "$n<br/>";
				$n++;
			}
			else{
				$n++;
			}
		}
	}
	else {
		while($n2 <= $n){
			if($n2%2==0){
				echo "$n2<br/>";
				$n2++;
			}
			else {
				$n2++;
			}
		}
	}
?>