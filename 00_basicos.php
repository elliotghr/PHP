<?php

// Variables
// PHP es case sensitive
$nombre = "Jonathan";
$Nombre = "Elliot";

// Concatenación de cadenas y variables
echo $nombre . " " . $Nombre;
echo "<br>";

$num1=5;
$num2=75;

$suma = $num1 + $num2;

echo $suma;


// Escapar variables
echo "La variable \$suma tiene el valor de $suma";

$modulo = $num2 % 2;
if ($modulo == 0) {
    echo "El número es Par";
}else{
    echo "El número es Impar";
}
echo "<br>";

for ($i=0; $i <=10 ; $i++) {
    echo $i."<br>";
}