<?php
require_once 'models/BeersModel.php';

class HomeController {
    
    private $model;
    
    public function __construct() {
        $this->model = new BeersModel();
    }

    public function index() {
        $beers = $this->model->getRandBeers();
        require 'views/home.php';
    }
}
