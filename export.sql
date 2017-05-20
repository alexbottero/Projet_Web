#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        email    Varchar (255) NOT NULL ,
        nom      Varchar (25) NOT NULL ,
        prenom   Varchar (45) NOT NULL ,
        section  Varchar (25) NOT NULL ,
        password Varchar (255) NOT NULL ,
        seed     Varchar (10) NOT NULL ,
        annee    Int NOT NULL ,
        statut   Int ,
        parrain  Varchar (255) NOT NULL ,
        phone    Varchar (10) NOT NULL ,
        PRIMARY KEY (email )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Demande
#------------------------------------------------------------

CREATE TABLE Demande(
        idDemande       Int NOT NULL ,
        messageDemande  Text ,
        prixDemande     Double ,
        dateDemande     Datetime NOT NULL ,
        email           Varchar (255) NOT NULL ,
        idStatutDemande Int NOT NULL ,
        idAnnonce       Int NOT NULL ,
        PRIMARY KEY (idDemande )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: StatutDemande
#------------------------------------------------------------

CREATE TABLE StatutDemande(
        idStatutDemande      Int NOT NULL ,
        libelleStatutDemande Varchar (45) NOT NULL ,
        PRIMARY KEY (idStatutDemande )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: StatutAnnonce
#------------------------------------------------------------

CREATE TABLE StatutAnnonce(
        idStatutAnnonce      Int NOT NULL ,
        libelleStatutAnnonce Varchar (255) NOT NULL ,
        PRIMARY KEY (idStatutAnnonce )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Covoiturage
#------------------------------------------------------------

CREATE TABLE Covoiturage(
        idCovoiturage     int (11) Auto_increment  NOT NULL ,
        prixTrajet        Double ,
        heureCovoiturage  Datetime NOT NULL ,
        nbPlaceDispo      Int ,
        bagageCovoiturage Varchar (25) NOT NULL ,
        rueDep            Int NOT NULL ,
        villeDep          Varchar (25) NOT NULL ,
        villeArrive       Varchar (25) NOT NULL ,
        idAnnonce         Int NOT NULL ,
        PRIMARY KEY (idCovoiturage )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Troc
#------------------------------------------------------------

CREATE TABLE Troc(
        idTroc     int (11) Auto_increment  NOT NULL ,
        PrixTroc   Double ,
        numRecup   Int NOT NULL ,
        photoTroc  Varchar (255) ,
        rueRecup   Varchar (255) NOT NULL ,
        villeRecup Varchar (255) NOT NULL ,
        idAnnonce  Int NOT NULL ,
        PRIMARY KEY (idTroc )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Appartement
#------------------------------------------------------------

CREATE TABLE Appartement(
        idAppartement          int (11) Auto_increment  NOT NULL ,
        dateCessionAppartement Date NOT NULL ,
        rueAppartement         Varchar (255) NOT NULL ,
        nbPiece                Int NOT NULL ,
        surfaceAppartement     Double NOT NULL ,
        photoAppartement       Varchar (255) ,
        loyer                  Double NOT NULL ,
        numAppartement         Int NOT NULL ,
        villeAppartement       Varchar (25) NOT NULL ,
        idAnnonce              Int NOT NULL ,
        PRIMARY KEY (idAppartement )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Annonce
#------------------------------------------------------------

CREATE TABLE Annonce(
        idAnnonce        int (11) Auto_increment  NOT NULL ,
        messageAnnonce   Text NOT NULL ,
        titreAnnonce     Varchar (255) NOT NULL ,
        dateAjoutAnnonce Datetime NOT NULL ,
        idStatutAnnonce  Int NOT NULL ,
        email            Varchar (255) NOT NULL ,
        PRIMARY KEY (idAnnonce )
)ENGINE=InnoDB;

ALTER TABLE Demande ADD CONSTRAINT FK_Demande_email FOREIGN KEY (email) REFERENCES User(email);
ALTER TABLE Demande ADD CONSTRAINT FK_Demande_idStatutDemande FOREIGN KEY (idStatutDemande) REFERENCES StatutDemande(idStatutDemande);
ALTER TABLE Demande ADD CONSTRAINT FK_Demande_idAnnonce FOREIGN KEY (idAnnonce) REFERENCES Annonce(idAnnonce);
ALTER TABLE Covoiturage ADD CONSTRAINT FK_Covoiturage_idAnnonce FOREIGN KEY (idAnnonce) REFERENCES Annonce(idAnnonce);
ALTER TABLE Troc ADD CONSTRAINT FK_Troc_idAnnonce FOREIGN KEY (idAnnonce) REFERENCES Annonce(idAnnonce);
ALTER TABLE Appartement ADD CONSTRAINT FK_Appartement_idAnnonce FOREIGN KEY (idAnnonce) REFERENCES Annonce(idAnnonce);
ALTER TABLE Annonce ADD CONSTRAINT FK_Annonce_idStatutAnnonce FOREIGN KEY (idStatutAnnonce) REFERENCES StatutAnnonce(idStatutAnnonce);
ALTER TABLE Annonce ADD CONSTRAINT FK_Annonce_email FOREIGN KEY (email) REFERENCES User(email);
