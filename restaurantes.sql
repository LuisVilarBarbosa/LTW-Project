

CREATE TABLE Restaurante(
	idRestaurante		INTEGER PRIMARY KEY,
	nome			TEXT	NOT NULL,
	imagem			TEXT,
	descicao		TEXT,
	morada			TEXT);

CREATE TABLE Utilizador(
	idUtilizador	        INTEGER	PRIMARY KEY,
	nome 			TEXT,
	imagem			TEXT,
	utilizador		TEXT	NOT NULL,
	password		TEXT,   NOT NULL,);

CREATE TABLE Comentario(
	idComentario		INTEGER	PRIMARY KEY,
	idUtilizador		TEXT	NOT NULL,
	idRestaurante		TEXT	NOT NULL,
	FOREIGN KEY(numero) REFERENCES Sala(numero));
