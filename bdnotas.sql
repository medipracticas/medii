CREATE TABLE modulos(
	id_modulo INT NOT NULL AUTO_INCREMENT,
	modulo varchar(24) NOT NULL,
	estudio varchar(50) NOT NULL,
	tipo varchar(12) NOT NULL,
	getvar varchar(24) NOT NULL,
	posicion INT NOT NULL,
	primary key(id_modulo)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE apartados(
	id_apartado INT NOT NULL AUTO_INCREMENT,
	id_modulo INT NOT NULL,
	apartado varchar(140) NOT NULL,
	posicion int NOT NULL,
	primary key(id_apartado)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE subapartados(
	id_subapartado INT NOT NULL AUTO_INCREMENT,
	id_apartado INT NOT NULL,
	subapartado varchar(100),
	texto_borrador LONGTEXT NOT NULL,
	texto_limpio LONGTEXT NOT NULL,
	posicion INT NOT NULL,
	primary key(id_subapartado)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE borrador(
	id_borrador INT NOT NULL AUTO_INCREMENT,
	id_apartado INT NOT NULL,
	texto LONGTEXT NOT NULL,
	primary key(id_borrador)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE limpio(
	id_limpio INT NOT NULL AUTO_INCREMENT,
	id_apartado INT NOT NULL,
	texto LONGTEXT NOT NULL,
	primary key(id_limpio)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE guia_amplia(
	id_guia_amplia INT NOT NULL AUTO_INCREMENT,
	id_apartado INT NOT NULL,
	texto LONGTEXT NOT NULL,
	primary key(id_guia_amplia)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE guia_general(
	id_guia_general INT NOT NULL AUTO_INCREMENT,
	id_apartado INT NOT NULL,
	texto LONGTEXT NOT NULL,
	primary key(id_guia_general)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE notas_extra(
	id_nota_extra INT NOT NULL AUTO_INCREMENT,
	id_apartado INT NOT NULL,
	texto LONGTEXT NOT NULL,
	primary key(id_nota_extra)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE comentarios_notas(
	id_comentario INT NOT NULL AUTO_INCREMENT,
	tipo varchar(25) NOT NULL,
	id_nota INT NOT NULL,
	comentario varchar(4000),
	registro datetime NOT NULL,
	primary key(id_comentario)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE vitacora_notas(
	id_vitacora INT NOT NULL AUTO_INCREMENT,
	tipo varchar(25) NOT NULL,
	id_nota INT NOT NULL,
	registro datetime NOT NULL,
	primary key(id_vitacora)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;


