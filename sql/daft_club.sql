DROP DATABASE IF EXISTS daft_club;
CREATE DATABASE daft_club;
USE daft_club;

CREATE TABLE produit(
    categorie VARCHAR(15),
    nom VARCHAR(40),
    objet VARCHAR(15),
    prix FLOAT,
    quantite INT,
    lien_image VARCHAR(255)
);

CREATE TABLE utilisateur(
    identifiant VARCHAR(255),
    mdp VARCHAR(255),
    nom VARCHAR(255),
    prenom VARCHAR(255)
);
