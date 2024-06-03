CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    country VARCHAR(50) NOT NULL
);

INSERT INTO users (username, password, firstname, lastname, age, country) VALUES
('john_doe', 'password123', 'John', 'Doe', 25, 'USA'),
('jane_smith', 'securepass', 'Jane', 'Smith', 30, 'UK'),
('alice', 'pass123', 'Alice', 'Johnson', 22, 'Canada'),
('bob', 'secret', 'Bob', 'Brown', 28, 'Australia'),
('admin1', 'adminpass', 'Admin', 'One', 35, 'USA');
