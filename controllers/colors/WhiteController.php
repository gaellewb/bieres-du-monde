<?php
// Inclusion du fichier contenant la définition de la classe ColorModel
require_once 'models/ColorModel.php';

// Déclaration de la classe WhiteController
class WhiteController {
    private $model; // Variable pour stocker l'instance de ColorModel

    // Constructeur de la classe WhiteController
    public function __construct() {
        $this->model = new ColorModel(); // Instanciation de ColorModel pour pouvoir accéder à ses méthodes
    }

    // Méthode index() qui sera appelée lors de l'accès à la page correspondante
    public function index() {  
        // Appel de la méthode getWhite() de l'objet ColorModel pour obtenir toutes les bières blanches dans un tableau 
        $whiteBeers = $this->model->getWhite();
        // Inclusion de la view white.php pour afficher les bières blanches
        require 'views/colors/white.php';
    }
}