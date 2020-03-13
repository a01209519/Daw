CREATE TABLE Materiales
(
  Clave numeric(5),
  Descripcion varchar(50),
  Costo numeric(8,2)
)
CREATE TABLE Provedores
(
  RFC char(13),
  RazonSocial varchar(50),
)
CREATE TABLE Proyectos
(
  Numero numeric(5),
  Denominacion VARCHAR(50),
)

CREATE TABLE Entregan
(
  Clave NUMERIC(5),
  RFC char(13),
  Numero numeric(5),
  Fecha DATETIME,
  Cantidad NUMERIC(8,2)
)