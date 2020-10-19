<?php
include_once '../lib/database.php';
include_once '../model/user_session.php';

$userSession = new UserSession();

$userSession->closeSession();

header("location: ../controller/login.php");
