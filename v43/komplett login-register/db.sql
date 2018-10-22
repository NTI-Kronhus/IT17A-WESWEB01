CREATE DATABASE form;

USE form;

CREATE TABLE register(
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    name varchar(32),
    date varchar(32),
    mail varchar(32),
    address varchar(32),
    gender varhcar(32),
    password varchar(32)
);
