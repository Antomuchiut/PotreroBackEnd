<?php
// Ejercicio 1
echo "1) Hola mundo<br>";

// Ejercicio 2
$mensaje = "Hola mundo";
echo "2) $mensaje<br>";

// Ejercicio 3
$numero1 = 10;
$numero2 = 5;
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;
$resto = $numero1 % $numero2;
echo "3) Suma: $suma<br>";
echo "   Resta: $resta<br>";
echo "   Multiplicación: $multiplicacion<br>";
echo "   División: $division<br>";
echo "   Resto: $resto<br>";

// Ejercicio 4
$gradosCelsius = 20;
$gradosFahrenheit = ($gradosCelsius * 9/5) + 32;
echo "4) $gradosCelsius son $gradosFahrenheit<br>";

// Ejercicio 5
$baseRectangulo = 18;
$alturaRectangulo = 12;
$perimetroRectangulo = 2 * ($baseRectangulo + $alturaRectangulo);
$areaRectangulo = $baseRectangulo * $alturaRectangulo;
echo "5) Rectángulo:<br>";
echo "   Perímetro: $perimetroRectangulo cm<br>";
echo "   Área: $areaRectangulo cm^2<br>";

$radioCirculo = 30;
$perimetroCirculo = 2 * M_PI * $radioCirculo;
$areaCirculo = M_PI * pow($radioCirculo, 2);
echo "   Círculo:<br>";
echo "   Perímetro: $perimetroCirculo cm<br>";
echo "   Área: $areaCirculo cm^2<br>";
?>