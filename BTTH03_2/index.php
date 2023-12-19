<?php
require_once 'config.php';

// Xử lý yêu cầu và định tuyến tới controller tương ứng
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'users';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerClassName = ucfirst($controller) . 'Controller';
$controllerFileName = 'controller/' . $controllerClassName . '.php';

if (file_exists($controllerFileName)) {
    require_once $controllerFileName;
    $controllerInstance = new $controllerClassName();

    if (method_exists($controllerInstance, $action)) {
        $controllerInstance->$action();
    } else {
        echo 'Action not found.';
    }
} else {
    echo 'Controller not found.';
}
?>