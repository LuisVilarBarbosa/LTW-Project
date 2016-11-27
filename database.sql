CREATE TABLE Restaurant(
	restaurantId	INTEGER PRIMARY KEY AUTOINCREMENT,
	name			TEXT	NOT NULL,
	description		TEXT,
	image_dir			TEXT,
	address			TEXT);

CREATE TABLE User(
	userId	        INTEGER	PRIMARY KEY AUTOINCREMENT,
	name 			TEXT,
	image_dir			TEXT,
	user			TEXT	NOT NULL,
	password		TEXT	NOT NULL);

CREATE TABLE RestaurantComment(
	commentId		INTEGER	PRIMARY KEY AUTOINCREMENT,
	userId			TEXT	NOT NULL,
	restaurantId	TEXT	NOT NULL,
	comment		TEXT,
	score			INTEGER,
	FOREIGN KEY(userId) REFERENCES User(userId),
	FOREIGN KEY(restaurantId) REFERENCES Restaurant(restaurantId));
