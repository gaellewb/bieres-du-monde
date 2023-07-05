<?php
// Inclusion du fichier contenant la définition de la classe SimpleCrudModel
require_once 'models/SimpleCrudModel.php';

// Déclaration de la classe SimpleCrudController
class SimpleCrudController {

    private $model; // Variable pour stocker l'instance de SimpleCrudModel

   // Constructeur de la classe SimpleCrudController
    public function __construct(){
        $this->model = new SimpleCrudModel(); // Instanciation de SimpleCrudModel pour pouvoir accéder à ses méthodes
    }

    // Méthode index() qui sera appelée lors de l'accès à la page correspondante
    public function index(){
        // Appel de la méthode READ de l'objet SimpleCrudModel
        $colors = $this->model->getReadColor();

        // Appel de la méthode CREATE
        $createColor = $this->model->getCreateColor();

        // Appel de la méthode UPDATE
        $updateColors = $this->model->getUpdateColors();

        // Appel de la méthode DELETE
        $deleteColor = $this->model->getDeleteColors();

        // Inclusion de la view simpleCrud pour afficher les résultats de l'opération CRUD simple
        require_once 'views/simpleCrud/simpleCrud.php';
    }
}