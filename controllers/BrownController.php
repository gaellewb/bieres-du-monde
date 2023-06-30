<?php
require_once 'models/ColorModel.php';

class BrownController {
    private $model;

    public function __construct() {
        $this->model = new ColorModel();
    }

    public function index() {   
        $brownBeers = $this->model->getBrown();
        require 'views/brown.php';
    }
}