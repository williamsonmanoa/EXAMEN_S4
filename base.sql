CREATE DATABASE examenS4;
use examenS4;
CREATE TABLE user(
    id_user INTEGER PRIMARY KEY AUTO_INCREMENT,
    user_level INTEGER DEFAULT 5,
    username VARCHAR(200),
    email VARCHAR(200),
    firstname VARCHAR(200),
    lastname VARCHAR(200),
    phone VARCHAR(50),
    password VARCHAR(200)
    );
