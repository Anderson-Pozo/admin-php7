<?php

include_once '../model/establecimiento.php';

$hotel = new Establecimiento();

$active= 'hotel';

include_once '../views/hotel.php';