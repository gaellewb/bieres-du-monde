<?php
abstract class ControllerPrincipal{
    public function loadModel(string $model){
        // ROOT permet d'aller chercher directement à la racine
        require_once(ROOT.'models/'.$model.'.php');
        $this->$model = new $model();
    }

    public function render (string $ficher){
        require_once(ROOT.'views/'.strtolower(get_class($this)).'/'.$fichier.'.php');
    }



}


?>