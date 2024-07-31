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
    CONSTRAINT trajet_conducteur_fk FOREIGN KEY (conducteurLogin) REFERENCES utilisateur(login),
    CONSTRAINT nbPlacesNonNegatif CHECK (nbPlaces >= 0),
    CONSTRAINT prixNonNegatif CHECK (prix >= 0)
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