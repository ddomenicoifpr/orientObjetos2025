<?php 

function divisaoExata($dividendo, $divisor) {
	if($dividendo % $divisor == 0)
		return true;
		
	return false;
};

//Programa principal
$num = readline("Informe um número: ");
while($num > 1) {
	
	echo "Divisores: ";
	for($i=$num-1; $i>=1; $i--) {
		if(divisaoExata($num, $i)) {
			if($i > 1)
				echo $i . ", ";
			else
				echo $i . "\n";	
			
		}
	}
	
	$num = readline("Informe um número: ");
}

echo "Programa encerrado!\n";
