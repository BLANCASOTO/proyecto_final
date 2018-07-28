create database integradora;
	use integradora;

	create table tipo(
		id_tipo_usuario int(1) not null auto_increment primary key,
		tipo_usuario char(13)
		);

	insert into tipos_usuarios values (1,'usuario'),(2,'administrador');

	create table usuario(
		id_usuario int(2) not null auto_increment primary key,
		nombre_usuario varchar(20),
		app_pat varchar(20),
		app_mat varchar(20),
		telefono int(14),
		genero char,
		**estado booleano(),** //colocar valor en parentesis
		ultima_actualizacion datetime
		fk_tipo int(1),
		foreign key (fk_tipo) references tipos(id_tipo)
		);

	insert into usuarios(nombre_usuario,app_pat,app_mat,telefono,genero,estado,ultima_actualizacion,fk_tipo_usuarios) values
		
		('Carmelita ','perez','torres',2225148 ,'f','activo',,'','perez');

	create table direccion(
		id_direccion int(99) not null auto_increment primary key,
		latitud decimal(a,2)
		longitud decimal(a,2)
		);

	insert into direccion (direccion) values(1,'626'),(2,'62655');

	create table local(
		id_local(4) not null auto_increment primary key,
		nombre_local varchar(35),
		referencias text,
		fk_local int(99),
		fk_id_direccion int(99),
		fk_usuario int(99)
		foreign key (fk_local) references local(id_local),
		foreign key (fk_direccion) references direccion(id_direccion),
		foreign key (fk_usuario) references usuarios(id_usuario)
		);

	

	create table local_productos(
		id_local_productos int(3) not null auto_increment primary key,
		fk_local int(3),
		fk_producto int(4),
		fk_precio int(4),
		foreign key (fk_local) references local(id_local),
		foreign key (fk_producto) references producto(id_producto)
		foreign key (fk_precio) references precio(id_precio)
		);

	insert into local_productos(fk_local,fk_producto,fk_precio) values (1,1),(2,1),(2,2);

	create table precio(
		id_precio int(3) not null auto_increment primary key,
		fecha_precio datatime,
		precio (5,2)
		);

		create producto(
		id_producto int(2) not null auto_increment primary key,
		nombre_producto varchar(20),
		calidad int(1),
		fk_tipo_venta int(1),
		foreign key (fk_tipo_venta) references tipo_venta(id_tipo_venta)
		);

create table tipo_venta(
		id_tipo_venta int(1) not null auto_increment primary key,
		descripcion varchar(13)
		);
