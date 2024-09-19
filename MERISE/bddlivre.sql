DROP TABLE IF EXISTS T_auteur ;
CREATE TABLE T_auteur (id_auteur_T_auteur INT(4) AUTO_INCREMENT NOT NULL,
Nom_auteur_T_auteur INTEGER(50),
Prenom_auteur_T_auteur INTEGER(50),
Dt_naiss_auteur_T_auteur DATE,
id_ville_T_ville **NOT FOUND**(4),
PRIMARY KEY (id_auteur_T_auteur)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_mag ;
CREATE TABLE T_mag (id_mag_T_mag INT(4) AUTO_INCREMENT NOT NULL,
Nom_mag_T_mag INTEGER(50),
Adr_mag_T_mag INTEGER(150),
tel_mag_T_mag INTEGER(14),
PRIMARY KEY (id_mag_T_mag)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_ville ;
CREATE TABLE T_ville (id_ville_T_ville INT(4) AUTO_INCREMENT NOT NULL,
Lib_ville_T_ville INTEGER(70),
PRIMARY KEY (id_ville_T_ville)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_edition ;
CREATE TABLE T_edition (id_edition_T_edition INT(4) AUTO_INCREMENT NOT NULL,
Nom_edition_T_edition INTEGER(50),
PRIMARY KEY (id_edition_T_edition)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_genre ;
CREATE TABLE T_genre (id_genre_T_genre INT(4) AUTO_INCREMENT NOT NULL,
lib_genre_T_genre INTEGER(50),
PRIMARY KEY (id_genre_T_genre)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_livre ;
CREATE TABLE T_livre (id_livre_T_livre INT(4) AUTO_INCREMENT NOT NULL,
Nom_livre_T_livre INTEGER(100),
id_genre_T_genre **NOT FOUND**(4),
id_edition_T_edition **NOT FOUND**(4),
id_auteur_T_auteur **NOT FOUND**(4),
PRIMARY KEY (id_livre_T_livre)) ENGINE=InnoDB;

DROP TABLE IF EXISTS vendre ;
CREATE TABLE vendre (id_livre_T_livre **NOT FOUND**(4) AUTO_INCREMENT NOT NULL,
id_mag_T_mag **NOT FOUND**(4) NOT NULL,
prix_vente_vendre FLOAT(3),
PRIMARY KEY (id_livre_T_livre,
 id_mag_T_mag)) ENGINE=InnoDB;

ALTER TABLE T_auteur ADD CONSTRAINT FK_T_auteur_id_ville_T_ville FOREIGN KEY (id_ville_T_ville) REFERENCES T_ville (id_ville_T_ville);

ALTER TABLE T_livre ADD CONSTRAINT FK_T_livre_id_genre_T_genre FOREIGN KEY (id_genre_T_genre) REFERENCES T_genre (id_genre_T_genre);
ALTER TABLE T_livre ADD CONSTRAINT FK_T_livre_id_edition_T_edition FOREIGN KEY (id_edition_T_edition) REFERENCES T_edition (id_edition_T_edition);
ALTER TABLE T_livre ADD CONSTRAINT FK_T_livre_id_auteur_T_auteur FOREIGN KEY (id_auteur_T_auteur) REFERENCES T_auteur (id_auteur_T_auteur);
ALTER TABLE vendre ADD CONSTRAINT FK_vendre_id_livre_T_livre FOREIGN KEY (id_livre_T_livre) REFERENCES T_livre (id_livre_T_livre);
ALTER TABLE vendre ADD CONSTRAINT FK_vendre_id_mag_T_mag FOREIGN KEY (id_mag_T_mag) REFERENCES T_mag (id_mag_T_mag);
