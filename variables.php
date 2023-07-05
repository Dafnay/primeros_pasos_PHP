    
<?php


// <!--Declara una variable por cada tipo de dato y asignar un valor -->

//  <!-- STRING-->
$name = 'Alba';  
//  <!-- INTEGER -->            
$age = 36;  
//  <!-- FLOAT -->                 
$float_number = 12.345;  
//  <!-- BOOLEAN-->    
$son = true; 
//  <!-- ARRAY- -->                
$hobbies = ['draw', 'read', 'music'];

// <!-- NULL -->
$puede_volar = NULL;

// <!-- Muestra el valor de esa variable en consola y en pantalla (Averigua cómo imprimir el valor
// booleano (que imprima true o false), un array y un valor nulo (que imprima NULL) -->


var_dump($name);
echo "<br>"; 
var_dump($age);
echo "<br>"; 
var_dump($float_number);
echo "<br>"; 
var_dump($son);
echo "<br>";
print_r($hobbies);
echo "<br>"; 
var_dump($puede_volar);
echo "<br>"; 
echo "<br>";
echo "<br>";
// <!-- ¿Qué tipo de dato son las siguientes variables? -->

//Fácil
$nombre = "Luna";
$apellido = "Lovegood";
$edad = 42;
$Ravenclaw = true;
var_dump($nombre);
echo "<br>"; 
var_dump($apellido);
echo "<br>"; 
var_dump($edad);
echo "<br>"; 
var_dump($Ravenclaw);
echo "<br>";
echo "<br>";
echo "<br>";

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
$nombre_completo = $nombre . " " .
$apellido;
$presento_examen = (bool) 1;
var_dump($promedio);
echo "<br>"; 
var_dump($nombre_completo);
echo "<br>"; 
var_dump($apellido);
echo "<br>"; 
var_dump($presento_examen);
echo "<br>";
echo "<br>";
echo "<br>";


//Avanzado
$numero_preguntas = 5 + "5";
$numero_respuestas = "5" + 5;
$promedio_maximo =
$numero_respuestas / 1.0;
$nargles = 3 + "5 nargles";


var_dump($numero_preguntas);
echo "<br>"; 
var_dump($numero_respuestas);
echo "<br>"; 
var_dump($promedio_maximo);
echo "<br>"; 
var_dump($nargles);
echo "<br>";
echo "<br>";
echo "<br>";

//Suponiendo estas variables
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// ¿Cuál es el resultado según las tablas de verdad?

var_dump($es_un_michi_grande && $le_gusta_comer);
echo "<br>";
var_dump($es_un_michi_grande || $sabe_volar);
echo "<br>";
var_dump($sabe_volar || $tiene_2_patas);
echo "<br>";
var_dump(!$le_gusta_comer);
echo "<br>";
var_dump(!$le_gusta_comer || $es_un_michi_grande);
echo "<br>";
echo "<br>";
echo "<br>";


// Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la
// variable original.

$character = 'hermione';
$upper = strtoupper($character);
var_dump($upper);
echo "<br>";

// Imprime en pantalla la longitud de la variable tipo string.

$longitud = strlen($character);
var_dump($lenght);
echo "<br>";

// Imprime en pantalla la cantidad de palabras de la variable tipo string.
$words = str_word_count($character);
var_dump($words);
echo "<br>";

// Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la
// variable original.


echo "<br>";
echo "<br>";
echo "<br>";
// Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.
// Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla
$a = 5;
$b = 7;
var_dump($a,$b);
echo "<br>";
// Suma ambas variables de tipo integer e imprime en pantalla.
$addition = $a + $b;
var_dump($addition);
echo "<br>";
// Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y
// consola
$c = 1;
$d = 0;
var_dump($c, $d);
echo "<br>";
// a las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato
// en pantalla y consola.

settype($c, 'boolean');
settype($d, 'boolean');
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
echo "<br>";
echo "<br>";


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

