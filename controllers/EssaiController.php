<?php
require_once 'models/EssaiModel.php';

class EssaiController extends ControllerPrincipal{
    public function index() {       
        // $this->loadModel('EssaiModel');
        require 'views/essai.php';

        $essai = new EssaiModel();
    }
    

}


?>