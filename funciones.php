<?php

// Crear una función que imprima en consola y pantalla todos los números de un array en una lista
 $number = [1, 2, 24, 4, 5, 6];

function arrayList($number){
echo('<pre>');
print_r($number);
echo('</pre>');
}

arrayList($number);
echo "<br>";

// Crear una función que añade un número al array

function addNumber($num, &$array) {
  $array[] = $num;
}

$newNum = 4;
addNumber($newNum, $number);

print_r($number);
echo "<br>";

// Crear una función que elimine los números pares de ese array.
function deletePair($array) {
  
  $notPairNumbers = array();
  foreach ($array as $num) {  
      if ($num % 2 != 0) {
        array_push($notPairNumbers, $num);
      }
  }
  return $notPairNumbers;
}
var_dump(deletePair($number));
echo "<br>";
// Crear una función que devuelva el número mayor de un array.

function highestNumber($array){
  $maxNumber = null;
  foreach ($array as $num) {  
    if (($maxNumber !== null) && ($num > $maxNumber)) {
      $maxNumber = $num;
    } else if ($maxNumber === null) {
      $maxNumber = $num;
    }
  }
  var_dump($maxNumber);
  return $maxNumber;
}
highestNumber($number);
echo "<br>";

// Crear una función que devuelva el número menor de un array.

function smallerNumber($array){
  $minNumber = null;
  foreach ($array as $num) {  
    if (($minNumber !== null) && ($num < $minNumber)) {
      $maxNumber = $num;
    } else if ($minNumber === null) {
      $minNumber = $num;
    }
  }
  var_dump($minNumber);
  return $minNumber;
}
smallerNumber($number);
echo "<br>";

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


function toUpperFirst($names) {
  return array_map(function($name) {
    return ucfirst($name);
  }, $names);
}

$arrNames = ['joel', 'juan','angel'];
$toUpperNames = toUpperFirst($arrNames);
print_r($toUpperNames);
echo "<br>";

// Crear una clase coche con sus atributos y un atributo puede ser de tipo array
class Car{
  public $brand= 'audi';
  public $doors = 3;
  public $fuel = ['diesel', 'gasolina'];


    // Crear una función que devuelva la marca del coche.
  public function carBrand(){
    return $this->brand;
  }

    // Crear una función que devuelva la cantidad de puertas que tiene el coche.
  public function carDoors(){
    return $this->doors;
  }

// Crear una función que devuelva un atributo del array.
  public function carFuel(){
    return $this->fuel[1];
  }
}

$miCar = new Car();
echo $miCar->carBrand();
echo "<br>";
echo $miCar->carDoors();
echo "<br>";
echo $miCar->carFuel();



?>