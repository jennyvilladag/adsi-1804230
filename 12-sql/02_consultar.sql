# Consultar todos los registros 
SELECT * FROM pokemons;

#Consultar un solo campo
SELECT name FROM pokemons;

# Consultar un solo campo
SELECT name, speed FROM pokemons;

#Consultar valores distintos 
SELECT DISTINCT type FROM pokemons;

SELECT *
FROM pokemons
WHERE type = 'Agua';

SELECT *
FROM pokemons
WHERE type = 'Agua' OR type = 'Electrico';

SELECT *
FROM pokemons
WHERE strength > 1000;

SELECT *
FROM pokemons 
WHERE type <> 'Agua';

SELECT *
FROM pokemons 
WHERE type = 'Agua'
AND speed > 80;

SELECT *
FROM pokemons 
WHERE stamina 
BETWEEN 200
AND 300;


#ordenar accendente 
SELECT * FROM pokemons ORDER BY strength;
SELECT * FROM pokemons ORDER BY strength ASC;

#Ordenar descendente 
SELECT * FROM pokemons ORDER BY strength DESC;

SELECT * 
FROM pokemons
WHERE  speed > 100
ORDER BY speed DESC;

# Limite y en que fila 
SELECT *
FROM pokemons 
LIMIT 10;

SELECT *
FROM pokemons 
LIMIT 10
OFFSET 5;

SELECT *
FROM pokemons 
LIMIT 10, 5;

# Buscar (LIKE)
#Mostrar resultados que inician con 'A'
SELECT *
FROM pokemons
WHERE type
LIKE "A%";

#Mostrar el resultados que terminen con 'l'
SELECT *
FROM pokemons
WHERE type
LIKE "%l";

#Mostrar el resultados que contengan 'l'
SELECT *
FROM pokemons
WHERE type
LIKE "%l%";

#Mostrar el resultados que contengan 'ma'
SELECT *
FROM pokemons
WHERE name
LIKE "%ma%";

#Mostrar el resultados que cumple 'Pikachu'
SELECT *
FROM pokemons
WHERE name
LIKE "P_k_c_u";

#Mostrar el resultados que no contenga 'ma'
SELECT *
FROM pokemons
WHERE name
NOT LIKE "%ma%";

#Mostrar Resultados con varios valores 'IN'
SELECT *
FROM pokemons
WHERE type
IN ('Fuego', 'Electrico');

SELECT t.name AS name_trainer,
	   p.name AS name_pokemon,
	   p.type AS type_pokemon
FROM trainers AS t, pokemons AS p
WHERE t.id = p.trainer_id;
ORDER BY t.name ASC ;

SELECT t.name AS name_trainer,
p.name AS name_pokemon,
p.type AS type_pokemon
FROM trainers AS t, pokemons AS p
WHERE t.id = p.trainer_id
AND p.type = "Agua" OR p.type = "Fuego"
ORDER BY t.name ASC;

SELECT COUNT(p.id) AS number_pokemons 
FROM pokemons AS p, trainers AS t
WHERE t.id = p.trainer_id
AND t.id = 1;


SELECT t.name AS name_trainer, COUNT(p.id) AS number_pokemons
FROM pokemons AS p, trainers AS t
WHERE t.id = p.trainer_id
GROUP BY t.name;

# Inner Join 
#name_trainer | name_gym | name_pokemon
SELECT trainers.name, gyms.name, pokemons.name 
FROM pokemons INNER JOIN trainers
ON pokemons.trainer_id = trainers.id
INNER JOIN gyms
ON trainers.gym_id = gyms.id
ORDER BY trainers.name;

#left join
SELECT trainers.name AS name_trainer, COUNT(gyms.name) AS name_gym, pokemons.name AS name_pokemon
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.name;

#Right join 
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, pokemons.name AS name_pokemon
FROM trainers
Right JOIN gyms
ON trainers.gym_id = gyms.id and trainers.id = 1
Right JOIN pokemons
ON pokemons.trainer_id = trainers.id 


#JOIN
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, pokemons.name AS name_pokemon
FROM trainers
JOIN gyms
ON trainers.gym_id = gyms.id and trainers.id = 1
JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.name;

#union
SELECT name FROM trainers
UNION 
SELECT name FROM gyms
UNION 
SELECT name FROM pokemons;

#Vistas (views)
CREATE VIEW num_pokemons AS 
SELECT trainers.name AS name_trainer, COUNT(gyms.name) AS name_gym, pokemons.name AS name_pokemon
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.name;

#Consultar vista
SELECT * FROM num_pokemons;




