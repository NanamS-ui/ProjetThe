
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
alter table variete_du_the add column prixDeVente DECIMAL(10,2) not null;
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
        id_categorie int ,
        valeur DECIMAL(10,2),
        FOREIGN KEY (id_categorie) REFERENCES categorieDepense(id)
);

create table salaire(montant DECIMAL(10,2) not null);
insert into salaire values(100000.00);

create table poidsMinimumJournalier(poids DECIMAL(10,2) not null);
insert into poidsMinimumJournalier values(10.00);

create table malus(pourcentage DECIMAL(10,2) not null);
insert into malus values(10.00);


create table bonus(pourcentage DECIMAL(10,2) not null);
insert into bonus values(10.00);
    
create table categorieDepense(id int PRIMARY KEY AUTO_INCREMENT,categorie VARCHAR(255) not null);

INSERT INTO categorieDepense (categorie)VALUES
('Engrais'),
('Carburant'),
('Logistique');

create table date_de_plantation(date_plantation date not null,id_parcelle int not null, FOREIGN KEY (id_parcelle) references parcelle(id));

create table cueillette(
    id int PRIMARY KEY AUTO_INCREMENT,
    date_de_cueillette date not null, 
    id_cueilleur int not null,
    id_parcelle int not null,
    poids_cueilli DECIMAL(10,2) not null,
    FOREIGN KEY(id_cueilleur ) REFERENCES cueilleur(id),
    FOREIGN KEY(id_parcelle) references parcelle(id)
    );
-- Insertion de données de test avec id_cueilleur et id_parcelle entre 1 et 3 et date de cueillette après 1990-05-15

    INSERT INTO cueillette (date_de_cueillette, id_cueilleur, id_parcelle, poids_cueilli) VALUES
    ('1990-06-01', 1, 1, 5.25),
    ('1992-08-20', 2, 2, 7.50),
    ('1995-10-15', 3, 3, 3.75),
    ('1998-12-05', 1, 2, 2.00),
    ('2000-07-10', 2, 1, 9.80);


create table moisDeRegeneration(id int PRIMARY KEY AUTO_INCREMENT,
    mois VARCHAR(20) NOT NULL,
    isRegenerer int not null);

INSERT INTO moisDeRegeneration (mois,isRegenerer) VALUES
('January',1),
('February',1),
('March',0),
('April',1),
('May',1),
('June',0),
('July',0),
('August',1),
('September',0),
('October',0),
('November',1),
('December',1);

INSERT INTO moisDeRegeneration (mois,isRegenerer) VALUES
('January',1),
('February',1),
('March',0),
('April',1),
('May',1),
('June',0),
('July',0),
('August',1),
('September',0),
('October',0),
('November',1),
('December',1);

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

update variete_du_the set prixDeVente = 100.00 where id = 1;
update variete_du_the set prixDeVente = 200.00 where id = 2;
update variete_du_the set prixDeVente = 300.00 where id = 3;    
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
INSERT INTO depense (date_depense, id_categorie, valeur) VALUES
('2024-02-10', 1, 150.50),
('2024-02-11', 2, 200.75),
('2024-02-12', 3, 300.20);

