<?php
require_once 'models/ColorModel.php';

class BlondController {
    private $model;

    public function __construct() {
        $this->model = new ColorModel();
    }

    public function index() {   
        $blondBeers = $this->model->getBlond();
        require 'views/colors/blond.php';
    }
}