use dawbdorg_A01209519;

CREATE TABLE lugar(
	id_lugar int(10) NOT NULL AUTO_INCREMENT,
	nombre varchar(25),
    primary key (id_lugar)
);

CREATE TABLE incidente(
	id_incidente int(10) NOT NULL AUTO_INCREMENT,
	incidente varchar(25),
    primary key (id_incidente)
);

CREATE TABLE ocurren(
	id_ocurren int (10) NOT NULL AUTO_INCREMENT,	
	id_lugar int(10),
    id_incidente int(10),
    tiempo timestamp default current_timestamp,
    primary key (id_ocurren),
    foreign key (id_lugar) references lugar (id_lugar),
    foreign key (id_incidente) references incidente (id_incidente)
)