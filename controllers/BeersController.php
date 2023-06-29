<?php
require_once 'models/BeersModel.php';

// BeersController hérite du ControllerPrincipal
class BeersController extends ControllerPrincipal{
    // public function index() {
            // require 'models/BeersModel.php';
            // $beersModel = new BeersModel();
        // je remplace ces 2 lignes par la fonction loadModel du ControllerPrincipal, et j'instancie le modèle BeersModel
            // $this->loadModel('BeersModel');

    private $model;

    public function __construct() {
        $this->model = new BeersModel();
    }

    public function index() {   
        $bieres = $this->model->getAllBeers();
        require_once 'views/beers.php';
    }
}
