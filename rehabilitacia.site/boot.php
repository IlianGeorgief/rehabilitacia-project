<?php

spl_autoload_register(function ($class) {
    if (strpos($class, 'Controller') > -1) {
        include '../controllers/' . $class . '.php';
    } else if (strpos($class, 'View') > -1) {
        include '../views/' . $class . '.php';
    } else if (strpos($class, 'Model') > -1) {
        include '../models/' . $class . '.php';
    } else if (strpos($class, 'Database') > -1) {
        include '../base/' . $class . '.php';
    }else {
        include '../services/' . $class . '.php';
    }
});

session_start();