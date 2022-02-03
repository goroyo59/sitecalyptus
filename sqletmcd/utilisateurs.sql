#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: utilisateurs
#------------------------------------------------------------

CREATE TABLE utilisateurs(
        idUser           Int  Auto_increment  NOT NULL ,
        pseudo           Varchar (255) NOT NULL ,
        email            Varchar (255) NOT NULL ,
        password         Varchar (100) NOT NULL ,
        date_inscription Datetime NOT NULL
	,CONSTRAINT utilisateurs_PK PRIMARY KEY (idUser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: session
#------------------------------------------------------------

CREATE TABLE session(
        idSession Int  Auto_increment  NOT NULL ,
        idUser    Int NOT NULL
	,CONSTRAINT session_PK PRIMARY KEY (idSession)

	,CONSTRAINT session_utilisateurs_FK FOREIGN KEY (idUser) REFERENCES utilisateurs(idUser)
	,CONSTRAINT session_utilisateurs_AK UNIQUE (idUser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: partitions
#------------------------------------------------------------

CREATE TABLE partitions(
        idPartition Int  Auto_increment  NOT NULL ,
        artiste     Varchar (255) NOT NULL ,
        chanson     Varchar (255) NOT NULL
	,CONSTRAINT partitions_PK PRIMARY KEY (idPartition)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: instruments
#------------------------------------------------------------

CREATE TABLE instruments(
        idInstrument Int  Auto_increment  NOT NULL ,
        nom          Varchar (255) NOT NULL
	,CONSTRAINT instruments_PK PRIMARY KEY (idInstrument)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: musique
#------------------------------------------------------------

CREATE TABLE musique(
        idMusique Int  Auto_increment  NOT NULL ,
        artiste   Varchar (255) NOT NULL ,
        chanson   Varchar (255) NOT NULL ,
        lien      Varchar (255) NOT NULL
	,CONSTRAINT musique_PK PRIMARY KEY (idMusique)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: concerts
#------------------------------------------------------------

CREATE TABLE concerts(
        idConcert  Int  Auto_increment  NOT NULL ,
        artiste    Varchar (255) NOT NULL ,
        date       Date NOT NULL ,
        placeDispo Int NOT NULL
	,CONSTRAINT concerts_PK PRIMARY KEY (idConcert)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: reservations
#------------------------------------------------------------

CREATE TABLE reservations(
        idReservation Int  Auto_increment  NOT NULL ,
        nbresPlaces   Int NOT NULL ,
        idConcert     Int NOT NULL ,
        idUser        Int NOT NULL
	,CONSTRAINT reservations_PK PRIMARY KEY (idReservation)

	,CONSTRAINT reservations_concerts_FK FOREIGN KEY (idConcert) REFERENCES concerts(idConcert)
	,CONSTRAINT reservations_utilisateurs0_FK FOREIGN KEY (idUser) REFERENCES utilisateurs(idUser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commentaires
#------------------------------------------------------------

CREATE TABLE commentaires(
        idContent Int  Auto_increment  NOT NULL ,
        Comments  Text NOT NULL ,
        date      Date NOT NULL ,
        idUser    Int NOT NULL ,
        idConcert Int NOT NULL
	,CONSTRAINT commentaires_PK PRIMARY KEY (idContent)

	,CONSTRAINT commentaires_utilisateurs_FK FOREIGN KEY (idUser) REFERENCES utilisateurs(idUser)
	,CONSTRAINT commentaires_concerts0_FK FOREIGN KEY (idConcert) REFERENCES concerts(idConcert)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: pour
#------------------------------------------------------------

CREATE TABLE pour(
        idInstrument Int NOT NULL ,
        idPartition  Int NOT NULL
	,CONSTRAINT pour_PK PRIMARY KEY (idInstrument,idPartition)

	,CONSTRAINT pour_instruments_FK FOREIGN KEY (idInstrument) REFERENCES instruments(idInstrument)
	,CONSTRAINT pour_partitions0_FK FOREIGN KEY (idPartition) REFERENCES partitions(idPartition)
)ENGINE=InnoDB;
