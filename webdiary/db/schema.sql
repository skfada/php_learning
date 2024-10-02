# creating database and user
CREATE DATABASE IF NOT EXISTS crudapp;
CREATE USER IF NOT EXISTS 'crud_admin'@'localhost' IDENTIFIED BY 'Dummy@12345';
GRANT ALL PRIVILEGES ON crudapp.* TO 'crud_admin'@'localhost';
FLUSH PRIVILEGES;

# creatng the table
USE crudapp;
CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(150) NOT NULL UNIQUE,
    pwd VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);


# creating post table.
CREATE TABLE posts(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    user_id INT(11) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    tittle VARCHAR(150) NOT NULL,
    content TEXT NOT NULL,
    post_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);






#modify
#ALTER TABLE users
#MODIFY id INT(11) AUTO_INCREMENT PRIMARY KEY;
#MODIFY username VARCHAR(50) NOT NULL UNIQUE,
#MODIFY email VARCHAR(150) NOT NULL UNIQUE;
