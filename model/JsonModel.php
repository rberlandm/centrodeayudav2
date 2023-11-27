<?php

class JsonModel
{
    private $data;

    public function __construct($filePath)
    {
        $jsonString = file_get_contents($filePath);
        $this->data = json_decode($jsonString, true);
    }

    public function getUsers()
    {
        return $this->data['data'] ?? [];
    }

    public function getUserById($userId)
    {
        foreach ($this->data['data'] ?? [] as $user) {
            if ($user['id'] == $userId) {
                return $user;
            }
        }

        return null;
    }
}