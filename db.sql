CREATE DATABASE form;

USE form;

CREATE TABLE register(
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    name varchar(32),
    birth varchar(32),
    mail varchar(32) UNIQUE,
    address varchar(32),
    password varchar(32)
);