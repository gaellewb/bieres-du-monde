<?php
// Inclusion du fichier contenant la définition de la classe ColorModel
require_once 'models/ColorModel.php';

// Déclaration de la classe BlondController
class BlondController {
    private $model; // Variable pour stocker l'instance de ColorModel

    // Constructeur de la classe BlondController
    public function __construct() {
        $this->model = new ColorModel(); // Instanciation de ColorModel pour pouvoir accéder à ses méthodes
    }

    // Méthode index() qui sera appelée lors de l'accès à la page correspondante
    public function index() {  
        // Appel de la méthode getBlond() de l'objet ColorModel pour obtenir toutes les bières blondes dans un tableau 
        $blondBeers = $this->model->getBlond();
        // Inclusion de la view blond.php pour afficher les bières blondes
        require 'views/colors/blond.php';
    }
}