\c postgres;
DROP database assur_m;
CREATE database assur_m;

\c assur_m;

CREATE TABLE operateur(
   id SERIAL,
   nom VARCHAR(50)  NOT NULL,
   PRIMARY KEY(id)
);

CREATE TABLE assureur(
   id SERIAL,
   nom VARCHAR(50) ,
   commission NUMERIC(7,2),
   num_telma VARCHAR(20) ,
   num_orange VARCHAR(20) ,
   num_airtel VARCHAR(20) ,
   PRIMARY KEY(id)
);

CREATE TABLE utilisateur(
   id SERIAL,
   nom VARCHAR(50)  NOT NULL,
   prenom VARCHAR(50)  NOT NULL,
   adresse VARCHAR(100)  NOT NULL,
   naissance DATE NOT NULL,
   email VARCHAR(50)  NOT NULL,
   mdp VARCHAR(50)  NOT NULL,
   telephone VARCHAR(20)  NOT NULL,
   deleted BOOLEAN DEFAULT FALSE NOT NULL,
   id_operateur INT,
   solde DECIMAL(12,2),
   FOREIGN KEY(id_operateur) REFERENCES operateur(id),
   PRIMARY KEY(id)
);

CREATE TABLE type_vehicule(
   id SERIAL,
   nom VARCHAR(50) ,
   PRIMARY KEY(id)
);

CREATE TABLE options(
   id SERIAL,
   nom VARCHAR(100)  NOT NULL,
   descri TEXT,
   valeur NUMERIC(12,2)   NOT NULL,
   id_assureur INTEGER,
   PRIMARY KEY(id),
   FOREIGN KEY(id_assureur) REFERENCES assureur(id)
);

CREATE TABLE vehicule(
   id SERIAL,
   immatriculation VARCHAR(10)  NOT NULL,
   puissance NUMERIC(10,2)   NOT NULL,
   marque VARCHAR(50)  NOT NULL,
   place INTEGER NOT NULL,
   id_type INTEGER NOT NULL,
   id_utilisateur INTEGER NOT NULL,
   id_assureur INTEGER,
   id_options INTEGER,
   carburant VARCHAR(50) ,
   utilisation VARCHAR(100) ,
   PRIMARY KEY(id),
   FOREIGN KEY(id_type) REFERENCES type_vehicule(id),
   FOREIGN KEY(id_options) REFERENCES options(id),
   FOREIGN KEY(id_assureur) REFERENCES assureur(id),
   FOREIGN KEY(id_utilisateur) REFERENCES utilisateur(id)
);

CREATE TABLE facture(
   id SERIAL,
   date_debut DATE NOT NULL,
   date_fin DATE NOT NULL,
   police_assurance VARCHAR(50)  NOT NULL,
   id_assureur INTEGER NOT NULL,
   id_vehicule INTEGER NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_assureur) REFERENCES assureur(id),
   FOREIGN KEY(id_vehicule) REFERENCES vehicule(id)
);

CREATE TABLE message(
   id SERIAL,
   id_envoyeur INTEGER NOT NULL,
   id_receveur INTEGER NOT NULL,
   message TEXT NOT NULL,
   moment TIMESTAMP NOT NULL,
   vue BOOLEAN,
   PRIMARY KEY(id)
);

CREATE TABLE service(
   id SERIAL,
   nom VARCHAR(100)  NOT NULL,
   PRIMARY KEY(id)
);

CREATE TABLE carburant(
   id SERIAL,
   nom VARCHAR(50) ,
   prix NUMERIC(12,2)  ,
   id_assureur INTEGER,
   PRIMARY KEY(id),
   FOREIGN KEY(id_assureur) REFERENCES assureur(id)
);

CREATE TABLE annee_fabrication(
   id SERIAL,
   debut INTEGER,
   fin INTEGER,
   prix NUMERIC(12,2)  ,
   id_assureur INTEGER,
   PRIMARY KEY(id),
   FOREIGN KEY(id_assureur) REFERENCES assureur(id)
);

CREATE TABLE puissance(
   id SERIAL,
   prix_chevaux NUMERIC(12,2)  ,
   id_assureur INTEGER,
   PRIMARY KEY(id),
   FOREIGN KEY(id_assureur) REFERENCES assureur(id)
);

CREATE TABLE usage(
   id SERIAL,
   nom VARCHAR(100) ,
   valeur NUMERIC(8,2)  ,
   id_assureur INTEGER,
   PRIMARY KEY(id),
   FOREIGN KEY(id_assureur) REFERENCES assureur(id)
);

