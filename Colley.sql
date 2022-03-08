-- This is the SQL for the database structure from the Colley website --

DROP DATABASE IF EXISTS Colley;
CREATE DATABASE Colley;
USE Colley;

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    tmp_login_code INT(10)
);