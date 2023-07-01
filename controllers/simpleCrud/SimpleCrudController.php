<?php
require_once 'models/SimpleCrudModel.php';

class SimpleCrudController {

        private $model ;
    
        public function __construct(){
            $this->model = new SimpleCrudModel();
        }
    
        public function index(){
            // appel de la fonction READ 
            $propertiesColors = $this->model->getPropertiesColors();

            // appel de la fonction CREATE
            $createColor = $this->model->getCreateColor();

            // appel de la fonction modif
            // appel de la fonction supp
            require_once 'views/simpleCrud/simpleCrud.php';
        }
}