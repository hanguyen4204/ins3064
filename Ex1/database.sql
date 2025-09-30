-- SQL file for PHP User Management System
-- Database: LoginReg
-- Table: table1

-- Create database
CREATE DATABASE IF NOT EXISTS `LoginReg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `LoginReg`;

-- Create table2 for user data
CREATE TABLE IF NOT EXISTS `table2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Brand` VARCHAR(100) NOT NULL,
  `Model` VARCHAR(150) NOT NULL,
  `Price` DECIMAL(10,2) NOT NULL,
  `Quantity` INT NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample data (optional)
INSERT INTO `table2` (Brand, Model, Price, Quantity) VALUES
('Dell', 'Inspiron 15', 15000000, 10),
('HP', 'Pavilion x360', 23000000, 5),
('Asus', 'VivoBook S14', 17000000, 8),
('Apple', 'MacBook Air M1', 26000000, 3),
('Lenovo', 'ThinkPad E14', 20000000, 6);s