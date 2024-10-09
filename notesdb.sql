create database notesdb;
use notesdb;

create table users(
    id int primary key auto_increment,
    email varchar(255),
    pass varchar(255)
);

create table notes(
    id int primary key auto_increment,
    owner varchar(255),
    content varchar(255)
);

