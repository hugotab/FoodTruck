<?php


require_once './Database.php';

class Plat extends Database
{


    public function __construct()
    {
        parent::__construct();
    }


    public function getPlats()
    {
        $sql = "SELECT * FROM plat";

        return $this->execute($sql);
    }

    public function getPlat($idPlat)
    {
        $sql = 'SELECT * FROM plat WHERE idplat = :idPlat';
        $params = [
            'idPlat' => $idPlat
        ];

        return $this->execute($sql, $params);

    }

    public function getPlatViandes($idPlat)
    {
        $sql = 'SELECT plat.*, viande.*, legume.*, sauce.* FROM plat 
            INNER JOIN plat_viande ON plat_viande.idplat = plat.idplat
            INNER JOIN viande ON viande.idviande = plat_viande.idviande            
            WHERE plat.idplat = :idPlat';
        $params = [
            'idPlat' => $idPlat
        ];

        return $this->execute($sql, $params);

    }

    public function getPlatLegumes($idPlat)
    {
        $sql = 'SELECT plat.*, viande.*, legume.*, sauce.* FROM plat
            LEFT JOIN plat_legume ON plat_legume.idplat = plat_legume.idplat
            LEFT JOIN legume ON legume.idlegume = plat_legume.idlegume
            WHERE plat.idplat = :idPlat';
        $params = [
            'idPlat' => $idPlat
        ];

        return $this->execute($sql, $params);
    }

    public function getPlatSauces($idPlat)
    {
        $sql = 'SELECT plat.*, viande.*, legume.*, sauce.* FROM plat
            INNER JOIN plat_sauce ON plat_sauce.idplat = plat.idplat
            INNER JOIN sauce ON plat_sauce.idsauce = sauce.idsauce            
            WHERE plat.idplat = :idPlat';
        $params = [
            'idPlat' => $idPlat
        ];

        return $this->execute($sql, $params);
    }

}