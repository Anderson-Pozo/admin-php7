<?php
include_once '../model/establecimiento.php';

$hotel = new Establecimiento();

$active = 'hotel';


//if ($hotel->createEstablecimiento(1,'asdbashbdj','asbdksak',
//'asjd','232','asdsadasd','asdsad','asdasd','aasdsa',
//'abskdkbsakd','23','34','09882384','09882348',
//'hhtskadnnasd','223424','342421312',1)){
//    echo "Registro creado";
//}else{
//    echo "Algo falló";
//}

if ($hotel->updateEstablecimiento(55,'Hola de nuevo',
'Hjasd','24horas','23-23','Andres', 'asdsa@gmail.com',
'http://','faeknsd','HASJDBKASB','23','23',
'0987237','0239213','http://','98283','123123',3)){
    echo "<h1>Update hecho</h1>";
}else{
    echo "<h1>Update fallo</h1>";
}


//
//
//if (isset($_POST['nom_establecimiento'], $_POST['direccion'], $_POST['horario'], $_POST['rango_precio'],
//    $_POST['nom_propietario'], $_POST['email'], $_POST['pagina_web'], $_POST['facebook'], $_POST['foto_portada'],
//    $_POST['num_plazas'], $_POST['num_hab'], $_POST['telef_fijo'], $_POST['telef_celular'], $_POST['lat'],
//    $_POST['lng'], $_POST['categoria'], $_POST['descripcion'])){
//
//    $nom_establecimiento = $_POST['nom_establecimiento'] ;
//    $direccion = $_POST['direccion'] ;
//    $horario = $_POST['horario'];
//    $rango_precio = $_POST['rango_precio'];
//    $nom_propietario = $_POST['nom_propietario'];
//    $email = $_POST['email'];
//    $pagina_web = $_POST['pagina_web'];
//    $facebook = $_POST['facebook'];
//    $foto_portada = $_POST['foto_portada'];
//    $num_plazas = $_POST['num_plazas'];
//    $num_hab = $_POST['num_hab'];
//    $telef_fijo = $_POST['telef_fijo'];
//    $telef_celular = $_POST['telef_celular'];
//    $lat = $_POST['lat'];
//    $lng = $_POST['lng'];
//    $categoria = $_POST['categoria'];;
//    $descripcion = $_POST['descripcion'];
//
//
//    if ($hotel->createEstablecimiento(1, $nom_establecimiento, $direccion, $horario,
//            $rango_precio, $nom_propietario, $email, $pagina_web, $facebook, $descripcion, $num_plazas,
//            $num_hab, $telef_fijo, $telef_celular, $foto_portada, $lat, $lng, $categoria))
//    {
//        echo "<h1>Registro creado</h1>";
//    }else{
//        echo "<h1>Algo ha ido mal</h1>";
//    }
//
////    echo "<h1>Hola desde post</h1>" . $nom_establecimiento . $direccion, $horario, $rango_precio, $nom_propietario, $email;
//}else{
//    include_once '../views/create_estab.php';
//}



//echo "<h1>Antes de if</h1>";
//if (isset($_POST['nom_establecimiento'], $_POST['direccion'], $_POST['horario'], $_POST['rango_precio'],
//    $_POST['nom_propietario'], $_POST['email'], $_POST['pagina_web'], $_POST['facebook'], $_POST['foto_portada'],
//    $_POST['num_plazas'], $_POST['num_hab'], $_POST['telef_fijo'], $_POST['telef_celular'], $_POST['lat'],
//    $_POST['lng'], $_POST['categoria'], $_POST['descripcion'])) {
//
//    echo "<h1>Estoy en ISSET</h1>";
//
//    $nom_establecimiento = $_POST['nom_establecimiento'];
//    $direccion = $_POST['direccion'];
//    $horario = $_POST['horario'];
//    $rango_precio = $_POST['rango_precio'];
//    $nom_propietario = $_POST['nom_propietario'];
//    $email = $_POST['email'];
//    $pagina_web = $_POST['pagina_web'];
//    $facebook = $_POST['facebook'];
//    $foto_portada = $_POST['foto_portada'];
//    $num_plazas = $_POST['num_plazas'];
//    $num_hab = $_POST['num_hab'];
//    $telef_fijo = $_POST['telef_fijo'];
//    $telef_celular = $_POST['telef_celular'];
//    $lat = $_POST['lat'];
//    $lng = $_POST['lng'];
//    $categoria = $_POST['categoria'];
//    $descripcion = $_POST['descripcion'];
//
//    try {
//        $hotel->createEstablecimiento(1,
//            $nom_establecimiento,
//            $direccion,
//            $horario,
//            $rango_precio,
//            $nom_propietario,
//            $email,
//            $pagina_web,
//            $facebook,
//            $descripcion,
//            $num_plazas,
//            $num_hab,
//            $telef_fijo,
//            $telef_celular,
//            $foto_portada,
//            $lat,
//            $lng,
//            $categoria);
//        echo "<h1>Registro creado</h1>";
//        header("location: ../controller/create_estab.php");
//    } catch (Exception $e) {
//        echo $e->getMessage();
//    }
//
//} else {
//    echo "<h1>Estoy en else</h1>";
//
//    include_once '../views/create_estab.php';
//}