CREATE TABLE etat(
   id SERIAL,
   libelle VARCHAR(100) ,
   valeur NUMERIC(12,2)  ,
   id_assureur INTEGER,
   PRIMARY KEY(id),
   FOREIGN KEY(id_assureur) REFERENCES assureur(id)
);

CREATE TABLE payement(
   id SERIAL,
   date_payement DATE NOT NULL,
   valeur NUMERIC(11,2)   NOT NULL,
   frequence INTEGER NOT NULL,
   id_vehicule INTEGER,
   id_utilisateur INTEGER,
   PRIMARY KEY(id),
   FOREIGN KEY(id_vehicule) REFERENCES vehicule(id),
   FOREIGN KEY(id_utilisateur) REFERENCES utilisateur(id)
);

-- operateur
INSERT INTO operateur (nom) VALUES 
('Telma'),
('Orange'),
('Airtel');

-- assureur
INSERT INTO assureur (nom, commission, num_telma, num_orange, num_airtel) VALUES
('Mama', 4.80, '0343522562', ' 0320322555', ''),
('Ny Havana', 5.50, '0340722031', '', ''),
('Aro', 6.75, '0341422525', '', '');

-- utilisateur
INSERT INTO utilisateur (nom, prenom, adresse, naissance, email, mdp, telephone, deleted, id_operateur, solde) VALUES 
('Dupont', 'Jean', '123 Rue de la Paix, Paris', '1980-01-15', 'jean.dupont@example.com', 'mdp123', '0331234567', FALSE, 3, 0),
('Martin', 'Claire', '456 Avenue des Champs, Lyon', '1992-07-22', 'claire.martin@example.com', 'mdp456', '0342345678', FALSE, 1, 0),
('Bernard', 'Luc', '789 Boulevard du Soleil, Marseille', '1985-05-30', 'luc.bernard@example.com', 'mdp789', '0323456789', FALSE, 2, 0),
('Durand', 'Sophie', '101 Rue des Fleurs, Toulouse', '1990-12-10', 'sophie.durand@example.com', 'mdp101', '0341567890', FALSE, 1, 0),
('Lefevre', 'Paul', '202 Chemin de la Plage, Nice', '1975-03-25', 'paul.lefevre@example.com', 'mdp202', '0325678901', FALSE, 2, 0),
('Rousseau', 'Marie', '303 Rue de Eglise, Bordeaux', '1988-08-08', 'marie.rousseau@example.com', 'mdp303', '0326789012', FALSE, 2, 0),
('Moreau', 'Antoine', '404 Rue de la Republique, Lille', '1995-11-19', 'antoine.moreau@example.com', 'mdp404', '0347890123', FALSE, 1, 0),
('Petit', 'Julie', '505 Rue de la Liberté, Nantes', '1982-09-14', 'julie.petit@example.com', 'mdp505', '0338901234', FALSE, 3, 0),
('Richard', 'Marc', '606 Rue des Ecoles, Strasbourg', '1983-06-22', 'marc.richard@example.com', 'mdp606', '0349012345', FALSE, 1, 0),
('Garcia', 'Emma', '707 Rue du Moulin, Montpellier', '1991-04-10', 'emma.garcia@example.com', 'mdp707', '0330123456', FALSE, 3, 0);

-- type_vehicule
INSERT INTO type_vehicule (nom) VALUES 
('Voiture'),
('Camion'),
('Bus'),
('Minibus');

-- options
INSERT INTO options (nom, descri, valeur, id_assureur) VALUES
('Toit ouvrant', 'Toit panoramique électrique', 1200.00, 1),
('Système de navigation', 'GPS intégré avec écran tactile', 800.00, 2),
('Sièges en cuir', 'Sièges avant chauffants et ventilés', 1500.00, 3),
('Caméra de recul', 'Aide au stationnement avec vision arrière', 600.00, 1),
('Jantes en alliage', 'Jantes de 18 pouces avec finition noire', 1000.00, 2);

