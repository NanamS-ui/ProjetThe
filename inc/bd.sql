
CREATE TABLE user (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    login VARCHAR(20) NOT NULL UNIQUE,
    pw VARCHAR(20) NOT NULL,
    type ENUM('user', 'admin') NOT NULL
);


CREATE TABLE variete_du_the (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom VARCHAR(20),
    occupation DECIMAL(10,2) NOT NULL,
    rendement DECIMAL(10,2) NOT NULL
);

CREATE TABLE parcelle (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    surface DECIMAL(10,2) NOT NULL,
    idVarieteDuThe INT,
    FOREIGN KEY (idVarieteDuThe) REFERENCES variete_du_the(id)
);

CREATE TABLE cueilleur (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom VARCHAR(20) NOT NULL,
    genre ENUM('M', 'F') NOT NULL,
    date_naissance DATE
);

CREATE TABLE depense (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    date_depense DATE,
    description VARCHAR(20),
    valeur DECIMAL(10,2)
);
