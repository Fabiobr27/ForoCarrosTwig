<?php

// Fabio Benitez Ramirez
require_once "libs/Database.php";

class Especificaciones {

    private $CodEspe;
    private $CodigoMod;
    private $Caballos;
    private $Año;
    private $Combustible;

    public function __construct() {
        
    }

    public function getCaballos() {
        return $this->Caballos;
    }

    public function setCaballos($Caballos) {
        $this->Caballos = $Caballos;

        return $this;
    }

    public function getAño() {
        return $this->Año;
    }

    public function setAño($Año) {
        $this->Año = $Año;

        return $this;
    }

    public function getCombustible() {
        return $this->Combustible;
    }

    public function setCombustible($Combustible) {
        $this->Combustible = $combustible;

        return $this;
    }

    public function getcodigoMod() {
        return $this->CodigoMod;
    }

    public function setcodigoMod($codMod) {
        $this->CodigoMod = $codMod;

        return $this;
    }

    public function getcodigoEspe() {
        return $this->CodEspe;
    }

    public function setcodigoEspe($CodEspe) {
        $this->CodEspe = $CodEspe;

        return $this;
    }

   
    public static function findAll($codigoMod): array {
         $db =  Database::getInstance();;
        $db->query("SELECT CodEspe, CodigoMod, Caballos, Año, Combustible FROM especificaciones WHERE codigoMod = $codigoMod;");

        $data = [];
        while ($obj = $db->getObject("Especificaciones"))
            array_push($data, $obj);


        return $data;
    }
    
    public static function find($codigoMod): Especificaciones {
        $db =  Database::getInstance();
        $db->query("SELECT CodEspe, CodigoMod, Caballos, Año, Combustible FROM especificaciones  WHERE codigoMod = $codigoMod;");

        return $db->getObject("Especificaciones");
    }

    public function delete() {
        $db =  Database::getInstance();
        $db->query("DELETE FROM nota WHERE idNot={$this->idNot} ;");
    }

}
