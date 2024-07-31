DROP TABLE IF EXISTS passager;
DROP TABLE IF EXISTS trajet;
DROP TABLE IF EXISTS utilisateur;


CREATE TABLE utilisateur (
     login VARCHAR(32),
     nom VARCHAR(32) NOT NULL,
     prenom VARCHAR(32) NOT NULL,
     CONSTRAINT utilisateur_pk PRIMARY KEY (login)
);

CREATE TABLE trajet (
    id INT AUTO_INCREMENT,
    depart VARCHAR(32) NOT NULL,
    arrivee VARCHAR(32) NOT NULL,
    date DATE NOT NULL,
    nbPlaces INT NOT NULL,
    prix INT NOT NULL,
    conducteurLogin VARCHAR(32) NOT NULL,
    CONSTRAINT trajet_pk PRIMARY KEY (id),
    CONSTRAINT trajet_conducteur_fk FOREIGN KEY (conducteurLogin) REFERENCES utilisateur(login) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT trajet_nbPlacesNonNegatif CHECK (nbPlaces >= 0),
    CONSTRAINT trajet_prixNonNegatif CHECK (prix >= 0)
);

CREATE TABLE passager (
    trajetId INT,
    passagerId VARCHAR(32),
    CONSTRAINT passager_pk PRIMARY KEY (trajetId, passagerId),
    CONSTRAINT passager_trajetId_fk FOREIGN KEY (trajetId) REFERENCES trajet(id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT passager_passagerId_fk FOREIGN KEY (passagerId) REFERENCES utilisateur(login) ON DELETE CASCADE ON UPDATE CASCADE
);


INSERT INTO utilisateur VALUES ('u1', 'Dupont', 'Pierre');
INSERT INTO utilisateur VALUES ('u2', 'Bigard', 'Jean-Marie');
INSERT INTO utilisateur VALUES ('u3', 'Niel', 'Xavier');

INSERT INTO trajet (depart, arrivee, date, nbPlaces, prix, conducteurLogin)
    VALUES ('Narbonne', 'Montpellier', '2024-08-01', 130, 10, 'u1');
INSERT INTO trajet (depart, arrivee, date, nbPlaces, prix, conducteurLogin)
    VALUES ('Paris', 'Toulouse', '2024-08-12', 570, 450, 'u2');
INSERT INTO trajet (depart, arrivee, date, nbPlaces, prix, conducteurLogin)
    VALUES ('Lille', 'Rennes', '2024-08-09', 210, 80, 'u3');

INSERT INTO passager VALUES ('1', 'u2');
INSERT INTO passager VALUES ('1', 'u3');
INSERT INTO passager VALUES ('2', 'u1');
INSERT INTO passager VALUES ('3', 'u1');
INSERT INTO passager VALUES ('3', 'u2');