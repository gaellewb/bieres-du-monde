<?php
// require_once 'router.php';


// CREATION DU ROUTEUR

// On génère une constante ROOT qui contiendra le chemin vers index.php, elle permettra de trouver de suite la racine
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
// die(ROOT);

// Je charge les Model et Controller principaux
require_once(ROOT.'app/ModelPrincipal.php');
require_once(ROOT.'app/ControllerPrincipal.php');

// var_dump($_GET);
// On sépare les paramètres
$params = explode('/', $_GET['p']);

// var_dump($params);

// Est-ce qu'un paramètre existe
if ($params[0] != ""){
    $controller = ucfirst($params[0]);
    // S'il n'y a pas de méthode, la page index est appelée
    $action = isset($params[1]) ? $params[1] : 'index' ;

    require_once(ROOT.'controllers/'.$controller.'.php');

    $controller = new $controller();

    if(method_exists($controller, $action)){
        $controller->$action();
    }else{
        http_response_code(404);
        // require_once(ROOT.'controllers/ErrorController.php');
        require_once 'views/error.php';
    }
} else {
    // require_once 'views/error.php';
}






?>