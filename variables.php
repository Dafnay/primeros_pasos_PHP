    
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
?>

