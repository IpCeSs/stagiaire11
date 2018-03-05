#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE Utilisateur(
        id_utilisateur int (11) Auto_increment  NOT NULL ,
        nom            Varchar (50) ,
        prenom         Varchar (50) ,
        genre          Varchar (10) ,
        pseudo         Varchar (25) ,
        email          Varchar (50) ,
        password_hash  Text ,
        img_profil     Varchar (250) ,
        description    Varchar (255) ,
        tel            Varchar (100) ,
        ville          Varchar (45) ,
        en_ligne       Bool ,
        notification   Bool ,
        pays           Varchar (50) ,
        date_naiss     Date ,
        id_lieu        Int ,
        PRIMARY KEY (id_utilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: image
#------------------------------------------------------------

CREATE TABLE image(
        id_image       int (11) Auto_increment  NOT NULL ,
        nom            Varchar (50) ,
        lien           Varchar (50) ,
        description    Varchar (150) ,
        aime           Int ,
        post_date      Date ,
        Coord_Lat      Varchar (50) ,
        Coord_Lon      Varchar (50) ,
        id_utilisateur Int ,
        id_lieu        Int ,
        PRIMARY KEY (id_image )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: interet
#------------------------------------------------------------

CREATE TABLE interet(
        id_interet int (11) Auto_increment  NOT NULL ,
        nom        Varchar (50) ,
        PRIMARY KEY (id_interet )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: lieu
#------------------------------------------------------------

CREATE TABLE lieu(
        id_lieu int (11) Auto_increment  NOT NULL ,
        pays    Varchar (50) ,
        ville   Varchar (50) ,
        region  Varchar (50) ,
        PRIMARY KEY (id_lieu )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ami
#------------------------------------------------------------

CREATE TABLE ami(
        anniversaire_amitie        Date ,
        id_utilisateur             Int NOT NULL ,
        id_utilisateur_Utilisateur Int NOT NULL ,
        PRIMARY KEY (id_utilisateur ,id_utilisateur_Utilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: message
#------------------------------------------------------------

CREATE TABLE message(
        message                    Longtext ,
        date_envoi                 Datetime ,
        id_utilisateur             Int NOT NULL ,
        id_utilisateur_Utilisateur Int NOT NULL ,
        PRIMARY KEY (id_utilisateur ,id_utilisateur_Utilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: DEFINIR
#------------------------------------------------------------

CREATE TABLE DEFINIR(
        id_interet     Int NOT NULL ,
        id_utilisateur Int NOT NULL ,
        PRIMARY KEY (id_interet ,id_utilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: COMMENT
#------------------------------------------------------------

CREATE TABLE COMMENT(
        date_com       Date ,
        commentaire    Varchar (250) ,
        comm_eph       Varchar (250) ,
        id_utilisateur Int NOT NULL ,
        id_image       Int NOT NULL ,
        PRIMARY KEY (id_utilisateur ,id_image )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TAG
#------------------------------------------------------------

CREATE TABLE TAG(
        Nom        Varchar (25) ,
        id_image   Int NOT NULL ,
        id_image_1 Int NOT NULL ,
        PRIMARY KEY (id_image ,id_image_1 )
)ENGINE=InnoDB;

ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_lieu FOREIGN KEY (id_lieu) REFERENCES lieu(id_lieu);
ALTER TABLE image ADD CONSTRAINT FK_image_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE image ADD CONSTRAINT FK_image_id_lieu FOREIGN KEY (id_lieu) REFERENCES lieu(id_lieu);
ALTER TABLE ami ADD CONSTRAINT FK_ami_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE ami ADD CONSTRAINT FK_ami_id_utilisateur_Utilisateur FOREIGN KEY (id_utilisateur_Utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE message ADD CONSTRAINT FK_message_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE message ADD CONSTRAINT FK_message_id_utilisateur_Utilisateur FOREIGN KEY (id_utilisateur_Utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE DEFINIR ADD CONSTRAINT FK_DEFINIR_id_interet FOREIGN KEY (id_interet) REFERENCES interet(id_interet);
ALTER TABLE DEFINIR ADD CONSTRAINT FK_DEFINIR_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE COMMENT ADD CONSTRAINT FK_COMMENT_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE COMMENT ADD CONSTRAINT FK_COMMENT_id_image FOREIGN KEY (id_image) REFERENCES image(id_image);
ALTER TABLE TAG ADD CONSTRAINT FK_TAG_id_image FOREIGN KEY (id_image) REFERENCES image(id_image);
ALTER TABLE TAG ADD CONSTRAINT FK_TAG_id_image_1 FOREIGN KEY (id_image_1) REFERENCES image(id_image);
