create database Rabobank;
use Rabobank;

create table usuario(
id_usuario int auto_increment primary key,
nombre varchar(30),
apellido varchar(30),
email varchar(70),
dni varchar(15),
fecha_nac varchar(20),
direccion varchar(50),
provincia varchar(40),
pais varchar(20),
ciudad varchar(40),
codigo_postal int,
iban varchar(150),
 foto longblob,
 contrasena varchar(190),
 telefono int,
 isadmin varchar(20)
);



