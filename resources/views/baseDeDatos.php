<!-- resources/views/database-info.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Info</title>
</head>
<body>
    <h1 align=center>Información de Base de Datos "Teziuapp"</h1>

    <pre>

create database teziuapp;

use teziuapp;

create table profiles(
	profile_id int not null auto_increment,
	profile varchar(20) not null,
	description varchar(100),
	status boolean default true,
	created_at datetime,
	updated_at datetime null,
	deleted_at datetime null,
	primary key(profile_id)
);


create table users(
	users_id int not null auto_increment,
	username varchar(50),
	password varchar(150),
	status boolean,
	profile int not null,
	index(profile),
	created_at datetime,
	updated_at datetime null,
	deleted_at datetime null,
	foreign key(profile) references profiles(profile_id),
	primary key(users_id)
);

create table userinfo(
	userinfo_id int not null auto_increment,
    users_id int,
	name varchar(50),
	lastname varchar(80),
	birthday date null,
	gender char,
	phone varchar(15) null,
	bio text null,
	website varchar(255) null,
	status boolean default true,
	created_at datetime,
	updated_at datetime null,
	deleted_at datetime null,
	FOREIGN KEY (users_id) REFERENCES users(users_id),
	primary key(userinfo_id)
);


-- Tabla Hoteles (1:M con usuarios)
CREATE TABLE Hoteles (
    hotel_id INT not null auto_increment PRIMARY KEY,
	users_id int,
    nombre_hotel VARCHAR(255),
    direccion VARCHAR(255),
    telefono VARCHAR(20),
    precio_hospedaje DOUBLE,
    descripcion TEXT,
    estrellas INT,
    created_at datetime,
	updated_at datetime null,
	deleted_at datetime null,
    FOREIGN KEY (users_id) REFERENCES users(users_id)
);

-- Tabla Gastronomía (1:M con usuarios)
CREATE TABLE Gastronomia (
    gastronomia_id INT not null auto_increment PRIMARY KEY,
	users_id int,
    nombre_restaurante VARCHAR(255),
    tipo_comida VARCHAR(255),
    tipo_cocina VARCHAR(255),
    capacidad int,
    direccion VARCHAR(255),
    telefono VARCHAR(20),
    descripcion TEXT,
    created_at datetime,
	updated_at datetime null,
	deleted_at datetime null,
    FOREIGN KEY (users_id) REFERENCES users(users_id)
);

-- Tabla Lugares Turísticos (1:M con usuarios)
CREATE TABLE LugaresTuristicos (
    lugar_id INT not null auto_increment PRIMARY KEY,
    users_id int,
    nombre_lugar VARCHAR(255),
    descripcion TEXT,
    ubicacion VARCHAR(255),
    horario VARCHAR(255),
    costo_entrada DECIMAL(10, 2),
    created_at datetime,
	updated_at datetime null,
	deleted_at datetime null,
    FOREIGN KEY (users_id) REFERENCES users(users_id)
);


-- Tabla Festividades (1:M con usuarios)
CREATE TABLE Festividades (
    festividad_id INT not null auto_increment PRIMARY KEY ,
	users_id int,
    nombre_festividad VARCHAR(255),
	descripcion TEXT,
    precio DOUBLE,
    atracciones VARCHAR (255),
    fecha date not null,
    created_at datetime null,
	updated_at datetime null,
	deleted_at datetime null,
    FOREIGN KEY (users_id) REFERENCES users(users_id)
);

-- Tabla Relación Hotel-Gastronomía (M:M)
CREATE TABLE Hotel_Gastronomia (
    hotel_id INT,
    gastronomia_id INT,
    created_at datetime,
	updated_at datetime null,
	deleted_at datetime null,
    FOREIGN KEY (hotel_id) REFERENCES Hoteles(hotel_id),
    FOREIGN KEY (gastronomia_id) REFERENCES Gastronomia(gastronomia_id)
);

-- Tabla Relación Lugares Turísticos-Festividades (M:M)
CREATE TABLE LugaresTuristicos_Festividades (
    lugar_id INT,
    festividad_id INT,
    created_at datetime,
	updated_at datetime null,
	deleted_at datetime null,
    FOREIGN KEY (lugar_id) REFERENCES LugaresTuristicos(lugar_id),
    FOREIGN KEY (festividad_id) REFERENCES Festividades(festividad_id)
);



