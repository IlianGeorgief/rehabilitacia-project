<?php

require_once "../boot.php";
$error = '';
$_SESSION['error'] = '';

if (isset($_POST['reg_usName']) && isset($_POST['reg_ps_wd'])) {
    $user = new UserController();

    if($user->save())
    {
        header('Location:/reservations/');
    }

    if(isset($_SESSION['error']))
    {
        $error = $_SESSION['error'];
        header('Location:/reservations/');
    }
    
}
else {
    $_SESSION['error'] = "Username & Password are empty";
}

//code for return Json object
//header('Content-type: application/json');
//echo json_encode ($_SESSION);