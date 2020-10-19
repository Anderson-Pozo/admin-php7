<?php
include_once '../model/user.php';
include_once '../model/user_session.php';

$userSession = new UserSession();
$user = new User();

$user->setUser($userSession->getCurrentUser());

if (isset($_SESSION['user'])){
    include_once '../views/home.php';
}else{
    header("location: login.php");
}
