<?php
include_once '../model/user.php';
include_once '../model/user_session.php';

$user = new User();
$userSession = new UserSession();

if (isset($_SESSION['user'])){
    header("location: home.php");
}

if (isset($_POST['name'], $_POST['lastname'], $_POST['username'], $_POST['password'], $_POST['email'])){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($user->verifyIfUserExits($email)){
        $errorMessage = "El correo ingresado ya ha sido registrado";
        include_once '../views/register.php';
    }else{
        $user->createUser($username, $password, $email, $name, $lastname);
        $userSession->setCurrentUser($email);
        header("location: ../index.php");
        echo "Usuario registrado";
    }
}else{
    include_once '../views/register.php';
}