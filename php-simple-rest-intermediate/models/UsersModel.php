<?php
class UsersModel
{
    private $conn;
    private $table_name;

    public function __construct($db)
    {
        $this->conn = $db; 
        $tables = include('config/table.php');
        $this->table_name = $tables['users'];
    }

    public function readAllUsers()
    {
        try
        {
            $query = "SELECT * FROM " . $this->table_name;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }
        catch (PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }

    public function readUserById($id)
    {
        try
        {
            $query = "SELECT * FROM " . $this->table_name . " WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $id);
            $stmt->execute();

            return $stmt;
        }
        catch (PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }

    public function insertUser($data)
    {
        try
        {
            $query = "INSERT INTO " . $this->table_name . " (first_name, last_name, username, email) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $data['first_name']);
            $stmt->bindParam(2, $data['last_name']);
            $stmt->bindParam(3, $data['username']);
            $stmt->bindParam(4, $data['email']);
            $stmt->execute();

            return $stmt->rowCount();
        }
        catch (PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }
}