-- vehicule
INSERT INTO vehicule (immatriculation, puissance, marque, place, id_type, id_utilisateur, id_assureur, id_options) VALUES
('123ABC', 150.00, 'Toyota', 5, 1, 1, 1, 1),
('456DEF', 180.00, 'Honda', 5, 2, 2, 2, 2),
('789GHI', 200.00, 'Ford', 7, 1, 3, 3, 3),
('101JKL', 160.00, 'Chevrolet', 5, 1, 1, 1, 4),
('202MNO', 190.00, 'BMW', 5, 2, 2, 2, 5),
('303PQR', 210.00, 'Mercedes', 7, 1, 3, 3, 1),
('404STU', 170.00, 'Audi', 5, 1, 1, 1, 2),
('505VWX', 200.00, 'Volkswagen', 5, 2, 2, 2, 3),
('606YZA', 180.00, 'Nissan', 7, 1, 3, 3, 4),
('707BCD', 190.00, 'Hyundai', 5, 1, 1, 1, 5);


-- facture 
INSERT INTO facture (date_debut, date_fin, police_assurance, id_assureur, id_vehicule) VALUES 
('2023-01-01', '2024-01-01', 'PA000001', 1, 4),
('2023-01-01', '2024-01-01', 'PA000001', 1, 2),
('2023-01-01', '2024-01-01', 'PA000001', 1, 3),
('2023-01-01', '2024-01-01', 'PA000001', 1, 3),
('2023-01-02', '2024-01-02', 'PA000002', 2, 2),
('2023-01-03', '2024-01-03', 'PA000003', 3, 3),
('2023-01-11', '2024-01-11', 'PA000011', 1, 1),
('2023-01-12', '2024-01-12', 'PA000012', 2, 2),
('2023-01-13', '2024-01-13', 'PA000013', 3, 3),
('2023-01-21', '2024-01-21', 'PA000021', 1, 1),
('2023-01-22', '2024-01-22', 'PA000022', 2, 2),
('2023-01-23', '2024-01-23', 'PA000023', 3, 3),
('2023-01-31', '2024-01-31', 'PA000031', 1, 1),
('2023-02-01', '2024-02-01', 'PA000032', 2, 2),
('2023-02-02', '2024-02-02', 'PA000033', 3, 3),
('2023-02-10', '2024-02-10', 'PA000041', 1, 1),
('2023-02-11', '2024-02-11', 'PA000042', 2, 2),
('2023-02-12', '2024-02-12', 'PA000043', 3, 3),
('2023-02-20', '2024-02-20', 'PA000051', 1, 1),
('2023-02-21', '2024-02-21', 'PA000052', 2, 2),
('2023-02-22', '2024-02-22', 'PA000053', 3, 3),
('2023-03-02', '2024-03-02', 'PA000061', 1, 1),
('2023-03-03', '2024-03-03', 'PA000062', 2, 2),
('2023-03-04', '2024-03-04', 'PA000063', 3, 3),
('2023-03-12', '2024-03-12', 'PA000071', 1, 1),
('2023-03-13', '2024-03-13', 'PA000072', 2, 2),
('2023-03-14', '2024-03-14', 'PA000073', 3, 3),
('2023-03-22', '2024-03-22', 'PA000081', 1, 1),
('2023-03-23', '2024-03-23', 'PA000082', 2, 2),
('2023-03-24', '2024-03-24', 'PA000083', 3, 3),
('2023-04-01', '2024-04-01', 'PA000091', 1, 1),
('2023-04-02', '2024-04-02', 'PA000092', 2, 2),
('2023-04-03', '2024-04-03', 'PA000093', 3, 3);

-- message
INSERT INTO message (id_envoyeur, id_receveur, message, moment, vue) VALUES
(1, 2, 'Salut, comment ça va ?', '2023-06-01 10:00:00', FALSE),
(2, 1, 'Ça va bien, merci. Et toi ?', '2023-06-01 10:05:00', TRUE),
(1, 3, 'Tu as vu le dernier film ?', '2023-06-01 11:00:00', FALSE),
(3, 1, 'Oui, il était génial !', '2023-06-01 11:15:00', TRUE),
(2, 3, 'Quoi de neuf ?', '2023-06-01 12:00:00', FALSE),
(3, 2, 'Pas grand-chose, et toi ?', '2023-06-01 12:10:00', TRUE),
(1, 2, 'On se voit ce week-end ?', '2023-06-02 09:00:00', FALSE),
(2, 1, 'Oui, avec plaisir !', '2023-06-02 09:05:00', TRUE),
(3, 1, 'Tu as des plans pour ce soir ?', '2023-06-02 18:00:00', FALSE),
(1, 3, 'Non, rien de prévu.', '2023-06-02 18:15:00', TRUE),
(2, 3, 'On pourrait sortir dîner.', '2023-06-02 19:00:00', FALSE),
(3, 2, 'Bonne idée, à quelle heure ?', '2023-06-02 19:10:00', TRUE),
(1, 2, 'Vers 20h ? Ça te va ?', '2023-06-02 19:30:00', FALSE),
(2, 1, 'Parfait, à ce soir.', '2023-06-02 19:35:00', TRUE),
(3, 1, 'Tu as reçu mon message ?', '2023-06-03 08:00:00', FALSE),
(1, 3, 'Oui, désolé pour le retard.', '2023-06-03 08:15:00', TRUE),
(2, 3, 'Pas de souci, à plus tard.', '2023-06-03 09:00:00', FALSE),
(3, 2, 'Ok, bonne journée.', '2023-06-03 09:10:00', TRUE),
(1, 2, 'On se revoit bientôt.', '2023-06-03 10:00:00', FALSE),
(2, 1, 'Oui, à très vite.', '2023-06-03 10:05:00', TRUE);

