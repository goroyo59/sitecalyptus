

CREATE TABLE utilisateurs(
        id               Int  Auto_increment  NOT NULL ,
        pseudo           Varchar (100) NOT NULL ,
        email            Varchar (100) NOT NULL ,
        password         Text NOT NULL ,
        ip               Varchar (20) NOT NULL ,
        token            Text NOT NULL ,
        date_inscription Datetime NOT NULL
	,CONSTRAINT utilisateurs_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

