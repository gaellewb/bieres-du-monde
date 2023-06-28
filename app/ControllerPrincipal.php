<?php
abstract class ControllerPrincipal{
    // Je crée une fonction qui remplace et télécharge $model pour chaque nouveau model
    public function loadModel(string $model){
        // ROOT permet d'aller chercher directement à la racine
        require_once(ROOT.'models/'.$model.'.php');
        $this->$model = new $model();
    }

}


?>