-- Insertar perfiles
INSERT INTO profiles (profile, description, created_at) VALUES
    ('Administrador1', 'Administrador de hoteles',  '2023-08-29 09:00:03'),
	('Administrador2', 'Administrador de Gastronomia',  '2023-08-29 09:00:03'),
    ('Administrador3', 'Administrador de lugares turisticos',  '2023-08-29 09:00:03'),
	('Administrador4', 'Administrador de festividades',  '2023-08-29 09:00:03');

-- insertar datos en tabla users
INSERT INTO users(username, password, status, profile, created_at)
	VALUES('Mari', '1234', 1, 1, '2023-08-29 9:40:00'),
    ('chucho', '1234', 1, 2, '2023-08-29 9:40:00'),
    ('pepe', '1234', 1, 3, '2023-08-29 9:40:00'),
    ('paco', '1234', 1, 4, '2023-08-29 9:40:00'),
    ('juanito', '1234', 1, 4, '2023-08-29 9:40:00'),
    ('rodo', '1234', 1, 3, '2023-08-29 9:40:00'),
    ('fer', '1234', 1, 2, '2023-08-29 9:40:00'),
    ('peter', '1234', 1, 1, '2023-08-29 9:40:00');

    select * from users;

-- insertar datos en userinfo
INSERT INTO userinfo (userinfo_id, users_id, name, lastname, birthday, gender, phone, bio, website, created_at)
VALUES (1,8, 'Maria', 'Pilar', '2000-08-01', 'm', '2312324724', 'trabajador de TeziuApp', 'maria@gmail', '2023-10-14 10:20:00'),
(2, 7,'Jesus', 'Sanchez', '2004-09-14', 'h', '2311386236', 'trabajador de TeziuApp', 'jesus@gmail', '2023-10-13 10:10:00'),
(3, 6,'Jose', 'Roque', '1985-02-23', 'h', '2312066656', 'trabajador de TeziuApp', 'jose@gmail', '2023-09-12 10:13:00'),
(4, 5, 'Francisco', 'Morales', '1993-03-15', 'h', '231206687', 'trabajador de TeziuApp', 'francisco@gmail', '2023-09-04 10:06:00'),
(5, 4,'Juan', 'Martinez', '1999-10-06', 'h', '2312077756', 'trabajador de TeziuApp', 'juan@gmail', '2023-10-10 10:06:00'),
(6, 3,'Rodolfo', 'contreras', '2001-12-10', 'h', '2312098156', 'trabajador de TeziuApp', 'rodolfo@gmail', '2023-09-05 10:15:00'),
(7, 2,'Fernanda', 'Hernandez', '2001-09-26', 'm', '2312024856', 'trabajador de TeziuApp', 'fernanda@gmail', '2023-10-14 10:22:00'),
(8, 1,'Pedro', 'Cruz', '1989-01-05', 'h', '2312083456', 'trabajador de TeziuApp', 'pedro@gmail', '2023-10-15 10:26:00');

select * from userinfo;

SELECT users.*, profiles.profile
FROM users
JOIN profiles ON users.profile = profiles.profile_id;

-- Insertar datos en la tabla Hoteles (1:M con Administradores)
INSERT INTO Hoteles (hotel_id, users_id, nombre_hotel, direccion, telefono, precio_hospedaje, descripcion, estrellas) VALUES
(1, 1, 'Hotel central', 'Av. Miguel Hidalgo No. 801 Centro, 73800 Teziutlán, México –', '123-456-7890','230.00','El Hotel Central se encuentra en el centro de Teziutlán, Puebla, alberga un restaurante que sirve desayunos gratuitos y un gimnasio equipado', 4),
(2, 1, 'Hotel talavera', 'Calle Hidalgo #1302 esquina con Calle Mina, colonia centro, 73800', '987-654-3210', '354.40', 'El Hotel Talavera Teziutlan se encuentra en Teziutlán y cuenta con terraza. Cuenta con restaurante, servicio de habitaciones, recepción 24 horas y WiFi gratuita', 5),
(3, 1, 'Hotel colonial', 'centro de Teziutlán', '123-456-2687', '2650.80', 'El Hotel Colonial cuenta con restaurante y se encuentra en el centro de Teziutlán, a solo 30 metros de la histórica catedral. ', 5),
(4, 1, 'Hotel suites teziutlan', 'León Guzmán 303, 73800 Teziutlán, México ', '987-654-3210', '350.00','El Hotel Suites Teziutlan ofrece estudios y apartamentos funcionales con conexión Wi-Fi gratuita y zona de cocina en el centro de Teziutlán.', 5),
(5, 1, 'Hotel danini', 'centro de Teziutlán', '231-578-7890','298.90', 'El Hotel Danini se encuentra en Teziutlán y ofrece jardín, salón compartido, restaurante y bar. Este hotel de 4 estrellas ofrece WiFi gratuita, servicio de habitaciones y recepción 24 horas.', 5);

