CREATE DATABASE reservations;
USE reservations;
CREATE TABLE reservation_book (
	name VARCHAR(20),
	phone VARCHAR(20),
	day VARCHAR(20),
	party_size VARCHAR(20),
	time VARCHAR(20),
	pk INT AUTO_INCREMENT NOT NULL
	PRIMARY KEY (pk)
);
