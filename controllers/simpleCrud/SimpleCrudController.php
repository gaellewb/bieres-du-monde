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

        // appel de la fonction UPDATE
        $updateColors = $this->model->getUpdateColors();

        // appel de la fonction DELETE
        $deleteColor = $this->model->getDeleteColors();

        require_once 'views/simpleCrud/simpleCrud.php';
    }
}