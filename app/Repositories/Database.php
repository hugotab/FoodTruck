<?php

class Database
{

    protected $db;


    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=foodtruck', 'root', "root");
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $this->db;

    }


    protected function execute($sql, $params)
    {
        try {
            $req = $this->db->prepare($sql);
            $req->execute($params);
            $rows = $req->fetch();

            return $rows;
        } catch(Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

    }


}