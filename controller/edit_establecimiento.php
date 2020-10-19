<?php
    include_once '../model/establecimiento.php';
    $establecimiento = new Establecimiento();

    if (isset($_GET['id'], $_GET['tipo_establecimiento'])){

        $id = $_GET['id'];
        $tipo_establecimiento = $_GET['tipo_establecimiento'];

        include_once '../utils/tipo_establecimiento.php';

        $response = $establecimiento->getItemById($id);

        if (isset($_POST['id_establecimiento'], $_POST['nom_establecimiento'], $_POST['direccion'], $_POST['horario'],
            $_POST['rango_precio'], $_POST['nom_propietario'], $_POST['email'], $_POST['pagina_web'], $_POST['facebook'],
            $_POST['foto_portada'], $_POST['num_plazas'], $_POST['num_hab'], $_POST['telef_fijo'],
            $_POST['telef_celular'], $_POST['lat'], $_POST['lng'], $_POST['categoria'], $_POST['descripcion'])){

            $id_establecimiento = $_POST['id_establecimiento'];
            $tipo_establecimiento = $_POST['tipo_establecimiento'];
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
            $categoria = $_POST['categoria'];
            $descripcion = $_POST['descripcion'];

            if ($establecimiento->updateEstablecimiento($id_establecimiento,$nom_establecimiento,$direccion,$horario,
            $rango_precio, $nom_propietario, $email, $pagina_web, $facebook, $descripcion, $num_plazas, $num_hab, $telef_fijo,
            $telef_celular, $foto_portada, $lat, $lng, $categoria))
            {
                echo "<h1>Registro creado</h1>";
                include_once '../utils/redirect_tipo_establecimiento.php';
            }else{
                echo "<h1>Algo ha ido mal</h1>";
            }

        }else{
            include_once '../views/edit_establecimiento.php';
        }

    }else{
        header("location: home.php");
    }


    echo "<h1>$id</h1>";
    echo "<h1>$tipo_establecimiento</h1>";

?>

