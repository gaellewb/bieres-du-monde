<?php
// Inclusion du fichier contenant la définition de la classe ColorModel
require_once 'models/ColorModel.php';

// Déclaration de la classe AmberController
class AmberController {
    private $model ; // Variable pour stocker l'instance de ColorModel

    // Constructeur de la classe AmberController
    public function __construct(){
        $this->model = new ColorModel(); // Instanciation de ColorModel pour pouvoir accéder à ses méthodes
    }

    // Méthode index() qui sera appelée lors de l'accès à la page correspondante
    public function index(){
        // Appel de la méthode getAmber() de l'objet ColorModel pour obtenir toutes les bières ambrées dans un tableau 
        $amberBeers = $this->model->getAmber();
        // Inclusion de la view amber.php pour afficher les bières ambrées
        require 'views/colors/amber.php';
    }
}