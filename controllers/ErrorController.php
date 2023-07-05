<?php

// Déclaration de la classe ErrorController
class ErrorController {
    public function index() {
        // Inclusion de la view error.php correspondant à la page d'erreur
        require 'views/error.php';
    }
}