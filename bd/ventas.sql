Create DATABASE ventas;
use ventas;
CREATE Table usuarios(
        id_usuario int auto_increment,
        nombre VARCHAR(40),
        apellido VARCHAR(40),
        username VARCHAR(20),
        password VARCHAR(500),
        fechaCaptura date,
        PRIMARY KEY(id_usuario)
);

CREATE Table imagenes(
    id_imagene in auto_increment,
    nombre VARCHAR(40),
    ruta VARCHAR(500),
    fechaSubida DATE,
    PRIMARY KEY(id_imagenes)
);

CREATE TABLE producto(
    id_producto int auto_increment,
    id_imagen int not null,
    nombre VARCHAR(50),
        T20 int,
    t20medio int,    
        T21 int,
    t21medio int,
        T22 int,
    t22medio int,
        T23 int,
    t23medio int,
        T24 int,
    t24medio int,
        T25 int,
    t25medio int,
        T26 int,
    t26medio int,
        T27 int,
    t27medio int,
        T28 int,
    t28medio int,
        T29 int,
    t29medio int,
        T30 int,
    t30medio int,
    precio float,
    fechaCaptura date,
    PRIMARY KEY(id_producto)
);

create Table ventas(
    id_venta inc NOT NULL,
    id_cliente int,
    id_producto,
    precio float,
    fechaCompra DATE
);