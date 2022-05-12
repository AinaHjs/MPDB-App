CREATE DATABASE IF NOT EXISTS mpdb_app;


/* 
    
*/
CREATE TABLE IF NOT EXISTS Personne
(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(50),
    Prenom VARCHAR(50),
    Sexe VARCHAR(10),
    Date_de_naissance DATE NOT NULL,
    Lieu_de_naissance VARCHAR(50),
    CIN INT NOT NULL
);

/* 
    
*/
CREATE TABLE IF NOT EXISTS Domicile 
(
    Adresse VARCHAR(50) PRIMARY KEY,
    Quartier VARCHAR(20),
    Region VARCHAR(20),
    Arrondissement INT NOT NULL
);

/* 
    
*/
CREATE TABLE IF NOT EXISTS Parents
(
    ID_parents INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Prenom_du_pere VARCHAR(50),
    Nom_du_pere VARCHAR(50),
    CIN_du_pere INT NOT NULL,
    Prenom_dela_mere VARCHAR(50),
    Nom_dela_mere VARCHAR(50),
    CIN_dela_mere INT NOT NULL
);
