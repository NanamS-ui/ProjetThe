
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
create table salaire(montant DECIMAL(10,2) not null);
insert into salaire values(100000.00);
-- Données de test pour la table 'user'
INSERT INTO user (login, pw, type) VALUES
('user1', 'password1', 'user'),
('admin1', 'password2', 'admin'),
('user2', 'password3', 'user');

-- Données de test pour la table 'variete_du_the'
INSERT INTO variete_du_the (nom, occupation, rendement) VALUES
('Variété A', 1.5, 10.2),
('Variété B', 1.8, 8.5),
('Variété C', 1.6, 9.3);

-- Données de test pour la table 'parcelle'
INSERT INTO parcelle (surface, idVarieteDuThe) VALUES
(20.5, 1),
(15.7, 2),
(30.2, 3);

-- Données de test pour la table 'cueilleur'
INSERT INTO cueilleur (nom, genre, date_naissance) VALUES
('Jean Dupont', 'M', '1990-05-15'),
('Marie Leclerc', 'F', '1985-09-20'),
('Pierre Dubois', 'M', '1995-02-10');

-- Données de test pour la table 'depense'
INSERT INTO depense (date_depense, description, valeur) VALUES
('2024-02-10', 'Engrais', 150.50),
('2024-02-11', 'Carburant', 200.75),
('2024-02-12', 'Logistique', 300.20);

