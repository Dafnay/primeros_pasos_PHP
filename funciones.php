<?php

// Crear una función que imprima en consola y pantalla todos los números de un array en una lista
$number = [1, 2, 3, 4, 5, 6];

function arrayList($number){
echo('<pre>');
print_r($number);
echo('</pre>');
}

arrayList($number);
echo "<br>";

// Crear una función que añade un número al array



// Crear una función que elimine los números pares de ese array.


// Crear una función que devuelva el número mayor de un array.


// Crear una función que devuelva el número menor de un array.


// Crear un función que convierta en minúsculas todas las letras de un texto.
function toLowerCase($word){
  echo strtolower($word);
}
toLowerCase('MANZANA');
echo "<br>";
// Crear una función que convierta en mayúsculas todas las letras de un texto.
function toUpperCase($word){
  echo strtoupper($word);
}
toUpperCase('gatito');
echo "<br>";
// Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre
// en mayúscula.



// Crear una clase coche con sus atributos y un atributo puede ser de tipo array
class Coche{
  public $marca = 'audi';
  public $puertas = 3;
  public $combustible = ['gasolina','diesel'];
}

// Crear una función que devuelva la marca del carro.


// Crear una función que devuelva la cantidad de puertas que tiene el carro.


// Crear una función que devuelva un atributo del array.
?>