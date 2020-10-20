<?php
switch ($tipo_establecimiento) {
    case 1:
        header("location: hotel.php");
        break;
    case 2:
        header("location: hostal.php");
        break;
    case 3:
        header("location: restaurante.php");
        break;
    case 4:
        header("location: cafeteria.php");
        break;
    case 5:
        header("location: discoteca.php");
        break;
    case 6:
        header("location: bar.php");
        break;
    case 7:
        header("location: complejo.php");
        break;
}

?>
