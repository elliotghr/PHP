--  SQL: Structure Query Language - Lenguaje Estructurado de Consulta
--  Lenguaje estandarizado para las bases de datos
--  Base de datos: Coleccion de datos que están organizados
--  Gesotres o manejadores de DB son los programas que nos permiten administrar los datos
--  Ejemplos de Gestores de DB: Microsoft Access, Microsoft SQL Server, Oracle, SQL Lite, PostgreSQL, MYSQL
--  Una sentencia SQL es una linea de codigo para trabajar con nuestra DB
--  Existen 2 tipos de sentencias SQL:
--  1) Sentencias Estructurales - Nos permitirán modificar, crear o eliminar objetos, usuarios y propiedades de nuestra DB
--  2) Sentencias de Datos - Son las que nos permitirán crear, insertar, eliminar, modificar y buscar informacion en nuestra base de datos
--  Una DB va a estar generada con tablas
--  Campo - es un espacio de almacenamiento para un dato en particular
--  Registro - Un registro es toda la información de un elemento que se almacena en un archivo o tabla 
--  Tabla - Una tabla de base de datos es la estructura principal y más general que existe para almacenar información. En concreto una tabla se divide en filas y columnas:
--  En MYSQL existen 2 tipos de engine para tablas
--  1)myISAM - tablas planas, son como si fuera a trabajar datos en excel
--  2)InnoDB - tablas relacionales, son como si fuera a trabajar datos en Access
-- Todas las palabras reservadas deben ir en MAYUS
CREATE DATABASE mis_contactos;

USE mis_contactos;

-- Los VARCHAR se van dimensionando dependiendo del # de caracteres agregados
-- Con VARCHAR no se pueden hacer operaciones
-- Toda tabvla debe tener un campo clave PRIMARY KEY
CREATE TABLE contactos(
    email VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    sexo CHAR(1),
    nacimiento DATE,
    telefono VARCHAR(13),
    pais VARCHAR(50) NOT NULL,
    imagen VARCHAR(50),
    PRIMARY KEY(email),
    FULLTEXT KEY buscador(email, nombre, sexo, telefono, pais)
);

-- A los tipo de datos INT les puedo asignar AI
CREATE TABLE pais(
    id_pais INT NOT NULL AUTO_INCREMENT,
    pais VARCHAR(50) NOT NULL,
    PRIMARY KEY(id_pais)
);

INSERT INTO
    pais(id_pais, pais)
VALUES
    (1, "México"),
    (2, "Colombia"),
    (3, "Guatemala"),
    (4, "España"),
    (5, "Brasil"),
    (6, "Uruguay"),
    (7, "Perú"),
    (8, "Argentina"),
    (9, "Chile"),
    (10, "Paraguay"),
    (11, "Honduras"),
    (12, "El Salvador"),
    (13, "Nicaragua"),
    (14, "Costa Rica"),
    (15, "Panamá"),
    (16, "Venezuela"),
    (17, "Ecuador"),
    (18, "Bolivia"),
    (19, "Canada"),
    (20, "Estados Unidos"),
    (21, "Groenlandia"),
    (22, "República Dominicana"),
    (23, "Haití"),
    (24, "Cuba"),
    (25, "Belice"),
    (26, "Inglaterra"),
    (27, "Francia"),
    (28, "Alemania"),
    (29, "Italia"),
    (30, "Japón"),
    (31, "China"),
    (32, "Egipto"),
    (33, "Sudafrica"),
    (34, "Australia"),
    (35, "Nueva Zelanda");