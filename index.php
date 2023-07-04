<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeros Pasos con PHP</title>
</head>
<body>
    
<?php


// <!--Declara una variable por cada tipo de dato y asignar un valor -->

//  <!-- STRING-->
$name = 'Alba';  
//  <!-- INTEGER -->            
$ages = 36;  
//  <!-- FLOAT -->                 
$float_number = 12.345  
//  <!-- BOOLEAN-->    
$son = true 
//  <!-- ARRAY- -->                
$hobbies = ['draw', 'read', 'music']
// <!-- OBJECT-->
class Car {                  
    public $color;
    public $model;
    public function __construct ($color, $model){
        $this->color =$color;
        $this->model = $model;
    }
   
}
$mycar = new Car('blue', 'cupra')
// <!-- NULL -->, 
$a = 'Joel'; 
$a = null;
var_dump($a);



// <!-- Muestra el valor de esa variable en consola y en pantalla (Averigua cómo imprimir el valor
// booleano (que imprima true o false), un array y un valor nulo (que imprima NULL) -->

echo $name;
echo $age
echo $float_number
echo $son
echo $hobbies
echo $mycar
// <!-- ¿Qué tipo de dato son las siguientes variables? -->


?>


</body>
</html>