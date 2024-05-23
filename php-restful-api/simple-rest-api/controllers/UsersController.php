<?php
// include_once '../config/database.php';
include_once 'models/UsersModel.php'; // 1
include_once 'services/UsersService.php';

class UsersController 
{
    private $usersService;

    public function __construct($conn)
    {
        $usersModel = New UsersModel($conn); // 2
        $this->usersService = new UsersService($usersModel); //3
    }

    public function readUsers()
    {
        $users = $this->usersService->fetchAllUsers();
        return json_encode($users);
    }
}


// $database = new Database();
// $db = $database->getConnection();

// $userservice = new UsersService($db);
// $stmt = $user->readAllUser();
// $num = $stmt->rowCount();

// if ($num > 0)
// {
//     $user_arr = array();
//     $user_arr["records"] = array();

//     while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
//     {
//         // echo $row;
//         extract($row);
//         $user_item = array (
//             "id" => $id,
//             "first_name" => $first_name,
//             "last_name" => $last_name,
//             "username" => $username,
//             "email" => $email
//         );
//         array_push($user_arr["records"], $user_item);
//     }
//     echo json_encode($user_arr);
// }
// else
// {
//     echo json_encode(
//         array("message" => "User not found")
//     );
// }