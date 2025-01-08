-- Create the database if it doesn't already exist
CREATE DATABASE IF NOT EXISTS product_db;

-- Use the created database
USE product_db;

-- Create the 'products' table
CREATE TABLE IF NOT EXISTS products (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT NOT NULL,
    stock INT(11) NOT NULL
);

-- Insert sample data into the 'products' table
INSERT INTO products (title, price, description, stock) VALUES
('Product 1', 19.99, 'This is the first product.', 100),
('Product 2', 29.99, 'This is the second product.', 50),
('Product 3', 39.99, 'This is the third product.', 200);

-- Create the 'users' table
CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Insert a sample user into the 'users' table (hashed password for security)
INSERT INTO users (username, password) VALUES
('admin', '$2y$10$VJH0eOMI2xWgJxHf6V9cY.d8OqPl91yYVe8ZmgH/kKUzNN9Ojj2mS'),
('user', '$2y$10$YlHJ0zLAXEdx5X5dLzpqrKlR4g/mEqXeL/psjr95UAvsOqkx/mMwO');
-- The passwords are 'admin' an
