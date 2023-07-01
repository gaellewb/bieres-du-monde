<?php
require_once 'models/SimpleCrudModel.php';

class CreateColorController {

        private $model ;
    
        public function __construct(){
            $this->model = new SimpleCrudModel();
        }
    
        public function index(){
            // appel de la fonction CREATE
            $createColor = $this->model->getCreateColor();




            // appel de la fonction modif
            // appel de la fonction supp
            require 'views/simpleCrud/createColor.php';
        }


}