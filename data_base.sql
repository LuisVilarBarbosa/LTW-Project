CREATE TABLE Restaurant(
	restaurantId	INTEGER PRIMARY KEY AUTOINCREMENT,
	name			TEXT	NOT NULL,
	image			TEXT,
	description		TEXT,
	address			TEXT,
	score			REAL);

CREATE TABLE User(
	userId	        INTEGER	PRIMARY KEY AUTOINCREMENT,
	name 			TEXT,
	image			TEXT,
	user			TEXT	NOT NULL,
	password		TEXT	NOT NULL);

CREATE TABLE Comment(
	commentId		INTEGER	PRIMARY KEY AUTOINCREMENT,
	userId			TEXT	NOT NULL,
	restaurantId	TEXT	NOT NULL,
	description		TEXT,
	score			INTEGER,
	FOREIGN KEY(userId) REFERENCES User(userId),
	FOREIGN KEY(restaurantId) REFERENCES Restaurant(restaurantId));
