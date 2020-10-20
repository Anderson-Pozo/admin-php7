<?php
include_once '../model/user.php';
include_once '../model/user_session.php';
include_once '../model/establecimiento.php';

$userSession = new UserSession();
$user = new User();
$hotel = new Establecimiento();

$active= 'hotel';

if (!isset($_SESSION['user'])){
    header("location: login.php");
}


if (isset($_POST['nom_establecimiento'], $_POST['direccion'], $_POST['horario'], $_POST['rango_precio'],
    $_POST['nom_propietario'], $_POST['email'], $_POST['pagina_web'], $_POST['facebook'], $_POST['foto_portada'],
    $_POST['num_plazas'], $_POST['num_hab'], $_POST['telef_fijo'], $_POST['telef_celular'], $_POST['lat'],
    $_POST['lng'], $_POST['categoria'], $_POST['descripcion'])){

    $nom_establecimiento = $_POST['nom_establecimiento'] ;
    $direccion = $_POST['direccion'] ;
    $horario = $_POST['horario'];
    $rango_precio = $_POST['rango_precio'];
    $nom_propietario = $_POST['nom_propietario'];
    $email = $_POST['email'];
    $pagina_web = $_POST['pagina_web'];
    $facebook = $_POST['facebook'];
    $foto_portada = $_POST['foto_portada'];
    $num_plazas = $_POST['num_plazas'];
    $num_hab = $_POST['num_hab'];
    $telef_fijo = $_POST['telef_fijo'];
    $telef_celular = $_POST['telef_celular'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $categoria = $_POST['categoria'];;
    $descripcion = $_POST['descripcion'];


    if ($hotel->createEstablecimiento(1, $nom_establecimiento, $direccion, $horario,
        $rango_precio, $nom_propietario, $email, $pagina_web, $facebook, $descripcion, $num_plazas,
        $num_hab, $telef_fijo, $telef_celular, $foto_portada, $lat, $lng, $categoria))
    {
//        header("refresh:1; url=hotel.php");
        header("Location: hotel.php");
        exit();
    }

}else{
    include_once '../views/hotel.php';
}
?>