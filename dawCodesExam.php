Hola! Ayer recibí este mensaje de Isidoro: En el video 
del tema 3, puedes encontrar al final del video 4 
ejemplos de códigos fuentes que os mostré y que vimos, 
y os comenté que los del examen serían similares a 
esos.

También en el video del tema 4 estudiamos varios 
ejemplos al final del tema.

Los programas serán parecidos a esos ejemplos de ambas 
clases.

La manera de prepararse es practicar programando y 
hacer simulaciones leyendo códigos como los de los 
ejemplos de esos 2 videos y saber interpretar el 
resultado, haciendo una traza de sus ejecución, mi 
recomendación es cogerte los ejemplos que os muestro 
con array, llamadas a funciones, bucles, etc... y con 
un papel y un boli, entender cada ciclo de ejecución 
los valores que adoptan las variables en cada una de 
ellas para deducir cual es el resultado final.

El próximo jueves veremos como prepararnos cada al 
examen, intenta en la medida de lo posible atender a 
la sesión en directo para plantear las posibles dudas 
que te surjan Por lo que he recopilado los códigos que 
puso tanto en la clase 3 como en la clase 4, porque he 
entendido que cae algo parecido en el test de los 
exámenes. Os lo voy pasando, tema 3:

<?php $matriz = array ( "Pos1" => array("1","2","3"), 
	"Pos2" => array("4","5","6"), "Pos3" => 
	array("7","8","9"), );

	print($matriz ["Pos1"][0]); print($matriz 
	["Pos1"][1]); print($matriz ["Pos1"][2]); 
	print("</br>"); print($matriz ["Pos2"][0]); 
	print($matriz ["Pos2"][1]); print($matriz 
	["Pos2"][2]); print("</br>"); print($matriz 
	["Pos3"][0]); print($matriz ["Pos3"][1]); 
	print($matriz ["Pos3"][2]);
?>

Salida: 123 456 789

Tips: Esto es una matriz, o array multidimensional, en 
la que se muestra por pantalla según el orden 
estipulado con los print. Ojo al orden, por si pone el 
mismo ejemplo pero con los números desordenados. 
Entendemos que la posición que está entre corchetes, 
es lo que marca el orden.

Sigo.

<!DOCTYPE html> <?php $valorMinimo=1; $valorMaximo=40; 
do {
	echo $valorMinimo . "</br>"; $valorMinimo++;
} while ( $valorMinimo <= $valorMaximo )
?>

Salida: 1 2 3 ... 39 40

<!DOCTYPE html> <?php $valorMinimo=1; $valorMaximo=50; 
for ($var = valorMinimo; $var <= $valorMaximo;
        $var++){ echo $var . "</br>";
     }
?>

Salida: 1 2 3 ... 49 50


Ejecuta y enseña por pantalla del 1 al 40. Y del 1 al 
50 En uno tenemos un bucle do while, y en el otro un 
for. Mirad las diferencias y descomponed el programa 
por partes ademas dijo que todos serían codigos 
correctos, que funcionan. Nada de errores sintáctivos


<!DOCTYPE html> <?php $datos = array ( "User1" => 
	array("User1", "Pass1", "admin"), "User2" => 
	array("User2", "Pass2", "user"), "User3" => 
	array("User3", "Pass3", "admin"), );
	
	echo "El usuario " . $datos["User1"][0] . " tiene perfil: " . $datos["User1"][2] . "</br>";
	echo "El usuario " . $datos["User3"][0] . " tiene perfil: " . $datos["User2"][2] . "</br>";
	echo "El usuario " . $datos["User3"][0] . " tiene perfil: " . $datos["User3"][2] . "</br>";
	echo "</br>";
        echo "El usuario " . $datos["User1"][0] . " tiene la password: " . $datos["User1"][1] . "</br>";
        echo "El usuario " . $datos["User3"][0] . " tiene la password: " . $datos["User2"][1] . "</br>";
        echo "El usuario " . $datos["User3"][0] . " tiene la password: " . $datos["User3"][1] . "</br>";

concatenación, imprimiendo instrucciones o etiquetas de html
Saldra por pantalla esto:

Salida:
El usuario User1 tiene perfil: admin
El usuario User2 tiene perfil: user
El usuario User3 tiene perfil: admin

El usuario User1 tiene la password: Pass1
El usuario User2 tiene la password: Pass2
El usuario User3 tiene la password: Pass3

Si pone algo así, simplemente prestad atención a la posición una vez más. Recordad que empieza por 0, que a veces los nervios nos corren malas pasadas con eso.

Tema 4:
Esto no recomienda usarlo así, ya que es una mala práctica, pero lo puso de ejemplo.

<?php
    $a = 1;
    $b = 1;
    $c = 1;

    while ($a <= 4) {
        while ($b <= 3) {
            while ($c <= 2) {
                echo $a . '-' . $b . '-' . $c . "</br>";
                $c++;
		#break;
            }
	    $b++;
            $c = 1;
        }
	$a++;
        $b = 1;
	$c = 1;


    }
?>

Salida:
1-1-1
1-1-2
1-2-1
1-2-2
1-3-1
1-3-2
2-1-1
2-1-2
2-2-1
2-2-2
2-3-1
2-3-2
3-1-1
3-1-2
3-2-1
3-2-2
3-3-1
3-3-2
4-1-1
4-1-2
4-2-1
4-2-2
4-3-1
4-3-2

------


<?php
    $a = 1;
    $b = 1;
    $c = 1;

    while ($a <= 4) {
        while ($b <= 3) {
            while ($c <= 2) {
                echo $a . '-' . $b . '-' . $c . "</br>";
                $c++;
                break;
            }
            $b++;
            $c = 1;
        }
        $a++;
        $b = 1;
        $c = 1;


    }
?>

Salida:

1-1-1
1-2-1
1-3-1
2-1-1
2-2-1
2-3-1
3-1-1
3-2-1
3-3-1
4-1-1
4-2-1
4-3-1

-----

Esto es con el break activo*
Y si al lado del break pone un numero, entendemos que si hay un 1, se sale del bucle interior, un 2, del primero y del segundo, y un 3, solo del más exterior.
ejemplo con break 2


<?php
    $a = 1;
    $b = 1;
    $c = 1;

    while ($a <= 4) {
        while ($b <= 3) {
            while ($c <= 2) {
                echo $a . '-' . $b . '-' . $c . "</br>";
                $c++;
                break 2;
            }
            $b++;
            $c = 1;
        }
        $a++;
        $b = 1;
        $c = 1;


    }
?>

Salida:

1-1-1
2-1-1
3-1-1
4-1-1

-----

<?php
    $a = 1;
    $b = 1;
    $c = 1;

    while ($a <= 4) {
        while ($b <= 3) {
            while ($c <= 2) {
                echo $a . '-' . $b . '-' . $c . "</br>";
                $c++;
                break 3;
            }
            $b++;
            $c = 1;
        }
        $a++;
        $b = 1;
        $c = 1;


    }
?>

Salida:

1-1-1

-----

Luego tenemos uso de funciones con parámetros:


