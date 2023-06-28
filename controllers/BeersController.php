<?php

// BeersController hérite du ControllerPrincipal
class BeersController extends ControllerPrincipal{
    public function index() {
        // $beersModel = new BeersModel();
        // je remplace cette ligne par la fonction loadModel du ControllerPrincipal, et j'instancie le modèle BeersModel
        $this->loadModel('BeersModel');

        require_once ('views/beers.php');
    }
}

?>