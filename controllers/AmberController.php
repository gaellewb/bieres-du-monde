<?php
require_once 'models/ColorModel.php';

class AmberController {
    private $model ;

    public function __construct(){
        $this->model = new ColorModel();
    }

    public function index(){
        $amberBeers = $this->model->getAmber();
        require 'views/amber.php';
    }
}