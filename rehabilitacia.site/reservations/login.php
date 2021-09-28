<?php

require_once "../boot.php";

$user = new UserController();
$user->logIn();

if (!$user->logIn())
{
   $_SESSION['error'] = "Unable to login"; 
}
$_SESSION['error'] = "";

$user->userInfo();


header('Content-type: application/json');

echo json_encode ($_SESSION);
