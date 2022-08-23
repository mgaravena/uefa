/**
 * Author:  Marcelo Aravena
 * Created: 21/8/2022
 */
DROP DATABASE IF EXISTS bduefa;

CREATE DATABASE bduefa;
USE bduefa;

CREATE TABLE usuarios(
    id_usuario INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usuario varchar(45) UNIQUE,
    clave varchar(45) NOT NULL,
    administrador boolean NOT NULL,
    apellido varchar (50),
    nombre   varchar(100),
    telefono varchar(100),
    email  varchar(50), 
    codigo varchar(50),
    activo boolean
);

CREATE TABLE equipos(
    id_equipo INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre varchar(50),
    localidad varchar(50),
    pais varchar (50)
);

CREATE TABLE partidos(
    id_partido INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    localia INT,
    visitante INT,
    fecha DATETIME,
    resultado varchar(10),
    FOREIGN KEY (localia) REFERENCES equipos(id_equipo),
    FOREIGN KEY (visitante) REFERENCES equipos(id_equipo)
);

CREATE TABLE juegos(
    id_juego INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usuario_id INT ,
    partido_id INT,
    resultado varchar(10),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (partido_id) REFERENCES partidos(id_partido)
);


CREATE TABLE codigos(
    id_codigo INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    codigo varchar(50),
    descripcion varchar(255),
    valor INT,
    fecha_creacion DATETIME,
    fecha_caducidad DATETIME
);


CREATE TABLE beneficios(
    id_beneficio INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    codigo_id INT,
    usuario_id INT,
    FOREIGN KEY (codigo_id) REFERENCES codigos(id_codigo),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario)
);

CREATE TABLE invitados(
    id_invitado INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usuario_id INT,
    invitado_id INT,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (invitado_id) REFERENCES usuarios(id_usuario)
);


INSERT usuarios VALUES
(1,'administrador','123456',0,'' ,'' ,'' ,'' ,'' , true),
(2,'usuario1','123456',1,'' ,'' ,'' ,'' ,'' , true)

