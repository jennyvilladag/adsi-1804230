#Eliminar
DELETE FROM trainers
WHERE id = 5;


#Eliminar todos los registros de una tabla
DELETE * FROM trainers;

#Vaciar tabla
TRUNCATE trainers

#Transacciones
#Iniciar transaccion 
BEGIN;

#Realizar cambios 
DELETE trainers
WHERE id > 2;


#Los cambios son permanentes
#COMMT;

#Devolver los cambios
ROLLBACK;

#Alias
SELECT 
