<?php
// Inclusion du fichier contenant la définition de la classe ColorModel
require_once 'models/ColorModel.php';

// Déclaration de la classe BrownController
class BrownController {
    private $model; // Variable pour stocker l'instance de ColorModel

    // Constructeur de la classe BrownController
    public function __construct() {
        $this->model = new ColorModel(); // Instanciation de ColorModel pour pouvoir accéder à ses méthodes
    }

    // Méthode index() qui sera appelée lors de l'accès à la page correspondante
    public function index() {  
        // Appel de la méthode getBrown() de l'objet ColorModel pour obtenir toutes les bières brunees dans un tableau 
        $brownBeers = $this->model->getBrown();
        // Inclusion de la view brown.php pour afficher les bières brunes
        require 'views/colors/brown.php';
    }
}