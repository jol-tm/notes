create database notesdb;
use notesdb;

create table users(
    id int primary key auto_increment,
    email varchar(255) not null,
    pass varchar(255) not null
);

create table notes(
    id int primary key auto_increment,
    owner varchar(255) not null,
    content varchar(255) not null
);

select * from users;
drop database notesdb;