<!-- Ejercicio 1 -->
<?php
echo "1) Mostrar los números del 1 al 9:<br>";
for ($i = 1; $i <= 9; $i++) {
    echo $i . "<br>";
}

// Ejercicio 2
echo "<br>2) Mostrar los números del 9 al 1:<br>";
for ($i = 9; $i >= 1; $i--) {
    echo $i . "<br>";
}

// Ejercicio 3
echo "<br>3) Mostrar los números pares del 1 al 20:<br>";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "<br>";
}

// Ejercicio 4
echo "<br>4) Mostrar los números impares del 1 al 20:<br>";
for ($i = 1; $i <= 20; $i += 2) {
    echo $i . "<br>";
}

// Ejercicio 5
echo "<br>5) Mostrar la suma de los números del 1 al 20:<br>";
$suma_total = array_sum(range(1, 20));
echo $suma_total . "<br>";

// Ejercicio 6
echo "<br>6) Mostrar la suma de los números pares del 1 al 20:<br>";
$suma_pares = array_sum(range(2, 20, 2));
echo $suma_pares . "<br>";
?>
