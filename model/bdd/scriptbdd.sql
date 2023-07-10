-- creación de la base de datos. Primero acceder con el usuario root:
-- mysql -u root -p
create database mmarketdemo;
grant all privileges on mmarketdemo.* to curso@localhost identified by "curso";

-- creación de tablas, para ello reconectarse con el usuario curso
-- (o el que corresponda)
-- mysql -u curso mmarketdemo -p

-- tabla de usuarios del sistema:
create table seg_usuario(
    id_seg_usuario serial primary key,
    apellidos varchar(100) not null,
    nombres varchar(100) not null,
    correo varchar(100) not null unique,
    clave varchar(100) not null
    );

-- datos para el usuario administrador:
insert into seg_usuario(apellidos,nombres,correo,clave) values('Administrador','MiniMarketDemo','admin@mmarketdemo.com','admin');

-- tabla para la bitacora de auditoria:
create table aud_bitacora(
    id_aud_bitacora serial primary key,
    fecha_evento timestamp not null,
    ip_origen varchar(20),
    correo_origen varchar(100),
    mensaje_evento varchar(500) not null
    );

    
