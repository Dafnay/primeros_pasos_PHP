
<?php


// Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime
// en pantalla y por consola el resultado

function add($num1, $num2) {
    $res = $num1 + $num2;
    return $res;
}

var_dump( add( 5, 5));
echo "<br>";


// Crear función que determine si un número es par o impar. Imprime por consola y pantalla

function esPar($number) {
    if ($number % 2 == 0){
        echo "El número  " . $number . " es PAR";
    } else {
        echo "El número  " . $number . " es IMPAR";
    }
}

$number = 42;
esPar($number);

?>
