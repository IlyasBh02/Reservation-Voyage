CREATE DATABASE flying;
USE flying;

CREATE TABLE client (
    id_client INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(150) NOT NULL,
    telephone VARCHAR(15),
    adresse TEXT,
    date_naissance DATE
);
CREATE TABLE activite (
    id_activite INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(150),
    description TEXT,
    destination VARCHAR(100),
    prix DECIMAL(10, 2),
    date_debut DATE,
    date_fin DATE,
    places_disponibles INT
);
CREATE TABLE reservation (
    id_reservation INT AUTO_INCREMENT PRIMARY KEY,
    id_client INT,
    id_activite INT,
    date_reservation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    statut ENUM('En attente', 'Confirmée', 'Annulée'),
    FOREIGN KEY (id_client) REFERENCES client(id_client),
    FOREIGN KEY (id_activite) REFERENCES activite(id_activite)
);

ALTER TABLE client ADD COLUMN nom_de_famille VARCHAR(100);
ALTER TABLE activite MODIFY prix DECIMAL(12, 2);
ALTER TABLE reservation MODIFY statut ENUM('En attente', 'Confirmée', 'Annulée', 'Complétée');

INSERT INTO reservation (id_client, id_activite, statut) 
VALUES (1, 2, 'En attente');

UPDATE activite 
SET prix = 120.00 
WHERE id_activite = 2;

DELETE FROM reservation 
WHERE id_reservation = 1;

SELECT c.nom, c.prenom, a.titre, a.description, a.destination, a.prix, r.date_reservation, r.statut
FROM reservation r
JOIN client c ON r.id_client = c.id_client
JOIN activite a ON r.id_activite = a.id_activite
WHERE c.id_client = 1;
