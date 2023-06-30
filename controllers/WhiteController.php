<?php
require_once 'models/ColorModel.php';

class WhiteController {
    private $model;

    public function __construct() {
        $this->model = new ColorModel();
    }

    public function index() {   
        $whiteBeers = $this->model->getWhite();
        require 'views/white.php';
    }
}