select * from Hoteles;

-- Insertar datos en la tabla Gastronomía (1:M con Administradores)
INSERT INTO Gastronomia (gastronomia_id, users_id, nombre_restaurante, tipo_comida, tipo_cocina, capacidad, direccion, telefono, descripcion) VALUES
(1, 2, 'Restaurante las brasas', 'Comida tipica Mexicana', 'cocina de vanguardia','250','Dirección Restaurante 1', '111-222-3333', 'Descripción Restaurante 1'),
(2, 2, 'Restaurante los quetzales', 'Comida Mexicana', 'alta cocina','300','Dirección Restaurante 1', '222-333-4444', 'Descripción Restaurante 2'),
(3, 2, 'Restaurante mi viejo cafe', 'Desayunos y comida mexicana','alta cocina','200', 'Dirección Restaurante 1', '333-444-5555', 'Descripción Restaurante 3'),
(4, 2, 'tlayoreria las tres Marias', 'Comida tradicional Mexicana','cocina tradicional', '150', 'Dirección Restaurante 1', '444-555-6666', 'Descripción Restaurante 4'),
(5, 2, 'El Santuario', 'Desayuno y comida internacional', 'cocina de vanguardia', '50', 'Dirección Restaurante 2', '555-666-7777', 'Descripción Restaurante 5');

select * from Gastronomia;

INSERT INTO LugaresTuristicos (lugar_id, users_id, nombre_lugar, descripcion, ubicacion, horario, costo_entrada) VALUES
(1, 3, 'Santuario El Carmen', 'Esta capilla está construida sobre un pequeño cerro y está ubicada en el barrio del mismo nombre, uno de los más antiguos y tradicionales de Teziutlán. Fue construida en el siglo XVIII, de tipo colonial renacentista clásico. ', 'Ubicación Lugar 1', 'Horario Lugar 1', 00.00),
(2, 3, 'Paseo Altagracia', 'Éste espacio de recreación rinde homenaje a una heroína Teziuteca que, tras años en el olvido la historia le da el lugar que merece.', 'Ubicación Lugar 1', 'Horario Lugar 1', 10.00),
(3, 3, 'Antiguo Pueblo Minero', 'La naturaleza y el tiempo se encargaron de inundar los túneles y sepultar las historias de las duras jornadas de trabajo.', 'Ubicación Lugar 1', 'Horario Lugar 1', 10.00),
(4, 3, 'Mercado Victoria', 'Este importante centro de abastos fue uno de los mas modernos de su época, y concentraba en un solo lugar la venta de frutas, verduras, carnicería, ropa y alimentos preparados con los tradicionales comedores.', 'Ubicación Lugar 1', 'Horario Lugar 1', 00.00),
(5, 3, 'Plaza de Toros', 'El pueblo Teziuteco junto con su presidente municipal Sr. Silverio Gómez P. y el gobernador del estado se organizan y planean la construcción de una nueva plaza de toros, misma que se inauguraría oficialmente el 1° de enero de 1954, partiendo plaza Juan Silveti y Jorge Aguilar “el Ranchero”, cortando en dicho festejo un total de cuatro orejas y un rabo.', 'Ubicación Lugar 1', 'Horario Lugar 1', 00.00),
(6, 3, 'Casa de la Cultura', 'La “Casa Toral” como se le conoció en la segunda mitad del Siglo XX es una de las antiguas casonas más antiguas y emblemáticas del centro de Teziutlán. Construida a principios del Siglo XIX, conserva todas lás características de la arquitectura serrana, contando con locales comerciales que daban a la calle, en la planta baja un amplio patio, bodegas, establos y casa habitación en la planta alta. ', 'Ubicación Lugar 1', 'Horario Lugar 1', 00.00),
(7, 3, 'Ruta del Cafe', 'La experiencia incluye una visita a las fincas productoras, cuyos propietarios se han preocupado por capacitarse para mostrar a sus visitantes el proceso del café, iniciando el recorrido por todo el proceso cafetalero', 'Ubicación Lugar 1', 'Horario Lugar 1', 15.00),
(8, 3, 'Bosque de Niebla', 'El ejido Atoluca es custodiado por 83 ejidatarios, de los cuales 26 son mujeres, 37 hombres y 20 posesionarios. Cuenta con 1,250 hectáreas de bosque mesófilo, de las cuales el 75% es área protegida y el 25% está dividido en parcelas con cultivos como aguacate, blue berries, limón, durazno, café y maíz.', 'Ubicación Lugar 1', 'Horario Lugar 1', 10.00),
(9, 3, 'Anturalia', 'Anturalia es una Asociación Civil de mujeres de la comunidad de Coyopol, en la Junta Auxiliar de San Juan Acateno, dedicadas al cultivo y venta del Anturio, flor importada de los Paises Bajos. Cuentan con cuatro variedades, rosa, roja, champagne y momens, logrando la comercialización de estas flores a través de una florería local que se encarga de su distribución.', 'Ubicación Lugar 1', 'Horario Lugar 1', 20.00),
(10, 3, 'Rancho escondido', 'Rancho Escondido es un espacio 100% natural que promueve la producción orgánica y economía sustentable bajo 5 líneas temáticas: educación y esparcimiento, tradiciones y cultura, usos y costumbres en las labores del campo, gastronomía local, y fruticultura y cultivos alternativos.', 'Ubicación Lugar 2', 'Horario Lugar 2', 30.00);

