<?php
include_once '../lib/database.php';
include_once '../lib/encrypted_password.php';

class Establecimiento extends Database{

    function __construct()
    {
        parent::__construct();
    }

    public function getAllItems($id_establecimiento){

        $sql = 'SELECT id_establecimiento, nom_estable, direccion, horario, rango_precio, nom_propietario, 
                email, pagina_web, facebook, descripcion, num_plazas, `num_hab/mesas`, 
                telef_fijo, telef_celular, foto_portada, lat, lng FROM establecimientos 
                WHERE tipo_establecimiento_id_tipo = :id_establecimiento';

        $query = $this->connectDatabase()->prepare($sql);

        $query->execute(array(":id_establecimiento" => $id_establecimiento));

        $items = [];

        while ($row = $query->fetch(PDO::FETCH_ASSOC)){
            $item = [
                'id_establecimiento' => $row['id_establecimiento'],
                'nom_estable' => $row['nom_estable'],
                'direccion' => $row['direccion'],
                'horario' => $row['horario'],
                'rango_precio' => $row['rango_precio'],
                'nom_propietario' => $row['nom_propietario'],
                'pagina_web' => $row['pagina_web'],
                'email' => $row['email'],
                'facebook' => $row['facebook'],
                'descripcion' => $row['descripcion'],
                'num_plazas' => $row['num_plazas'],
                'num_habmesas' => $row['num_hab/mesas'],
                'telef_fijo' => $row['telef_fijo'],
                'telef_celular' => $row['telef_celular'],
                'foto_portada' => $row['foto_portada'],
                'lat' => $row['lat'],
                'lng' => $row['lng'],
            ];
            array_push($items, $item);
        }
        return $items;
    }

    public function createEstablecimiento($tipo_establecimiento,$nom_estable, $direccion, $horario, $rango_precio, $nom_propietario,
                                          $email, $pagina_web, $facebook, $descripcion, $num_plazas, $num_hab,
                                          $telef_fijo, $telef_celular, $foto_portada, $lat, $lng, $categoria_estable){

        $sql = 'INSERT INTO establecimientos (tipo_establecimiento_id_tipo, nom_estable, direccion, horario, rango_precio, nom_propietario,
                email, pagina_web, facebook, descripcion, num_plazas, `num_hab/mesas`,
                telef_fijo, telef_celular, foto_portada, lat, lng, categoria_estable_id_categoria)
                VALUES (:tipo_establecimiento_id_tipo, :nom_estable, :direccion, :horario, :rango_precio, :nom_propietario,
                :email, :pagina_web, :facebook, :descripcion, :num_plazas, :num_habmesas,
                :telef_fijo, :telef_celular, :foto_portada, :lat, :lng, :categoria_estable_id_categoria)';

        try {
            $result = $this->connectDatabase()->prepare($sql);
            $result->execute(array(':tipo_establecimiento_id_tipo' => $tipo_establecimiento,
                                   ':nom_estable' => $nom_estable,
                                   ':direccion' => $direccion,
                                   ':horario' => $horario,
                                   ':rango_precio' => $rango_precio,
                                   ':nom_propietario' => $nom_propietario,
                                   ':email' => $email,
                                   ':pagina_web' => $pagina_web,
                                   ':facebook' => $facebook,
                                   ':descripcion' => $descripcion,
                                   ':num_plazas' => $num_plazas,
                                   ':num_habmesas' => $num_hab,
                                   ':telef_fijo' => $telef_fijo,
                                   ':telef_celular' => $telef_celular,
                                   ':foto_portada' => $foto_portada,
                                   ':lat' => $lat,
                                   ':lng' => $lng,
                                   ':categoria_estable_id_categoria' => $categoria_estable)
            );
            return true;
        }catch (Exception $e){
            die("Error " . $e->getMessage());
        }
    }


}