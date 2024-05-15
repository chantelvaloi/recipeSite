CREATE DATABASE recipe;

USE recipe;

CREATE TABLE recipe_repository (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    ingredients LONGTEXT,
    preparation LONGTEXT
);