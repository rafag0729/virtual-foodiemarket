CREATE DATABASE miahorro;
USE miahorro;

CREATE TABLE usuarios(
id              int(255) auto_increment not null,
nombre          varchar(120) not null,
apellidos       varchar(200) not null,
celular         varchar(50) not null,
contactoWpp     TINYINT(2),
email           varchar(255) not null,
direccion       varchar(255) not null,
ciudad          varchar(180) not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDB;

CREATE TABLE pedidos(
id                  int(255) auto_increment not null,
usuario_id          int(255) not null,
nombreCombo         varchar(100) not null,
productos           TEXT not null,
numeroCompra        varchar(255) not null,
fechaCompra         DATE,
precio              int(100) not null,
fechaLlegada        DATE,
pagoContraentrega   TINYINT(2) default '1',
estado              varchar(20) default 'Pendiente',
CONSTRAINT pk_pedidos PRIMARY KEY(id),
CONSTRAINT fk_pedido_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
CONSTRAINT uq_numeroCompra UNIQUE(numeroCompra)
)ENGINE=InnoDB;
