create database Rabobank;
use Rabobank;

create table usuario(

nombre varchar(30),
apellido varchar(30),
email varchar(70),
dni varchar(15) primary key,
fecha_nac date,
direccion varchar(50),
provincia varchar(40),
pais varchar(20),
ciudad varchar(40),
codigo_postal varchar(50),
foto longblob,
contrasena varchar(190),
telefono int
);

create table cuenta(
id_cuenta int auto_increment primary key,
saldo float,
iban varchar(50),
dni varchar(15),
foreign key (dni ) references  usuario(dni )
);

create table prestamos(
id_prestamo int auto_increment primary key,
concepto varchar(50),
cantidad float,
interes varchar(50),
plazo varchar(50),
id_cuenta int,
foreign key (id_cuenta) references  cuenta(id_cuenta)
);
  
create table movimiento(
id_movimiento int auto_increment primary key,
concepto varchar(30),
cantidad DECIMAL(10, 2),
fecha DATE,
hora TIME,
id_cuenta int,
foreign key (id_cuenta) references  cuenta(id_cuenta)
);

create table chat(
id_chat int auto_increment primary key,
asunto varchar(20),
mensaje varchar(120),
nombre_destinatario varchar(20),
dni  varchar(15),
foreign key (dni) references  usuario(dni)
);
 
select * from usuario;
select * from cuenta;
insert into usuario (nombre,dni,contrasena) values ('admin', '111111111Q','admin');


