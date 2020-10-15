<?php
include_once '../lib/database.php';
include_once '../lib/encrypted_password.php';

class User extends Database{
    private $email;
    private $first_name;
    private $last_name;

    function __construct()
    {
        parent::__construct();
    }

    public function getName(){
        return $this->first_name . " " . $this->last_name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function createUser($usuario, $password, $email, $nombres, $apellidos ){

        $encrypted_password = Password::generatePasswordHash($password);
        $is_admin_default = 0;

        $query = "INSERT INTO usuarios(usuario, password, email, nombres, apellidos, is_admin) 
                  VALUES (:usuario, :password, :email, :nombres, :apellidos, :is_admin)";
        try {
            $result = $this->connectDatabase()->prepare($query);
            $result->execute(array(":usuario" => $usuario, ":password" => $encrypted_password, ":email" => $email, ":nombres" => $nombres,
                ":apellidos" => $apellidos, ":is_admin" => $is_admin_default));
            return true;
        }catch (Exception $e){
            die("Error " . $e->getMessage());
        }
    }

    public function loginUser($email, $password){
        $count = 0;
        $query = "SELECT * FROM usuarios WHERE email = :email";

        $result = $this->connectDatabase()->prepare($query);
        $result->execute(array(":email" => $email));

        while($register = $result->fetch(PDO::FETCH_ASSOC)){
            (Password::verifyPasswordHash($password, $register["password"])) ? $count++ : null ;
        }

        if ($count>0){
            return true;
        }else{
            return false;
        }
    }

    public function verifyUser($email, $password){
        $count = 0;
        $query = "SELECT * FROM usuarios WHERE email = :email";

        $result = $this->connectDatabase()->prepare($query);
        $result->execute(array(":email" => $email));

        while($register = $result->fetch(PDO::FETCH_ASSOC)){
            (self::verifyPasswordHash($password, $register["password"])) ? $count++ : null ;
        }

        if ($count>0){
            return true;
        }else{
            return false;
        }
    }

    public function verifyIfUserExits($email){

        $query = "SELECT email FROM usuarios WHERE email = :email";

        $result = $this->connectDatabase()->prepare($query);
        $result->execute(array(":email" => $email));
        $count = $result->rowCount();

        if ($count > 0){
            return true;
        }else{
            return false;
        }
    }



}