-- service
INSERT INTO service (nom) VALUES
('Service Client'),
('Maintenance Technique'),
('Support Informatique');

-- carburant
INSERT INTO carburant (nom, prix, id_assureur) VALUES
('Essence', 1.45, 1),
('Diesel', 1.30, 2),
('GPL', 0.75, 1),
('Electricité', 0.20, 3),
('Bioéthanol', 0.95, 2);

-- annee_fabrication
INSERT INTO annee_fabrication (debut, fin, prix, id_assureur) VALUES
(1990, 1995, 500.00, 1),
(1996, 2000, 600.00, 2),
(2001, 2005, 700.00, 3),
(2006, 2010, 800.00, 1),
(2011, 2015, 900.00, 2),
(2016, 2020, 1000.00, 3),
(2021, 2024, 1100.00, 1);

-- puissance
INSERT INTO puissance (prix_chevaux, id_assureur) VALUES
(120.00, 1),
(130.00, 2),
(140.00, 3),
(150.00, 1),
(160.00, 2),
(170.00, 3),
(180.00, 1),
(190.00, 2),
(200.00, 3),
(210.00, 1);

-- usage
INSERT INTO usage (nom, valeur, id_assureur) VALUES
('Personnel', 1500.00, 1),
('Professionnel', 2500.00, 2),
('Mixte', 2000.00, 3),
('Agricole', 1800.00, 1),
('Commercial', 3000.00, 2);

-- etat
INSERT INTO etat (libelle, valeur, id_assureur) VALUES
('Neuf', 20000.00, 1),
('Occasion', 15000.00, 2),
('Endommagé', 5000.00, 3);

