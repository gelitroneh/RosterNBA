CREATE DATABASE roster;
 CREATE TABLE jugadores(
     id int auto_increment primary key,
     nombre VARCHAR(50),
     altura FLOAT,
     equipo VARCHAR(50)
 );

 INSERT INTO jugadores(nombre,altura,equipo) VALUES('Mark',1.75,'OKC');
 INSERT INTO jugadores(nombre,altura,equipo) VALUES('John',1.98,'LAC');

 Show DATABASES;
