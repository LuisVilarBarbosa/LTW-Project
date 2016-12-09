CREATE TABLE restaurants(
	restaurantId	INTEGER PRIMARY KEY AUTOINCREMENT,
	name		TEXT	NOT NULL,
	description	TEXT,
	image_dir	TEXT,
	address		TEXT,
	ownerId		INTEGER	NOT NULL,
	FOREIGN KEY(ownerId) REFERENCES User(userId));

CREATE TABLE users(
	userId		INTEGER	PRIMARY KEY AUTOINCREMENT,
	name 		TEXT,
	image_dir	TEXT,
	user		TEXT	NOT NULL,
	password	TEXT	NOT NULL);

CREATE TABLE restaurantReviews(
	commentId	INTEGER	PRIMARY KEY AUTOINCREMENT,
	userId		TEXT	NOT NULL,
	restaurantId	TEXT	NOT NULL,
	comment		TEXT,
	score		INTEGER	NOT NULL,
	FOREIGN KEY(userId) REFERENCES User(userId),
	FOREIGN KEY(restaurantId) REFERENCES Restaurant(restaurantId));
