CREATE DATABASE digiarch DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE digiarch;

CREATE TABLE imagenes(
	idimagen int not null auto_increment,
	ruta varchar(300) not null,
	directorio varchar(20) not null,
	PRIMARY KEY(idimagen)
);

CREATE TABLE involucrado(
	idinvolucrado int not null auto_increment,
	nombre varchar(60) not null,
	paterno varchar(80) not null,
	materno varchar(80) default null,
	PRIMARY KEY(idinvolucrado)
);

CREATE TABLE permisos(
	idpermisos int not null auto_increment,
	escritura boolean not null,
	lectura boolean not null,
	editar boolean not null,
	borrar boolean not null,
	PRIMARY key(idpermisos)
);

CREATE TABLE personal(
	idpersonal int not null auto_increment,
	nombre varchar(60) not null,
	apellidos varchar(120) not null,
	dni char(10) not null,
	sexo varchar(9) not null,
	telefono varchar(15) default null,
	direccion varchar(200) default null,
	obs varchar(255) default null,
	fechacreacion timestamp not null,
	PRIMARY KEY(idpersonal)
);

CREATE TABLE proyecto(
	idproy int not null auto_increment,
	year char(4) not null,
	mes varchar(12),
	titulo varchar(200),
	expinicio varchar(50),
	expfinal varchar(50),
	observacion varchar(255),
	PRIMARY KEY(idproy)
);

CREATE TABLE documento(
	iddocum int not null auto_increment,
	idproy int not null,
	idimagen int not null,
	idinvol int not null,
	codigo varchar(30) not null,
	dia int(2) not null,
	mes char(3),
	anio char(4),
	nombres varchar(80) not null,
	apellidos varchar(200) not null,
	asunto varchar(300) default null,
	direccion varchar(255) default null,
	cantfolios int not null,
	obs varchar(400) default null,
	estado int(1) not null,
	PRIMARY KEY(iddocumento)
);

CREATE TABLE user(
	iduser int not null auto_increment,
	idpermiso int not null,
	login varchar(30) not null,
	passwd varchar(200) not null,
	nivel int not null,
	estado boolean not null,
	fecha timestamp not null,
	PRIMARY KEY(iduser)
);