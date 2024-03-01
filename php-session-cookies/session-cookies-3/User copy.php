<?php
require_once 'dbconfig.php';
class User
{
	private $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function authenticate($username, $password)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
		$stmt->execute(['username' => $username, 'password' => $password]);
		$user = $stmt->fetch();

		if ($user)
		{
			return $user;
		} 
		else 
		{
			return false;
		}
	}
}