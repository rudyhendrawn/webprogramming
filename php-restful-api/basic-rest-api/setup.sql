-- Create the database if it doesn't already exist
CREATE DATABASE IF NOT EXISTS simple_api;
USE simple_api;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE
);

-- Insert dummy values into the users table
INSERT INTO users (first_name, last_name, username, email) VALUES
('John', 'Doe', 'johndoe', 'john@example.com'),
('Jane', 'Doe', 'janedoe', 'jane@example.com'),
('Mike', 'Smith', 'mikesmith', 'mike@example.com'),
('Lisa', 'Jones', 'lisajones', 'lisa@example.com'),
('Steve', 'Brown', 'stevebrown', 'steve@example.com');

-- Create a new user for the database
CREATE USER 'rest_api_demo'@'localhost' IDENTIFIED BY 'rest_api_demo';

-- Grant DML privileges to the new user on the simple_api database
GRANT SELECT, INSERT, UPDATE, DELETE ON simple_api.* TO 'rest_api_demo'@'localhost';

-- Apply the changes
FLUSH PRIVILEGES;
