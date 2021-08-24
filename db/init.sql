CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    account_type VARCHAR(10) DEFAULT "user",
    login_count INT DEFAULT 0
);

CREATE TABLE user_info (
    id INT NOT NULL,
    FOREIGN KEY (id) REFERENCES users(id),
    name VARCHAR(30),
    surname VARCHAR(40),
    birthday DATETIME,
    avatar_url VARCHAR(255)
);

-- SELECTS

SELECT user_info.name, user_info.surname, users.username FROM user_info INNER JOIN users ON user_info.id = users.id;