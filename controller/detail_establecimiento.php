<?php

include_once '../model/establecimiento.php';
$establecimiento = new Establecimiento();

if (isset($_GET['id'], $_GET['tipo'])){
    $id = $_GET['id'];
    $tipo_establecimiento = $_GET['tipo'];

    include_once '../utils/tipo_establecimiento.php';

    $response = $establecimiento->getItemById($id);

    include_once '../views/detail_establecimiento.php';

}else{
    header("location: home.php");
}
?>

