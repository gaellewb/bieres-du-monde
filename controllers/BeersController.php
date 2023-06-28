<?php


// BeersController hérite du ControllerPrincipal
class BeersController extends ControllerPrincipal{
    // public function index() {
    //     require 'views/beers.php';
    // }
    
    public function index() {
        // $beersModel = new BeersModel();
        // je remplace cette ligne par la fonction loadModel du ControllerPrincipal, et j'instancie le modèle BeersModel
        $this->loadModel('BeersModel');
        
        // $articles = $this->BeersModel->getAll();
        // $articles = BeersModel->getAll();
        // var_dump($binouz);
        require_once ('views/beers.php');
    }
    
    // $bieres = getAll();
}



?>