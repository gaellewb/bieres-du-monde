<?php
// Inclusion du fichier contenant la définition de la classe BeersModel
require_once 'models/BeersModel.php';

// Déclaration de la classe BeersController
class BeersController {
    private $model; // Variable pour stocker l'instance de BeersModel

    // Constructeur de la classe BeersController
    public function __construct() {
        $this->model = new BeersModel(); // Instanciation de BeersModel pour pouvoir accéder à ses méthodes
    }

    // Méthode index() qui sera appelée lors de l'accès à la page correspondante
    public function index() { 
        // Appel de la méthode getAllBeers() de l'objet BeersModel pour obtenir toutes les bières dans un tableau
        $beers = $this->model->getAllBeers();

        // Inclusion de la view beers.php pour afficher les bières
        require_once 'views/beers.php';
    }
}