<?php
// Inclusion du fichier contenant la définition de la classe ComplexCrudModel
require_once 'models/ComplexCrudModel.php';

class ComplexCrudController {

    private $model ; // Variable pour stocker l'instance de ComplexCrudModel

    // Constructeur de la classe ComplexCrudController
    public function __construct() {
        $this->model = new ComplexCrudModel(); // Instanciation de ComplexCrudModel pour pouvoir accéder à ses méthodes
    }

    // Méthode index() qui sera appelée lors de l'accès à la page correspondante
    public function index(){
        // Appel de la méthode CREATE de l'objet ComplexCrudModel
        $creates = $this->model->getCreate();

        // Appel de la méthode READ 
        $reads = $this->model->getRead();

        // Appel de la méthode UPDATE
        $updates = $this->model->getUpdate();

        // Appel de la méthode DELETE
        $delete = $this->model->getDelete();

        // Inclusion de la view complexCrud pour afficher les résultats de l'opération CRUD complexe
        require_once 'views/complexCrud/complexCrud.php';
    }
}