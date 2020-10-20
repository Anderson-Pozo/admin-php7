<?php

include_once '../model/establecimiento.php';
$establecimiento = new Establecimiento();

if (isset($_GET['id'], $_GET['tipo'])){
    $id = $_GET['id'];
    $tipo_establecimiento = $_GET['tipo'];

    include_once '../utils/tipo_establecimiento.php';

    $response = $establecimiento->getItemById($id);

    if (isset($_POST['eliminar'])){
        if ($establecimiento->deleteEstablecimiento($id)){
            echo "<h1>Registro borrado</h1>";
            include_once '../utils/redirect_tipo_establecimiento.php';
        }
    }else{
        include_once '../views/delete_establecimiento.php';
    }
}else{
    header("location: home.php");
}
?>
