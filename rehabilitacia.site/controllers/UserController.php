<?php

class UserController extends Controller
    {

    private $model;

    public function __construct()
        {
        $this->model = new UserModel();
        }

    public function hello()
        {
        echo "hello";
        }

    public function loggedIn()
        {
        if (!isset($_SESSION['user']))
            {
            return false;
            }

        return true;
        }

    public function logIn()
        {
        $user = $this->model->getUser();
        
        }
    public function userInfo()
        {
        $user = $this->model->infoUser();
        }

    public function save()
        {
        if ($this->model->save())
            {
            return true;
            }

        return false;
        }
        

    }
