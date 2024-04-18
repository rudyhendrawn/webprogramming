<?php
class User {
	private $conn;
	private $table_name = "users";

	public $first_name;
	public $last_name;
	public $username;
	public $email;

	public function __construct($db) {
		$this->conn = $db;
	}

	// Method to read all users
	public function read() {
		try {
			$query = "SELECT * FROM " . $this->table_name;
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			return $stmt;
		} catch (PDOException $e) {
			// Handle the exception here
			echo "Error: " . $e->getMessage();
		}
	}

	// Method for read user by id
	public function readUserById($id) {
		try {
			$query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
			$stmt = $this->conn->prepare($query);
			$stmt->execute(['id' => $id]);
			// $userdata = $stmt->fetch(PDO::FETCH_ASSOC);

			return $stmt;
		} catch (PDOException $e) {
			// Handle the exception here
			echo "Error: " . $e->getMessage();
		}
	}
}