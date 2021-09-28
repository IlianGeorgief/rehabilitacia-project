<?php

class UserModel {
    private $db;

    public function __construct()
    {
        $db = new Database();
        $this->db = $db->getDB();

    }
    
    // Login user by username and password:
    public function getUser()
    {
        //$username = $_POST['usName1'];
        $username = filter_input(INPUT_POST, "usName1");
        //$pass = md5($_POST['pswd1']);
        $pass = md5(filter_input(INPUT_POST, "pswd1"));

        $sql = "SELECT * FROM `users` WHERE `username` = :username AND `password` = :pass";

        $stmt = $this->db->prepare($sql);

        $stmt->execute([':username' => $username, ':pass' => $pass ]);
        $result = false;
        
        try {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

             if (!empty($result['username']))
                {
                $_SESSION['user'] = ['name' => $result['username']];
                $_SESSION['error'] = '';

                $result = true;
                $_SESSION['user'] = $username;
                
                
                }
            } catch(Exception $e) {
            $result = false;
            $_SESSION['error'] = $e->getMessage();
        }
        unset ($_SESSION['error']); 
        return $result;
    }
    
    //here we get result with information about logged user from 2 tables with JOIN tables:
    public function infoUser()
        {
            $username = $_SESSION['user'];

            $sql = "SELECT u.id, u.username, i.id, i.ime, i.familia, i.adres, i.telefon FROM users u INNER JOIN info i ON u.id = i.id WHERE u.username= :username";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([':username' => $username ]);
            $result = false;

            try {
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION['ime'] = $result['ime'];
                $_SESSION['familia'] = $result['familia'];
                $_SESSION['adres'] = $result['adres'];
                $_SESSION['telefon'] = $result['telefon'];
                
            } catch(Exception $e) {
                $result = false;
                $_SESSION['error'] = $e->getMessage();
                }
        }

        
    // Insert new user username and password into users table:
    public function save()
    {
        if (empty(filter_input(INPUT_POST, "reg_usName")) || empty(filter_input(INPUT_POST, "reg_ps_wd")))
        {
            $_SESSION['error'] = "Empty name and password";
            return false;
        }
        
        $username = filter_input(INPUT_POST, "reg_usName");
        $pass = filter_input(INPUT_POST, "reg_ps_wd");
        $ime = filter_input(INPUT_POST, "reg_ime");
        $familia = filter_input(INPUT_POST, "reg_familia");
        $adres = filter_input(INPUT_POST, "reg_adres");
        $telefon = filter_input(INPUT_POST, "reg_phone");

        preg_match_all("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $pass, $out);

        if(!$out[0][0]) {
            $_SESSION['error'] = "Invalid password";
            return false;
        }
        $_SESSION['error'] = '';
  
        $pass2 = md5($out[0][0]);

        $sql = "INSERT INTO `users` (username, password) VALUES (:username, :pass)";
        $sqlInfo = "INSERT INTO `info` (ime, familia, adres, telefon) VALUES (:ime, :familia, :adres, :telefon)";
        
        $stmt = $this->db->prepare($sql);
        $stmtInfo = $this->db->prepare($sqlInfo);

        $stmt->execute([':username' => $username, ':pass' => $pass2 ]);
        $stmtInfo->execute([':ime' => $ime, ':familia' => $familia, ':adres' => $adres, ':telefon' => $telefon ]);
        
        $_SESSION['user'] = $username;

        return true;
        
    }
}