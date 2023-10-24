<?php
// Ejercicio 1
$n1 = 5; 

if ($n1 > 0) {
    echo "1) El número ingresado es un número positivo<br>";
}

// Ejercicio 2
$n2 = 7; 

if ($n2 > 1 && $n2 < 10) {
    echo "2) El número ingresado es mayor a 1 y menor a 10<br>";
}

// Ejercicio 3
$n3 = 12;

if ($n3 >= 10 || $n3 < 2) {
    echo "3) El número ingresado es mayor o igual a 10 o menor a 2<br>";
} else {
    echo "3) El número ingresado no pudo ser validado<br>";
}

// Ejercicio 4
$numero1 = 8; 
$numero2 = 4;

if ($numero1 > $numero2) {
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    echo "4) Suma: $suma<br>";
    echo "   Resta: $resta<br>";
} elseif ($numero2 > $numero1) {
    $multiplicacion = $numero1 * $numero2;
    $division_entera = intdiv($numero1, $numero2);
    $resto = $numero1 % $numero2;
    echo "4) Multiplicación: $multiplicacion<br>";
    echo "   División Entera: $division_entera<br>";
    echo "   Resto: $resto<br>";
} else {
    echo "4) Los números ingresados son iguales<br>";
}
?>