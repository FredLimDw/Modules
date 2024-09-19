CREATE DATABASE dbAthlete;
USE dbAthlete;

DROP TABLE IF EXISTS t_pays ;
CREATE TABLE t_pays (id_pays_t_pays INT(4) AUTO_INCREMENT NOT NULL,
Nom_pays_t_pays VARCHAR(50),
PRIMARY KEY (id_pays_t_pays)) ENGINE=InnoDB;

DROP TABLE IF EXISTS t_athlete ;
CREATE TABLE t_athlete (id_athlete_t_athlete INT(4) AUTO_INCREMENT NOT NULL,
nom_athlete_t_athlete VARCHAR(50),
prenom_athlete_t_athlete VARCHAR(50),
tel_athlete_t_athlete VARCHAR(14),
dt_naiss_athlete_t_athlete DATE,
id_pays_t_pays INTEGER(4),
id_sport_sport INTEGER(4),
PRIMARY KEY (id_athlete_t_athlete)) ENGINE=InnoDB;

DROP TABLE IF EXISTS t_competition ;
CREATE TABLE t_competition (id_competition_t_competition INT(4) AUTO_INCREMENT NOT NULL,
nom_competition_t_competition VARCHAR(50),
PRIMARY KEY (id_competition_t_competition)) ENGINE=InnoDB;

DROP TABLE IF EXISTS t_lieu ;
CREATE TABLE t_lieu (id_lieu_t_lieu INT(4) AUTO_INCREMENT NOT NULL,
lieu_competition_t_lieu VARCHAR(50),
PRIMARY KEY (id_lieu_t_lieu)) ENGINE=InnoDB;

DROP TABLE IF EXISTS t_discipline ;
CREATE TABLE t_discipline (id_discipline_t_discipline INT(4) AUTO_INCREMENT NOT NULL,
lib_discipline_t_discipline VARCHAR(50),
PRIMARY KEY (id_discipline_t_discipline)) ENGINE=InnoDB;

DROP TABLE IF EXISTS t_sport ;
CREATE TABLE t_sport (id_sport_sport BIGINT(4) AUTO_INCREMENT NOT NULL,
nom_sport_sport VARCHAR(50),
PRIMARY KEY (id_sport_sport)) ENGINE=InnoDB;

DROP TABLE IF EXISTS se_derouler ;
CREATE TABLE se_derouler (id_competition_t_competition INTEGER(4) AUTO_INCREMENT NOT NULL,
id_lieu_t_lieu INTEGER(4) NOT NULL,
date_comp_se derouler DATE(10),
PRIMARY KEY (id_competition_t_competition,
 id_lieu_t_lieu)) ENGINE=InnoDB;

DROP TABLE IF EXISTS participer ;
CREATE TABLE participer (id_athlete_t_athlete INTEGER(4) AUTO_INCREMENT NOT NULL,
id_competition_t_competition INTEGER(4) NOT NULL,
PRIMARY KEY (id_athlete_t_athlete,
 id_competition_t_competition)) ENGINE=InnoDB;

DROP TABLE IF EXISTS faire_partie ;
CREATE TABLE faire_partie (id_sport_sport INTEGER(4) AUTO_INCREMENT NOT NULL,
id_discipline_t_discipline INTEGER(4) NOT NULL,
PRIMARY KEY (id_sport_sport,
 id_discipline_t_discipline)) ENGINE=InnoDB;

ALTER TABLE t_athlete ADD CONSTRAINT FK_t_athlete_id_pays_t_pays FOREIGN KEY (id_pays_t_pays) REFERENCES t_pays (id_pays_t_pays);

ALTER TABLE t_athlete ADD CONSTRAINT FK_t_athlete_id_sport_sport FOREIGN KEY (id_sport_sport) REFERENCES t_sport (id_sport_sport);
ALTER TABLE se_derouler ADD CONSTRAINT FK_se_derouler_id_competition_t_competition FOREIGN KEY (id_competition_t_competition) REFERENCES t_competition (id_competition_t_competition);
ALTER TABLE se_derouler ADD CONSTRAINT FK_se_derouler_id_lieu_t_lieu FOREIGN KEY (id_lieu_t_lieu) REFERENCES t_lieu (id_lieu_t_lieu);
ALTER TABLE participer ADD CONSTRAINT FK_participer_id_athlete_t_athlete FOREIGN KEY (id_athlete_t_athlete) REFERENCES t_athlete (id_athlete_t_athlete);
ALTER TABLE participer ADD CONSTRAINT FK_participer_id_competition_t_competition FOREIGN KEY (id_competition_t_competition) REFERENCES t_competition (id_competition_t_competition);
ALTER TABLE faire_partie ADD CONSTRAINT FK_faire_partie_id_sport_sport FOREIGN KEY (id_sport_sport) REFERENCES t_sport (id_sport_sport);
ALTER TABLE faire_partie ADD CONSTRAINT FK_faire_partie_id_discipline_t_discipline FOREIGN KEY (id_discipline_t_discipline) REFERENCES t_discipline (id_discipline_t_discipline);
