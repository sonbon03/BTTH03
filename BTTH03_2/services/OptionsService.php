<?php

class OptionsService {
    private $controller;

    public function __construct($controller) {
        $this->controller = $controller;
    }

    public function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';

        switch ($action) {
            case 'edit':
                $id = $_GET['id'];
                $this->controller->edit($id);
                break;
            case 'update':
                $id = $_POST['id'];
                $title = $_POST['title'];
                $description = $_POST['description'];
                $this->controller->update($id, $title, $description);
                break;
            case 'delete':
                $id = $_GET['id'];
                $this->controller->delete($id);
                break;
            default:
                $this->controller->index();
                break;
        }
    }
}
