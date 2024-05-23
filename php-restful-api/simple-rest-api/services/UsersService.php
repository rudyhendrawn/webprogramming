<?php
include_once 'models/UsersModel.php';

class UsersService
{
    private $conn;
    private $usersModel;

    public function __construct(UsersModel $usersmodel)
    {
        $this->usersModel = $usersmodel;
    }

    public function fetchAllUsers()
    {
        // $users = new UsersModel($this->conn);
        // $stmt = $users->readAllUsers();
        $stmt = $this->usersModel->readAllUsers();
        $users_array = array();
        $users_array["records"] = array();
        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($rows);
            $user_item = array (
                "id" => $id,
                "first_name" => $first_name,
                "last_name" => $last_name,
                "username" => $username,
                "email" => $email
            );
            array_push($users_array["records"], $user_item);
        }

        return $users_array;
    }
}