<?php
include_once '../model/user.php';
include_once '../model/user_session.php';
include_once '../model/establecimiento.php';


$userSession = new UserSession();
$user = new User();
$establecimiento = new Establecimiento();


$user->setUser($userSession->getCurrentUser());

if (isset($_SESSION['user'])){
    $active = 'inicio';
    include_once '../views/home.php';
}else{
    header("location: login.php");
}
