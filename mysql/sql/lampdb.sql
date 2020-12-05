-- tworzymy nową bazę danych `lampdb`
CREATE database IF NOT EXISTS lampdb CHARACTER SET utf8;
USE lampdb;
-- tworzymy tabelę `users` do przechowywania przykładowych użytkowników
CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL
) ENGINE=INNODB;

-- uzupełniamy tabelę `lampdb.users` o kilka wpisów
INSERT INTO users (username, password, created_at)
VALUES ("user1", PASSWORD('userp455w0ord01'), "2019-05-01 06:00");

INSERT INTO users (username, password, created_at)
VALUES ("user2", PASSWORD('userp455w0ord02'), "2020-01-15 12:43");

INSERT INTO users (username, password, created_at)
VALUES ("user3", PASSWORD('userp455w0ord03'), "2018-06-06 07:22");

INSERT INTO users (username, password, created_at)
VALUES ("user4", PASSWORD('userp455w0ord04'), "2020-12-04 15:48");
