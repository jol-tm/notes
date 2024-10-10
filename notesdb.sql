create database notesdb;
use notesdb;

create table users(
    id int primary key auto_increment,
    email varchar() not null,
    pass varchar() not null
);

create table notes(
    id int primary key auto_increment,
    owner varchar() not null,
    content varchar() not null
);

select * from users;
select * from notes;
drop database notesdb;