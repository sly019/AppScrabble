--Representa la entida letra y sus atributos propios
--ESta tabla debe ser llenada con la información del documento
create table letra(
	id serial not null primary key,
	letra varchar not null,
	puntaje integer not null,
	cantidad integer not null
);

insert into letra (letra, puntaje, cantidad) values 

('A', 1, 12),
('E', 1, 12), 
('O', 1, 9),
('I', 1, 6),
('S', 1, 6),
('N', 1, 5),
('R', 1, 5),
('U', 1, 5),
('L', 1, 4),
('T', 1, 4),
('D', 2, 5),
('G', 2, 5),
('C', 3, 4),
('B', 3, 2),
('M', 3, 2),
('P', 3, 2),
('H', 4, 2),
('F', 4, 1),
('V', 4, 1),
('Y', 4, 1),
('Q', 5, 1),
('J', 8, 1),
('LL', 8, 1),
('Ñ', 8, 1),
('RR', 8, 1),
('X', 8, 1),
('Z', 10, 1);



--Define las cantidades restantes por cada letra para cada juego
create table inventario_letra_juego(
	id serial not null primary key,
	letra_id integer not null,
	cantidad integer not null,
	juego_id integer not null,
	unique(letra_id, cantidad)
);


-- Entidad juego, se crea un registro por cada juego nuevo
create table juego(
	id serial not null primary key,
	activo boolean not null default true
);


-- Asocia a los usuarios con los juegos existentes
create table juego_usuario(
	id serial not null primary key,
	juego_id integer not null,
	orden integer not null,--útil para saber el orden de los turnos
	usuario_id integer not null,
	tiene_turno boolean not null default true,
	a_salido boolean not null default false,
	a_ganado boolean not null default false
);



-- Define que letra a puesto cada usuario para cada juego en el tablero
create table juego_tablero_usuario(
	id serial not null primary key,
	x integer not null,
	y integer not null,
	letra_id integer not null,
	juego_usuario_id integer not null
);


alter table juego_tablero_usuario add constraint fk_juego_tablero_usuario_letra foreign key (letra_id) references letra(id);
alter table inventario_letra_juego add constraint fk_inventario_letra_juego_letra foreign key (letra_id) references letra(id);

alter table inventario_letra_juego add constraint fk_inventario_letra_juego_juego foreign key (juego_id) references juego(id);
alter table juego_usuario add constraint fk_juego_usuario_juego foreign key (juego_id) references juego(id);

alter table juego_usuario add constraint fk_juego_usuario_usuario foreign key (usuario_id) references users(id);
alter table juego_tablero_usuario add constraint fk_juego_tablero_usuario_juego_usuario foreign key (juego_usuario_id) references juego_usuario(id);
