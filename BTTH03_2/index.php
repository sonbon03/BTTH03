<?php
require_once 'config.php';
$controller = isset($_GET["controller"]) ? $_GET["controller"] : 'questions';
$action = isset($_GET["action"]) ? $_GET["action"] : 'edit';

$controllerClass = ucfirst($controller) . "Controller";

$controllerFile = "controller/$controllerClass.php";

if(file_exists($controllerFile)){
    require_once "./".$controllerFile;
    // var_dump($controllerFile);
    $controllerInstance  = new $controllerClass();
    $controllerInstance->$action();
}else {
    echo "Controller not found " . $controllerFile;
}
?>