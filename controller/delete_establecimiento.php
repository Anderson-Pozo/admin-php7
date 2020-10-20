<?php

include_once '../model/establecimiento.php';
$establecimiento = new Establecimiento();

if (isset($_GET['id'])){
    $id = $_GET['id'];
    if (isset($_POST['eliminar'])){
        $establecimiento->deleteEstablecimiento($id);
        header('location: hotel.php');
        echo "<h1>Registro borrado</h1>";
    }else{
        include_once '../views/delete_establecimiento.php';
    }
}else{
    header("location: home.php");
}
?>
