CREATE TABLE usuario( id_user INT NOT NULL PRIMARY key,
                      nombre VARCHAR(100) NOT null,
                      apellidop VARCHAR (100) NOT NULL,
                      apellidom VARCHAR(100) NOT NULL,
                      avatar VARCHAR(100) NOT NULL,
                      puesto VARCHAR(100) NOT NULL,
                      credencial VARCHAR(100) NOT NULL,
                      correo VARCHAR(70) NOT NULL,
                      password VARCHAR(100) NOT NULL,
                      tipo_usuario INT not null,
                      fecha_creado DATE NOT NULL,
                      fecha_login DATE NOT NULL);


CREATE TABLE persona(
  id_persona INT NOT NULL PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  apellidop VARCHAR(100) NOT NULL,
  apellidom VARCHAR(100) NOT NULL,
  credencial1 VARCHAR(100) NOT NULL,
  credencial2 VARCHAR(100) NOT NULL
);


CREATE TABLE cheques(
  folio VARCHAR(100) NOT NULL,
  id_persona INT NOT NULL,
  importe VARCHAR(100) NOT NULL,
  cuenta VARCHAR(100) NOT NULL,
  concepto VARCHAR(200) NOT NULL,
  estado int not null default 0,
  incidente VARCHAR(300),
  imagen  VARCHAR(200),
  fecha_ingreso DATE,
  reporte INT,
  fecha_cheque DATE,
  fecha_pagado DATE,
  CONSTRAINT fk_persona FOREIGN KEY (id_persona) REFERENCES persona (id_persona)
);


CREATE TABLE cuenta(
  id VARCHAR(30) PRIMARY KEY,
  nombre VARCHAR(100),
  iva VARCHAR(10) default 0,
  cargo VARCHAR(20) default 0,
  abono VARCHAR(20) default 0
);


CREATE TABLE cuentas(
	cuenta VARCHAR(15) NOT NULL PRIMARY KEY,
	concepto VARCHAR(50),
	descripcion VARCHAR(50),
  abono VARCHAR(20) default 0,
  iva VARCHAR(10) default 0,
  cargo VARCHAR(20) default 0
);