-- payement
INSERT INTO payement (date_payement, valeur, frequence, id_vehicule, id_utilisateur) VALUES
('2023-01-15', 500.00, 1, 1, 1),
('2023-02-15', 500.00, 1, 1, 1),
('2023-03-15', 500.00, 1, 1, 1),
('2023-04-15', 500.00, 1, 1, 1),
('2023-05-15', 500.00, 1, 1, 1),
('2023-06-15', 500.00, 1, 1, 1),
('2023-07-15', 500.00, 1, 1, 1),
('2023-08-15', 500.00, 1, 1, 1),
('2023-09-15', 500.00, 1, 1, 1),
('2023-10-15', 500.00, 1, 1, 1),
('2023-11-15', 500.00, 1, 1, 1),
('2023-12-15', 500.00, 1, 1, 1),
('2024-01-15', 500.00, 1, 1, 1),
('2024-02-15', 500.00, 1, 1, 1),
('2024-03-15', 500.00, 1, 1, 1),
('2024-04-15', 500.00, 1, 1, 1),
('2024-05-15', 500.00, 1, 1, 1),
('2024-06-15', 500.00, 1, 1, 1),
('2024-07-15', 500.00, 1, 1, 1),
('2024-08-15', 500.00, 1, 1, 1),
('2024-09-15', 500.00, 1, 1, 1),
('2024-10-15', 500.00, 1, 1, 1),
('2024-11-15', 500.00, 1, 1, 1),
('2024-12-15', 500.00, 1, 1, 1),
('2025-01-15', 500.00, 1, 1, 1),
('2025-02-15', 500.00, 1, 1, 1),
('2025-03-15', 500.00, 1, 1, 1),
('2025-04-15', 500.00, 1, 1, 1),
('2025-05-15', 500.00, 1, 1, 1),
('2025-06-15', 500.00, 1, 1, 1),
('2025-07-15', 500.00, 1, 1, 1),
('2025-08-15', 500.00, 1, 1, 1),
('2025-09-15', 500.00, 1, 1, 1);
INSERT INTO payement (date_payement, valeur, frequence, id_vehicule, id_utilisateur) VALUES
('2023-01-15', 500.00, 1, 2, 1),
('2023-02-15', 500.00, 1, 2, 1),
('2023-03-15', 500.00, 1, 2, 1),
('2023-04-15', 500.00, 1, 2, 1),
('2023-05-15', 500.00, 1, 2, 1),
('2023-06-15', 500.00, 1, 2, 1),
('2023-07-15', 500.00, 1, 2, 1),
('2023-08-15', 500.00, 1, 2, 1),
('2023-09-15', 500.00, 1, 2, 1),
('2023-10-15', 500.00, 1, 2, 1),
('2023-11-15', 500.00, 1, 2, 1),
('2023-12-15', 500.00, 1, 2, 1),
('2024-01-15', 500.00, 1, 3, 1),
('2024-02-15', 500.00, 1, 3, 1),
('2024-03-15', 500.00, 1, 3, 1),
('2024-04-15', 500.00, 1, 3, 1),
('2024-05-15', 500.00, 1, 3, 1),
('2024-06-15', 500.00, 1, 3, 1),
('2024-07-15', 500.00, 1, 3, 1),
('2024-08-15', 500.00, 1, 3, 1),
('2024-09-15', 500.00, 1, 3, 1),
('2024-10-15', 500.00, 1, 3, 1),
('2024-11-15', 500.00, 1, 3, 1),
('2024-12-15', 500.00, 1, 3, 1),
('2025-01-15', 500.00, 1, 3, 1),
('2025-02-15', 500.00, 1, 3, 1),
('2025-03-15', 500.00, 1, 3, 1),
('2025-04-15', 500.00, 1, 3, 1),
('2025-05-15', 500.00, 1, 3, 1),
('2025-06-15', 500.00, 1, 3, 1),
('2025-07-15', 500.00, 1, 3, 1),
('2025-08-15', 500.00, 1, 3, 1),
('2025-09-15', 500.00, 1, 3, 1);
INSERT INTO payement (date_payement, valeur, frequence, id_vehicule, id_utilisateur) VALUES
('2023-01-15', 500.00, 1, 5, 1),
('2023-02-15', 500.00, 1, 5, 1),
('2023-03-15', 500.00, 1, 5, 1),
('2023-04-15', 500.00, 1, 5, 1),
('2023-05-15', 500.00, 1, 5, 1),
('2023-06-15', 500.00, 1, 5, 1),
('2023-07-15', 500.00, 1, 5, 1),
('2023-08-15', 500.00, 1, 5, 1),
('2023-09-15', 500.00, 1, 5, 1),
('2023-10-15', 500.00, 1, 5, 1),
('2023-11-15', 500.00, 1, 5, 1),
('2023-12-15', 500.00, 1, 5, 1),
('2024-01-15', 500.00, 1, 5, 1),
('2024-02-15', 500.00, 1, 5, 1),
('2024-03-15', 500.00, 1, 5, 1),
('2024-04-15', 500.00, 1, 6, 1),
('2024-05-15', 500.00, 1, 6, 1),
('2024-06-15', 500.00, 1, 6, 1),
('2024-07-15', 500.00, 1, 6, 1),
('2024-08-15', 500.00, 1, 6, 1),
('2024-09-15', 500.00, 1, 6, 1),
('2024-10-15', 500.00, 1, 6, 1),
('2024-11-15', 500.00, 1, 6, 1),
('2024-12-15', 500.00, 1, 6, 1),
('2025-01-15', 500.00, 1, 6, 1),
('2025-02-15', 500.00, 1, 6, 1),
('2025-03-15', 500.00, 1, 6, 1),
('2025-04-15', 500.00, 1, 6, 1),
('2025-05-15', 500.00, 1, 6, 1),
('2025-06-15', 500.00, 1, 6, 1),
('2025-07-15', 500.00, 1, 6, 1),
('2025-08-15', 500.00, 1, 6, 1),
('2025-09-15', 500.00, 1, 6, 1);
INSERT INTO payement (date_payement, valeur, frequence, id_vehicule, id_utilisateur) VALUES
('2023-01-01', 500.00, 1, 5, 1),
('2023-01-16', 500.00, 1, 5, 1),
('2023-01-18', 500.00, 1, 5, 1),
('2023-01-12', 500.00, 1, 5, 1),
('2023-01-05', 500.00, 1, 5, 1),
('2023-01-26', 500.00, 1, 5, 1);