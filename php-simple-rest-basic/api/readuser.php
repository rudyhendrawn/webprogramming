<?php
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/Database.php';
include_once '../models/User.php';

function readuser($stmt) {
	$num_rows = $stmt->rowCount();

	if ($num_rows > 0) {
		$users_arr = array();
		$users_arr["records"] = array();

		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			extract($row);
			$user_item = array (
				"id" => $id,
				"first_name" => $first_name,
				"last_name" => $last_name,
				"username" => $username,
				"email" => $email
			);
			array_push($users_arr["records"], $user_item);
		}
		return json_encode($users_arr);
	} else {
		return json_encode(
			array("message" => "No users found.")
		);
	}
}

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$stmt = $user->read();

// Check the HTTP method and call the appropriate function
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	echo readuser($stmt);
} else {
	// Handle other HTTP methods if necessary
	http_response_code(405); // Method Not Allowed
	echo json_encode(array("message" => "Method Not Allowed."));
}