<?php
// Crear un array de 10 números
$array_num = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

// Obtén el largo del array e imprime en pantalla y consola.
$array_len = sizeof($array_num);
var_dump($array_len);
echo "<br>";

// Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla

array_push($array_num, 'Joel');
var_dump($array_num);
echo "<br>";
echo "<br>";

// Ahora agrega 2 elementos más a tu array e imprime en pantalla.
array_push($array_num, 'Lucia', 'Aida');
var_dump($array_num);
echo "<br>";
echo "<br>";

// Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.

$array_fruits = ['Manzana', 'Pera'];
$array_result = array_merge($array_num, $array_fruits);
var_dump($array_result);
?>