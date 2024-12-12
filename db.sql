CREATE TABLE client(
id_client int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT ,
nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(150) unique,
    telephone VARCHAR(15),
    adresse text,
    date_naissance date
)

CREATE TABLE activite (
    id_activite int(11) not null PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(150),
    description text,
    destination varchar(100),
    prix decimal(10,2) not null,
    date_debut date,
    date_fin date,
    places_disponibles int(11) not null
)

CREATE TABLE reservation (
id_reservation int(11) not null PRIMARY KEY  AUTO_INCREMENT,
id_client int(11),
    id_activite int(11),
    date_reservation timestamp,
    status ENUM('En attente','Confirmee','Annulee') Not null,
    FOREIGN KEY(id_client) REFERENCES client(id_client),
    FOREIGN KEY(id_activite) REFERENCES activite(id_activite),
)

INSERT INTO client (nom,prenom,email,telephone,adresse,date_naissance) VALUES ("jack","azert","jack.azert@gmail.com","JnKrou","0582904466",'1998-06-16');
INSERT INTO client (nom,prenom,email,telephone,adresse,date_naissance) VALUES ("sayli","ishab","sayli.ishab@gmail.com","Karting","0698897385",'2008-10-24');

insert into activite (titre,description,destination,prix,date_debut,date_fin,places_disponibles) VALUES ("skydiving","Vr","Marakech",4000,'2025-03-03','2024-03-13',4);
insert into activite (titre,description,destination,prix,date_debut,date_fin,places_disponibles) VALUES ("surf","driving","dubai",8000,'2025-02-08','2024-02-16',10);

insert into reservation(id_client,id_activite,date_reservation,status) VALUES (1,1,'2025-01-10','Confirmee');
insert into reservation(id_client,id_activite,date_reservation,status) VALUES (2,2,'2024-12-15','Confirmee');


UPDATE client SET nom="soull",prenom="iroi",email="soull.iroi@gmail.com",telephone="0578906855",adresse="NewYork",date_naissance='2006-01-20' WHERE id_client = 1;
UPDATE activite SET titre = "voyage a california" , description = "best voll idea" , destination = "california" , prix="20000" , date_debut = '2025-01-10' , date_fin = '2025-02-10' , places_disponibles = 5 WHERE id_activite = 1;
UPDATE reservation SET id_client = 1, id_activite = 1, date_reservation = '2024-12-06' , status = 'Annulee' WHERE id_reservation=1;
DELETE FROM client WHERE id_client = 2;
DELETE FROM activite WHERE id_activite = 1;
DELETE FROM reservation WHERE id_reservation=2; 


SELECT
client.nom,
client.prenom,
activite.titre
FROM activite 
JOIN reservation ON activite.id_activite  = reservation.id_activite
JOIN client ON client.id_client = reservation.id_client;

ALTER TABLE client MODIFY adresse VARCHAR(200) NOT NULL;
ALTER TABLE client DROP date_naissance;
ALTER TABLE reservation MODIFY status ENUM('En_cours', 'Confirmée', 'Annulée') Not null;