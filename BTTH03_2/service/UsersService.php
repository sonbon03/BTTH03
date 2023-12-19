<?php
require_once 'models/Users.php';

class UsersService
{
    private $usersModel;

    public function __construct()
    {
        global $db;
        $this->usersModel = new Users($db);
    }

    public function getAllUsers()
    {
        return $this->usersModel->getAllUsers();
    }

    public function getUserById($id)
    {
        return $this->usersModel->getUserById($id);
    }

    public function createUser($name, $email, $password)
    {
        

        return $this->usersModel->createUser($name, $email, $password);
    }

    public function updateUser($id, $name, $email, $password)
    {
        

        return $this->usersModel->updateUser($id, $name, $email, $password);
    }

    public function deleteUser($id)
    {
        

        return $this->usersModel->deleteUser($id);
    }
}
?>