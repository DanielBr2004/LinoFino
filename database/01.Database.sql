Create database linofino;
use linofino;
create table personas(
  idpersona         int AUTO_INCREMENT PRIMARY KEY,
  apellidos         VARCHAR(40) 	NOT NULL,
  nombres           VARCHAR(40) 	NOT NULL,
  telefono          char(9)			not NULL,
  DNI               CHAR(8) 		NOT NULL,
  direccion 		varchar(100) 	null,
  CONSTRAINT uk_dni_per UNIQUE (DNI)
)ENGINE = INNODB;


CREATE TABLE usuarios(
  idusuario         INT AUTO_INCREMENT PRIMARY KEY,
  idpersona         INT NOT NULL,
  nomusuario        VARCHAR(30) NOT NULL,
  claveacceso       VARCHAR(70) NOT NULL,
  perfil            CHAR(3) NOT NULL,
  CONSTRAINT fk_idpersona_usu Foreign Key (idpersona) REFERENCES personas(idpersona),
  CONSTRAINT uk_nomusuario_usu UNIQUE (nomusuario),
  CONSTRAINT ck_perfil_usu CHECK (perfil IN ('ADM','COL','SUP'))
)ENGINE = INNODB;

CREATE TABLE tareas(
  idtarea           INT AUTO_INCREMENT PRIMARY KEY,
  nombretarea       VARCHAR(40) NOT NULL,
  precio            DECIMAL(5,2) NOT NULL,
  idusuregistra     INT NOT NULL,
  idusuactualiza    INT NULL,
  create_at         DATETIME NOT NULL DEFAULT NOW(),
  update_at         DATETIME NULL,
  constraint uk_nombretarea_tar UNIQUE (nombretarea),
  constraint ck_precio_tar CHECK (precio>0),
  constraint fk_idusuregistra_tar FOREIGN KEY (idusuregistra) REFERENCES usuarios(idusuario),
  constraint fk_idusuactualiza_tar FOREIGN KEY (idusuactualiza) REFERENCES usuarios (idusuario)
)ENGINE = INNODB;

CREATE TABLE jornadas(
  idjornada         INT AUTO_INCREMENT PRIMARY KEY,
  idpersona         INT NOT NULL,
  horainicio        DATETIME NOT NULL,
  horatermino       DATETIME NULL,
  CONSTRAINT fk_idpersona_tar FOREIGN KEY (idpersona)REFERENCES personas(idpersona)
)ENGINE = INNODB;

CREATE TABLE detallestareas(
  idDetalle         INT AUTO_INCREMENT PRIMARY KEY,
  idususupervisor   INT NOT NULL,
  idJornada         INT NOT NULL,
  idTarea           INT NOT NULL,
  cantidad          SMALLINT NOT NULL,
  preciotarea       DECIMAL(5,2) NOT NULL,
  idusucaja         INT NULL,
  pagado            CHAR(1) NOT NULL DEFAULT 'N',
  create_at         DATETIME NOT NULL DEFAULT NOW(),
  update_at         DATETIME NULL,
  constraint fk_idususupervisor_dta FOREIGN KEY (idususupervisor) REFERENCES usuarios(idusuario),
  constraint fk_idjornada_dta FOREIGN KEY (idjornada) REFERENCES jornadas (idjornada),
  constraint fk_idtarea_dta FOREIGN KEY(idtarea) REFERENCES tareas(idtarea),
  constraint fk_idusucaja_data FOREIGN KEY (idusucaja) REFERENCES usuarios (idusuario),
  constraint ck_pagado_dta CHECK (pagado IN ('S','N'))
)ENGINE = INNODB;

