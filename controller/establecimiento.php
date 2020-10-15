<?php
include_once '../model/establecimiento.php';

$hotel = new Hotel();

if (
$hotel->createEstablecimiento(
    1,
    'Example',
    'Juarez',
    '07:00-80',
    '23-43',
    'JuAN',
    'juan@gmail.com',
    'https://tulcan',
    '',
    'Description',
    '23',
    '34',
    '2973456',
    '0984637283',
    'https://image',
    '70382832',
    '-7823939',
    1
)){
    echo "Hotel was created";
}else{
    echo "Error";
}

//$response = $hotel->getAllItems(3);


//if($response){
//    foreach($response as $item){
//        echo $item['nom_estable'] . "<br>";
//        echo $item['num_habmesas'] . "<br>";
//    }
//}else{
//    echo "<h1>No hay usuarios registrados </h1>";
//}