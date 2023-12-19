<?php
require_once 'models/Users.php';
require_once 'service/UsersService.php';

class UsersController
{
    private $usersService;

    public function __construct()
    {
        $this->usersService = new UsersService();
    }

    public function index()
    {
        $users = $this->usersService->getAllUsers();
        require 'views/users/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Kiểm tra và xử lý dữ liệu

            $this->usersService->createUser($name, $email, $password);
            header('Location: index.php?controller=users');
        } else {
            require 'views/users/create.php';
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Kiểm tra và xử lý dữ liệu

            $this->usersService->updateUser($id, $name, $email, $password);
            header('Location: index.php?controller=users');
        } else {
            $id = $_GET['id'];
            $user = $this->usersService->getUserById($id);
            require 'views/users/edit.php';
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->usersService->deleteUser($id);
        header('Location: index.php?controller=users');
    }
}
?>