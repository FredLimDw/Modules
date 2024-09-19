DROP TABLE IF EXISTS T_CentreFormation ;
CREATE TABLE T_CentreFormation (id_ctrFormation_T_CentreFormation INT(4) AUTO_INCREMENT NOT NULL,
nom_ctrFormation_T_CentreFormation VARCHAR(50),
adr_ctrFormation_T_CentreFormation VARCHAR(150),
tel_ctrFormation_T_CentreFormation VARCHAR(14),
Email_ctrFormation_T_CentreFormation VARCHAR(255),
id_ville_T_Villle **NOT FOUND**(4),
PRIMARY KEY (id_ctrFormation_T_CentreFormation)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_CodesPostaux ;
CREATE TABLE T_CodesPostaux (id_cp_T_CodesPostaux INT(5) AUTO_INCREMENT NOT NULL,
CP_T_CodesPostaux INTEGER(5),
PRIMARY KEY (id_cp_T_CodesPostaux)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_Villle ;
CREATE TABLE T_Villle (id_ville_T_Villle INT(5) AUTO_INCREMENT NOT NULL,
lib_ville_T_Villle VARCHAR(70),
PRIMARY KEY (id_ville_T_Villle)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_Titre ;
CREATE TABLE T_Titre (id_titre_T_Titre INT(4) AUTO_INCREMENT NOT NULL,
lib_titre_T_Titre VARCHAR(70),
id_niveau_T_Niveau **NOT FOUND**(4),
PRIMARY KEY (id_titre_T_Titre)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_Niveau ;
CREATE TABLE T_Niveau (id_niveau_T_Niveau INT(1) AUTO_INCREMENT NOT NULL,
lib_niveau_T_Niveau VARCHAR(9),
PRIMARY KEY (id_niveau_T_Niveau)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_Stagiaire ;
CREATE TABLE T_Stagiaire (id_stag_T_Stagiaire INT(6) AUTO_INCREMENT NOT NULL,
nom_stag_T_Stagiaire VARCHAR(50),
prenom_stag_T_Stagiaire VARCHAR(50),
dt_naiss_stag_T_Stagiaire DATE,
adr_stag_T_Stagiaire VARCHAR(150),
tel_stag_T_Stagiaire VARCHAR(14),
email_stag_T_Stagiaire VARCHAR(255),
id_titre_T_Titre **NOT FOUND**(6),
id_ville_T_Villle **NOT FOUND**(6),
PRIMARY KEY (id_stag_T_Stagiaire)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_OPCA ;
CREATE TABLE T_OPCA (id_opca_T_OPCA INT(4) AUTO_INCREMENT NOT NULL,
lib_opca_T_OPCA VARCHAR(70),
PRIMARY KEY (id_opca_T_OPCA)) ENGINE=InnoDB;

DROP TABLE IF EXISTS avoir ;
CREATE TABLE avoir (id_ville_T_Villle **NOT FOUND**(5) AUTO_INCREMENT NOT NULL,
id_cp_T_CodesPostaux **NOT FOUND**(5) NOT NULL,
PRIMARY KEY (id_ville_T_Villle,
 id_cp_T_CodesPostaux)) ENGINE=InnoDB;

DROP TABLE IF EXISTS proposer ;
CREATE TABLE proposer (id_ctrFormation_T_CentreFormation **NOT FOUND**(4) AUTO_INCREMENT NOT NULL,
id_titre_T_Titre **NOT FOUND**(4) NOT NULL,
PRIMARY KEY (id_ctrFormation_T_CentreFormation,
 id_titre_T_Titre)) ENGINE=InnoDB;

DROP TABLE IF EXISTS financer ;
CREATE TABLE financer (id_stag_T_Stagiaire **NOT FOUND**(6) AUTO_INCREMENT NOT NULL,
id_opca_T_OPCA **NOT FOUND**(6) NOT NULL,
PRIMARY KEY (id_stag_T_Stagiaire,
 id_opca_T_OPCA)) ENGINE=InnoDB;

ALTER TABLE T_CentreFormation ADD CONSTRAINT FK_T_CentreFormation_id_ville_T_Villle FOREIGN KEY (id_ville_T_Villle) REFERENCES T_Villle (id_ville_T_Villle);

ALTER TABLE T_Titre ADD CONSTRAINT FK_T_Titre_id_niveau_T_Niveau FOREIGN KEY (id_niveau_T_Niveau) REFERENCES T_Niveau (id_niveau_T_Niveau);
ALTER TABLE T_Stagiaire ADD CONSTRAINT FK_T_Stagiaire_id_titre_T_Titre FOREIGN KEY (id_titre_T_Titre) REFERENCES T_Titre (id_titre_T_Titre);
ALTER TABLE T_Stagiaire ADD CONSTRAINT FK_T_Stagiaire_id_ville_T_Villle FOREIGN KEY (id_ville_T_Villle) REFERENCES T_Villle (id_ville_T_Villle);
ALTER TABLE avoir ADD CONSTRAINT FK_avoir_id_ville_T_Villle FOREIGN KEY (id_ville_T_Villle) REFERENCES T_Villle (id_ville_T_Villle);
ALTER TABLE avoir ADD CONSTRAINT FK_avoir_id_cp_T_CodesPostaux FOREIGN KEY (id_cp_T_CodesPostaux) REFERENCES T_CodesPostaux (id_cp_T_CodesPostaux);
ALTER TABLE proposer ADD CONSTRAINT FK_proposer_id_ctrFormation_T_CentreFormation FOREIGN KEY (id_ctrFormation_T_CentreFormation) REFERENCES T_CentreFormation (id_ctrFormation_T_CentreFormation);
ALTER TABLE proposer ADD CONSTRAINT FK_proposer_id_titre_T_Titre FOREIGN KEY (id_titre_T_Titre) REFERENCES T_Titre (id_titre_T_Titre);
ALTER TABLE financer ADD CONSTRAINT FK_financer_id_stag_T_Stagiaire FOREIGN KEY (id_stag_T_Stagiaire) REFERENCES T_Stagiaire (id_stag_T_Stagiaire);
ALTER TABLE financer ADD CONSTRAINT FK_financer_id_opca_T_OPCA FOREIGN KEY (id_opca_T_OPCA) REFERENCES T_OPCA (id_opca_T_OPCA);
