<?php
require_once 'models/ColorModel.php';

class ColorController {
    private $model;

    public function __construct() {
        $this->model = new ColorModel();
    }

    public function index() {   
        $beersColor = $this->model->getBlond();
        require 'views/color.php';
    }
}