create table usuarios(
    id_usuario int not null auto_increment primary key,
    usuario varchar(25) not null unique key,
    nombre varchar(50) not null,
    password varchar(254) not null,
    correo varchar(100)
)