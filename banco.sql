create database Rabobank;
use Rabobank;

create table usuario(
id_usuario int auto_increment primary key,
nombre varchar(30),
apellido varchar(30),
email varchar(70),
dni varchar(15),
fecha_nac date,
direccion varchar(50),
provincia varchar(40),
pais varchar(20),
ciudad varchar(40),
codigo_postal int,
iban int,
 foto longblob,
 contrasena varchar(50),
 telefono int,
 isadmin varchar(20)
);



