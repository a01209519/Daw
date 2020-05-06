use dawbdorg_A01209519;

DELIMITER $$
CREATE PROCEDURE AgregarLugar(
	IN nom varchar (25)
)
BEGIN 
	INSERT INTO lugar (nombre) VALUES (nom);
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE AgregarIncidente(
	IN nom varchar (25)
)
BEGIN 
	INSERT INTO incidente (incidente) VALUES (nom);
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE AgregarOcurren(
	IN id_in int (10),
    IN id_lug int (10)
)
BEGIN 
	INSERT INTO ocurren (id_incidente,id_lugar) VALUES (id_in,id_lug);
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE ObtenerLugares(

)
BEGIN 
	SELECT l.nombre as l_nombre, l.id_lugar as l_id FROM lugar as l;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE ObtenerIncidente(
	IN idd int (10)
)
BEGIN 
	SELECT i.incidente as i_incidente, o.tiempo as o_tiempo FROM incidente as i, ocurren as o, lugar as l
    WHERE  i.id_incidente = o.id_incidente AND l.id_lugar = o.id_lugar AND l.id_lugar = idd
    order by o_tiempo DESC;
END $$
DELIMITER ;