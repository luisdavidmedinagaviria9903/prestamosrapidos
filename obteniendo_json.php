<?php


// file_put_contents('test.txt', file_get_contents('php://input') );
file_put_contents('test.txt', json_encode($_REQUEST) );



echo "<h1>Prueba formcraft </h1>";
$json = file_get_contents("test.txt");


$array = json_decode($json, true);


$simularCredito = " |cantidad: ".$array['Cantidad']."| Dias: ".$array['Días']." |    ";

echo $simularCredito;



echo "<br><br><br><br>";
var_dump($array);


?>