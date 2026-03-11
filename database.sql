CREATE DATABASE projet_canards;
USE projet_canards;

CREATE TABLE Etudiants(
   id_etudiant VARCHAR(50),
   nom VARCHAR(50),
   prenom VARCHAR(50),
   mail VARCHAR(50),
   PRIMARY KEY(id_etudiant)
);

CREATE TABLE Canard(
   id_canard VARCHAR(50),
   nom_canard VARCHAR(50),
   type_canard VARCHAR(50),
   etat_canard VARCHAR(50),
   PRIMARY KEY(id_canard)
);

CREATE TABLE Emprunter(
   id_canard VARCHAR(50),
   date_pret VARCHAR(50),
   date_retour VARCHAR(50),
   id_etudiant VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_canard),
   FOREIGN KEY(id_canard) REFERENCES Canard(id_canard),
   FOREIGN KEY(id_etudiant) REFERENCES Etudiants(id_etudiant)
);
