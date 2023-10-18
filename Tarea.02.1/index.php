<?php
		# Ejercicio DES 2/01
		$varTexto="hola"; // Cadena de texto
		$varEntero=3; // Entero
		$varBoolean=true; // Booleano
		$varFloat=2.9; // Float
		$varArray= array ("primero", "segundo");

		# Ejercicio DES 2/01
		$varFloatOperation=$varEntero/$varFloat; // +,-,*,/

		echo "Variable concatenada: ". $varTexto . $varEntero. "</br>";
		echo "Variable de tipo boolean: ". $varBoolean . "</br>";
		echo "Variable de tipo float: ". intval($varFloat) . "</br>";
		echo "Variable de tipo compuesto: " ;

		echo "Variables sumadas: ". $varFloatOperation . "</br>";
		print_r($varArray); #La función print_r es la utilizada para imprimir el contenido de un array
	?>