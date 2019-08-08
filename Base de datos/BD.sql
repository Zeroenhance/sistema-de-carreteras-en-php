create database if not exists carreteras;
use carreteras;

Create table carreteras(
idCarretera int auto_increment primary key not null,
Nombre varchar(50) not null,
Categoria varchar(50) not null
);

Create table tramos(
idTramo int auto_increment primary key not null,
Nombre varchar(50) not null,
Inicio varchar(50) not null,
Fin varchar(50) not null,
idCarretera int not null,
foreign key (idCarretera) references carreteras (idCarretera) on delete cascade
);

Create table comunidades(
idComunidad int auto_increment primary key not null,
Nombre varchar(50) not null,
Entidad varchar(50) not null
);

Create table tramos_comunidades(
idTramo int not null,
idComunidad int not null,
foreign key (idTramo) references tramos (idTramo) on delete cascade,
foreign key (idComunidad) references comunidades (idComunidad) on delete cascade
);

ALTER TABLE  tramos_comunidades add unique (idTramo, idComunidad);