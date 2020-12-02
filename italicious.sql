CREATE DATABASE IF NOT EXISTS italicious;
CREATE TABLE IF NOT EXISTS users(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    userName varchar(255) NOT NULL,
    password text NOT NULL,
    dateJoined TIMESTAMP
);

--test data
INSERT INTO users(name, userName, password)
VALUES ('kedez', 'tsukoyomi', '1234567890');