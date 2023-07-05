<?php
require_once 'models/ComplexCrudModel.php';

class ComplexCrudController {

    private $model ;

    public function __construct() {
        $this->model = new ComplexCrudModel();
    }

    public function index(){
        // appel de la fonction READ 
        $reads = $this->model->getRead();

        // appel de la fonction LISTE DES COULEURS
        // $colors = $this->model->getColors();

        // appel de la fonction LISTE DES MARQUES
        // $marques = $this->model->getMarques();

        // appel de la fonction CREATE
        $creates = $this->model->getCreate();

        // appel de la fonction UPDATE
        $updates = $this->model->getUpdate();

        // appel de la fonction DELETE
        $delete = $this->model->getDelete();

        require_once 'views/complexCrud/complexCrud.php';
    }
}