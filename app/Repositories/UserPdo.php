<?php

require_once 'Database.php';

class UserPdo extends Database
{


    public function __construct()
    {
        parent::__construct();
    }



    public function createUser($params)
    {

        $sql = "INSERT INTO membre SET 
            pseudo = :pseudo, 
            password = :password, 
            email = :email, 
            confirmation_token = :token,
            date_creation = :createdAt
            ";

        //$params['password'] = password_hash($params['password'], PASSWORD_BCRYPT);
        $params['password'] = $params['password'];
        $params['token'] = str_random(60);
        $params['createdAt'] = mktime();

        try {
            $this->execute($sql, $params);
        }catch(Exception $e) {

            die($e->getMessage());
        }
    }


    public function getUser($params)
    {
        $sql = "SELECT * FROM membre WHERE 
            pseudo = :pseudo
            AND  password = :password
            ";

        return $this->execute($sql, $params);
    }


    public function existsUserPseudo($params)
    {
        $sql = "SELECT * FROM membre WHERE 
            pseudo = :pseudo
            ";

        return $this->execute($sql, $params);
    }

    public function existsUserPseudoEmail($params)
    {
        $sql = "SELECT * FROM membre WHERE 
            pseudo = :pseudo
        AND  email = :email
        ";

        return $this->execute($sql, $params);
    }
}