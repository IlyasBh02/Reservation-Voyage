CREATE DATABASE flying;

CREATE table client(
	id_client int(11) not null PRIMARY KEY AUTO_INCREMENT,
    nom varchar(100),
    prenom varchar(100),
    email varchar(150) not null,
    telephone varchar(15),
    adrress text,
    date_naissance date
)
CREATE TABLE activite(
	id_activite int(11) not null PRIMARY KEY AUTO_INCREMENT,
    titre varchar(150),
    description text,
    destination varchar(100),
    prix decimal(10,2),
    date_debut date,
    date_fin date,
    places_disponibles int(11)

)

CREATE TABLE reservation(
	id_reservation int(11),
    id_client int(11),
    id_activite int(11),
    date_reservation timestamp,
    statut ENUM('En attente','Confirmée','Annulée'),
    FOREIGN KEY (id_client) REFERENCES client(id_client),
    FOREIGN KEY (id_activite) REFERENCES activite(id_activite)
)
