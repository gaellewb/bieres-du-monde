<?php
require_once 'models/BeersModel.php';

class BeersController {
    private $model;

    public function __construct() {
        $this->model = new BeersModel();
    }

    public function index() {   
        $beers = $this->model->getAllBeers();
        require_once 'views/beers.php';
    }
}