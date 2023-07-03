<?php
require_once 'models/ComplexCrudModel.php';

class ComplexCrudController {

    private $model ;

    public function __construct() {
        $this->model = new ComplexCrudModel();
    }

    public function index(){
        // appel de la fonction READ 
        $beersAndColors = $this->model->getBeersAndColors();

        // appel de la fonction LISTE DES COULEURS
        $colors = $this->model->getColors();

        // appel de la fonction LISTE DES MARQUES
        $marques = $this->model->getMarques();

        // appel de la fonction CREATE
        $create = $this->model->getCreate();

        // appel de la fonction UPDATE


        // appel de la fonction DELETE


        require_once 'views/complexCrud/complexCrud.php';
    }
}