select * from LugaresTuristicos;

INSERT INTO Festividades (festividad_id, users_id, nombre_festividad,descripcion, precio, atracciones, fecha, created_at, updated_at, deleted_at) VALUES
(1, 1, 'Feria del taco','Descripción Festividad 1','100.00','tacos gratis','2023-10-28', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'Recorrido de la Virgen del Carmen','Descripción Festividad 1','00.00','Danzas', '2023-06-07', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'Feria de teziutlan', 'Descripción Festividad 1', '100.00','Juegos Mecanicos','2023-08-13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'Encuentro de Pueblos Magicos', 'Descripción Festividad 1', '00.00','Musica y comida','2023-10-13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'Aniversario de la fundación de teziutlán','Descripción Festividad 1', '00.00','Encuentros musicales', '2023-08-15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

select * from Festividades;

-- vista1 para ver información de usuarios
CREATE VIEW user_info AS
SELECT userinfo.*, users.username
FROM userinfo
JOIN users ON userinfo.users_id = users.users_id;

SELECT * FROM user_info;

-- vista2 de los hoteles con la informacion de usuario
CREATE VIEW hoteles_users AS
SELECT h.hotel_id, h.nombre_hotel, h.direccion, h.telefono, h.precio_hospedaje, h.descripcion, h.estrellas, u.username AS admin_username
FROM Hoteles h
JOIN users u ON h.users_id = u.users_id;

SELECT * FROM hoteles_users;

-- vista3 de información de los usuarios y los restaurantes de gastronomía que admin.
CREATE VIEW users_gastronomia AS
SELECT u.users_id, u.username, u.status AS user_status, p.profile, g.gastronomia_id, g.nombre_restaurante, g.tipo_comida, g.tipo_cocina, g.capacidad, g.direccion, g.telefono, g.descripcion
FROM users u
JOIN profiles p ON u.profile = p.profile_id
LEFT JOIN Gastronomia g ON u.users_id = g.users_id;

SELECT * FROM users_gastronomia;


-- vista4 de información de lugares turísticos junto con los usuarios asociados
CREATE VIEW lugares_users AS
SELECT lt.lugar_id, lt.nombre_lugar, lt.descripcion, lt.ubicacion, lt.horario, lt.costo_entrada, u.username AS owner_username
FROM LugaresTuristicos lt
JOIN users u ON lt.users_id = u.users_id;

SELECT * FROM lugares_users;

-- vista5 da información de festividades
CREATE VIEW vista_festividades AS
SELECT festividad_id, nombre_festividad, descripcion, precio, atracciones, fecha
FROM Festividades;

SELECT * FROM vista_festividades;



-- CONSULTAS

-- consulta 1: Selecciona todos los usuarios con información de su perfil
SELECT users.*, profiles.profile
FROM users
JOIN profiles ON users.profile = profiles.profile_id;

-- consulta 2: Selecciona todos los hoteles con información de su administrador
SELECT Hoteles.*, users.username AS admin_username
FROM Hoteles
JOIN users ON Hoteles.users_id = users.users_id;

-- consulta 3: Selecciona todos los lugares turísticos con información de su administrador
SELECT LugaresTuristicos.*, users.username AS admin_username
FROM LugaresTuristicos
JOIN users ON LugaresTuristicos.users_id = users.users_id;

-- consulta 4: Selecciona todas las festividades con información de su organizador
SELECT Festividades.*, users.username AS organizer_username
FROM Festividades
JOIN users ON Festividades.users_id = users.users_id;


    </pre>
</body>
</html>
