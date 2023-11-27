<?php

require_once 'model/JsonModel.php';

class JsonController
{
    private $model;

    public function __construct($filePath)
    {
        $this->model = new JsonModel($filePath);
    }

    public function getAllUsers()
    {
        $users = $this->model->getUsers();
        return json_encode($users);
    }

    public function getUserById($userId)
    {
        $user = $this->model->getUserById($userId);

        if ($user) {
            return json_encode($user);
        } else {
            return json_encode(['error' => 'User not found']);
        }
    }
}
