<?php

require_once 'app/MainModel.php';

$url = $_SERVER['REQUEST_URI'];

$path = parse_url($url, PHP_URL_PATH);
$parts = explode('/', $path);
$page = '/'.end($parts);

switch ($page) {
    case '/home':
        require_once 'controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;
    case '/beers':
        require_once 'controllers/BeersController.php';
        $controller = new BeersController();
        $controller->index();
        break;
    case '/blond':
        require_once 'controllers/colors/BlondController.php';
        $controller = new BlondController();
        $controller->index();
        break;
    case '/brown':
        require_once 'controllers/colors/BrownController.php';
        $controller = new BrownController();
        $controller->index();
        break;
    case '/white':
        require_once 'controllers/colors/WhiteController.php';
        $controller = new WhiteController();
        $controller->index();
        break;
    case '/amber':
        require_once 'controllers/colors/AmberController.php';
        $controller = new AmberController();
        $controller->index();
        break;
    case '/simpleCrud':
        require_once 'controllers/simpleCrud/SimpleCrudController.php';
        $controller = new SimpleCrudController();
        $controller->index();
        break;
    case '/complexCrud':
        require_once 'controllers/complexCrud/ComplexCrudController.php';
        $controller = new ComplexCrudController();
        $controller->index();
        break;
    default:
        require_once 'controllers/ErrorController.php';
        http_response_code(404);
        $controller = new ErrorController();
        $controller->index();
        break;
}