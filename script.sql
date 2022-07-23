CREATE DATABASE oliveira_utilidades DEFAULT CHARACTER SET utf8;
USE oliveira_utilidades;

CREATE TABLE users(
	id INT IDENTITY,
	fullName VARCHAR(225) NOT NULL,
	password INT(6) NOT NULL,
	cpf INT(11) NOT NULL,
	email VARCHAR(225) NOT NULL,
	telephone VARCHAR(225) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE clients(
	id INT IDENTITY,
	fullName VARCHAR(225) NOT NULL,
	cpf INT(11) NOT NULL,
	email VARCHAR(225) NOT NULL,
	telephone VARCHAR(225) NOT NULL,
	city VARCHAR(225) NOT NULL,
	district VARCHAR(225) NOT NULL,
	road VARCHAR(225) NOT NULL,
	houseNumber INT(20) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE providers(
	id INT,
	company VARCHAR(225) NOT NULL,
	cnp_j INT(11) NOT NULL,
	email VARCHAR(225) NOT NULL,
	telephone VARCHAR(225) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE products(
	id INT,
	productName VARCHAR(225) NOT NULL,
	category VARCHAR(225) NOT NULL,
	amount INT(20) NOT NULL,
	telephone VARCHAR(225) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE purchase(
	purchaseNumber INT NOT NULL,
	clientNumber INT(20) NOT NULL,
	client_cpf INT(11) NOT NULL,
	city VARCHAR(225) NOT NULL,
	district VARCHAR(225) NOT NULL,
	road VARCHAR(225) NOT NULL,
	houseNumber INT(20) NOT NULL,
	amount INT(20) NOT NULL,
	price FLOAT(20) NOT NULL,
	PRIMARY KEY(purchaseNumber)
);

CREATE TABLE sale(
	saleNumber INT NOT NULL,
	providerNumber INT(20) NOT NULL,
	provider_cnp_j INT(11) NOT NULL,
	amount INT(20) NOT NULL,
	price FLOAT(20) NOT NULL,
	PRIMARY KEY(saleNumber)
);