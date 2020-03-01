<?php

// Controlador Especificaciones
//Fabio Benitez Ramirez

require_once "BaseController.php";
require_once "libs/Routing.php";
require_once "modelos/Modelo.php";
require_once "modelos/Marca.php";
require_once "modelos/Especificaciones.php";
require_once "modelos/Modelo_Usuario.php";

class especificacionesController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    public function listar() {
        
        $tab = Modelo::find($_GET["id"]);

        
        $dat = Especificaciones::findAll($_GET["id"]);

        $com = Modelo_Usuario::findComentarios($_GET["id"]);
        
        $fav = Modelo_Usuario::findAll();
        
        $sesion = Sesion::getInstance();
        $id = $sesion->getUsuario();
        
        echo $this->twig->render("showEspecificacion.php.twig", ['tab' => $tab, 'dat' => $dat, 'com' => $com, 'fav' => $fav , 'id'=> $id]);
    }

   

   
    

}
