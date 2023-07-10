-- creación de la base de datos. Primero acceder con el usuario root:
-- mysql -u root -p
create database mmarketdemo;
grant all privileges on mmarketdemo.* to curso@localhost identified by "curso";

-- creación de tablas, para ello reconectarse con el usuario curso
-- (o el que corresponda)
-- mysql -u curso mmarketdemo -p
create table seg_usuario(
    -> id_seg_usuario serial primary key,
    -> apellidos varchar(100) not null,
    -> nombres varchar(100) not null,
    -> correo varchar(100) not null unique,
    -> clave varchar(100) not null
    -> );

-- datos para el usuario administrador:
insert into seg_usuario(apellidos,nombres,correo,clave) values('Adminstrador','MiniMarketDemo','admin@mmarketdemo.com','admin');


    
