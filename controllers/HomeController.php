<?php
// Inclusion du fichier contenant la définition de la classe BeersModel
require_once 'models/BeersModel.php';

// Déclaration de la classe HomeController
class HomeController {
    
    private $model; // Variable pour stocker l'instance de BeersModel
    
    // Constructeur de la classe HomeController
    public function __construct() {
        $this->model = new BeersModel(); // Instanciation de BeersModel pour pouvoir accéder à ses méthodes
    }
    
    // Méthode index() qui sera appelée lors de l'accès à la page d'accueil
    public function index() {
        // Appel de la méthode getRandBeers() de l'objet BeersModel pour obtenir des bières aléatoires
        $beers = $this->model->getRandBeers();

        // Inclusion de la view home correspondant à la page d'accueil
        require 'views/home.php';
    }
}