<?php
require_once 'dbconfig.php';

class User {
	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function authenticate($username, $password) {
		$stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");
		$stmt->execute(['username' => $username]);
		$user = $stmt->fetch();
		echo $user['username'];
		echo $user['password'];
		echo $password;

		if ($user && password_verify($password, $user['password'])) 
		{
			return $user;
		} 
		else 
		{
			return false;
		}
	}
}