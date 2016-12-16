CREATE TABLE users(
	userId		INTEGER	PRIMARY KEY AUTOINCREMENT,
	name 		TEXT,
	image_dir	TEXT,
	username		TEXT	NOT NULL UNIQUE,
	password	TEXT	NOT NULL);

INSERT INTO users VALUES (1,'Fatima Costa','uploads/1-img2.jpg','up123','$2y$15$tz1XHyUOUKlD8Gv2jj2Ktu8J.xUEePZOdWoBkQ4tAhWHbvLVf0DQS');
INSERT INTO users VALUES (2,'Filipa Nanda','uploads/1-img1.jpeg','filipa','$2y$15$KxdXyC10dR7TbnwPsMLUhuo9ObatqXisB5oJJZUNXNPuOH7fOu54i');
INSERT INTO users VALUES (3,'Daniela Albertina','uploads/1-example_user.jpg','daniela','$2y$15$BD44.ZYku.PTuxytVwp0r./kFH7lnrXK42muJfomuNgVCms181j/y');

CREATE TABLE restaurants(
	restaurantId	INTEGER PRIMARY KEY AUTOINCREMENT,
	name		TEXT	NOT NULL,
	description	TEXT,
	image_dir	TEXT,
	address		TEXT,
	ownerId		INTEGER	NOT NULL,
	FOREIGN KEY(ownerId) REFERENCES User(userId));
	
INSERT INTO restaurants VALUES (1,'Taberna do ganso','A melhor em Baguim do Monte','https://s-media-cache-ak0.pinimg.com/originals/9a/82/8d/9a828d0fc00a2540d35339e3aba5bfcc.jpg','Rua S.João nº317 chavao',2);
INSERT INTO restaurants VALUES (2,'Tapas da eira','Nao ha melhores tapas do que aqui','http://www.douropalace.com/Images/Restaurant/Eira-Bar/Gallery/01.jpg','Rua Martim Moniz-Lisboa',2);

CREATE TABLE restaurantReviews(
	reviewId	INTEGER	PRIMARY KEY AUTOINCREMENT,
	userId		TEXT	NOT NULL,
	restaurantId	TEXT	NOT NULL,
	comment		TEXT,
	score		INTEGER	NOT NULL,
	answer		TEXT,
	FOREIGN KEY(userId) REFERENCES User(userId),
	FOREIGN KEY(restaurantId) REFERENCES Restaurant(restaurantId));

INSERT INTO restaurantReviews VALUES (1,'1','2','',3,'Pena nao ter dado mais feedback');
INSERT INTO restaurantReviews VALUES (2,'3','1','Gostei muito do atendimento',4,'Obrigado');
INSERT INTO restaurantReviews VALUES (3,'2','2','',5,NULL);
