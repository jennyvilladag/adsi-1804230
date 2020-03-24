# Acceder a Base de Datos en el navegador:
localhost/phpmyadmin
# Acceder en la Base de Datos en la linea de comandos:
#$ cd /xampp/mysql/bin
# 
#$./mysql -u root -p 

#Mostrar version de mysql
SELECT version();

#Mostrar Bases de Datos
SHOW databases;

#crear una base de datos
CREATE database adsi1804230;

#Conectar a una Base de Datos
CONNECT mysql;

#Usar base de Datos
USE adsi1804230;

#Mostrar tablas 
SHOW tables;

#crear tabla
create table trainers (
    id int auto_increment ,
    name varchar(32) not null,
    level int not null default,
    gym_id int not null,
    foreign key(gym_id) references gyms(id)
    primary key(id));

 CREATE table pokemons (
    id INT AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL,
    type VARCHAR(32) NOT NULL,
    strength INT NOT NULL,
    stamina INT NOT NULL,
    speed INT NOT NULL,
    accuracy INT NOT NULL,
    PRIMARY KEY(id));

CREATE table pokemons2 (
id INT AUTO_INCREMENT,
name VARCHAR(32) NOT NULL,
type VARCHAR(32) NOT NULL,
strength INT NOT NULL,
stamina INT NOT NULL,
speed INT NOT NULL,
accuracy INT NOT NULL,
PRIMARY KEY(id)
);

create table types (
id int auto_increment,
name varchar(32) not null,
primary key(id));

#ELIMINAR COLUMNA 
 ALter TABLE pokemons DROP COLUMN trainer_id;
#Agregar columna
ALTER TABLE pokemons add column trainer_id INT NOT NULL after accuracy;
 
# Descripcion de la tabla
 DESCRIBE pokemons;

 INSERT INTO pokemons VALUES (DEFAULT, 'pikachu', 'Electrico', 90, 80, 96, 79);
 INSERT INTO pokemons VALUES (DEFAULT, 'charmander', 'Fuego', 95, 78, 80, 82);
 INSERT INTO pokemons VALUES (DEFAULT, 'bulbasaur', 'Planta', 80, 88, 70, 75);
 INSERT INTO pokemons VALUES (DEFAULT, 'squirtle', 'Agua', 70, 90, 75, 90);

 SELECT * FROM pokemons;

 INSERT INTO pokemons VALUES (DEFAULT, 'Snorlax', 'Normal', 180, 320, 50, 180);
 INSERT INTO pokemons VALUES (DEFAULT, 'Vaporeon', 'Agua', 186, 260, 90, 168);
 INSERT INTO pokemons VALUES (DEFAULT, 'Lapras', 'Agua', 111, 255, 100, 168);
 INSERT INTO pokemons VALUES (DEFAULT, 'Blastoise', 'Agua', 720, 158, 70, 222);
 INSERT INTO pokemons VALUES (DEFAULT, 'Golem', 'Agua', 500, 160, 80, 198);
 INSERT INTO pokemons VALUES (DEFAULT, 'Dragonite', 'Dragon', 900, 250, 120, 182);
 INSERT INTO pokemons VALUES (DEFAULT, 'Snorlax', 'Normal', 180, 320, 50, 180);
 INSERT INTO pokemons VALUES (DEFAULT, 'Vaporeon', 'Agua', 186, 260, 90, 168);
 INSERT INTO pokemons VALUES (DEFAULT, 'Lapras', 'Agua', 186, 260, 90, 168);
 INSERT INTO pokemons VALUES (DEFAULT, 'Blastoise', 'Agua', 720, 158, 70, 222);
 INSERT INTO pokemons VALUES (DEFAULT, 'Golem', 'Agua', 500, 160, 80, 198);
 INSERT INTO pokemons VALUES (DEFAULT, 'Dragonite', 'Dragon', 900, 250, 120, 182);
 INSERT INTO pokemons VALUES (DEFAULT, 'Exeggutor', 'Planta', 596, 190, 90, 232);
 INSERT INTO pokemons VALUES (DEFAULT, 'Omaster', 'Roca', 1500, 140, 112, 202);
 INSERT INTO pokemons VALUES (DEFAULT, 'Onix', 'Roca', 662, 70, 80, 90);
 INSERT INTO pokemons VALUES (DEFAULT, 'Poliwag', 'Agua', 815, 80, 70, 108);
 INSERT INTO pokemons VALUES (DEFAULT, 'Mankey', 'Pelea', 563, 80, 70, 122);
 INSERT INTO pokemons VALUES (DEFAULT, 'Pidgey', 'Normal', 818, 80, 95, 90);
 INSERT INTO pokemons VALUES (DEFAULT, 'Gastly', 'Fantasma', 750, 60, 60, 82);
 INSERT INTO pokemons VALUES (DEFAULT, 'Rattata', 'Normal', 810, 60, 65, 72);
 

UPDATE pokemons SET trainer_id = 1 WHERE id = 1 OR id = 2 OR id = 3 OR  = 4;
UPDATE pokemons SET trainer_id = 2 WHERE id = 5 OR id = 7 OR id = 9 OR id = 11 OR id = 13 OR id = 15 OR ID = 17 OR id = 19;
UPDATE pokemons SET trainer_id = 3 WHERE id = 6 OR id = 8 OR id = 10 OR id = 12 OR id = 14 OR id = 16 OR ID = 18 OR id =20;

 #crear copia de seguridad (Backup) de la BD:
 $mysqldump -u root -p adsi1804230 > C:\Users\Tatiana\OneDrive\Escritorio\jenny\adsi-1804230\12-sql\backup.sql

#Eliminar BD
 drop database adsi1804230;

#Recuperar copia de seguridad (backup) de BD:
CREATE DATABASE adsi1804230;
$ .mysql -u root -p adsi1804230 < C:\Users\Tatiana\OneDrive\Escritorio\jenny\adsi-1804230\12-sql\backup.sql

#insertar datos de una tabla a otra 
INSERT INTO pokemons2 SELECT * FROM pokemons;
