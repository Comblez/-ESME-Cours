CREATE TABLE IF NOT EXISTS type(
    id_type INT(10) AUTO_INCREMENT,
    nom_type varchar(25),
    poids INT(10),
    capacite int(20),
    rayonaction int(20),
    PRIMARY KEY(id_type)
);

CREATE TABLE IF NOT EXISTS Avion(
    num_imatriculation int AUTO_INCREMENT PRIMARY KEY,
    localisation varchar(20),
    id_type int,
    FOREIGN KEY (id_type) REFERENCES type (id_type)
);

CREATE TABLE IF NOT EXISTS Test(
    num_test int PRIMARY KEY AUTO_INCREMENT,
    nom_test varchar(25),
    seuil float,
    num_imatriculation int ,
    date_test date,
    etat varchar(20),
    FOREIGN KEY (num_imatriculation) REFERENCES avion(num_imatriculation)
);

CREATE TABLE  IF NOT EXISTS Technicien(
    num_technicien int AUTO_INCREMENT PRIMARY KEY,
    nom varchar(20),
    adresse_tech varchar(20),
    salaire float
);

CREATE TABLE IF NOT EXISTS Liaison(
    num_liaison int PRIMARY KEY AUTO_INCREMENT,
    ville_depart varchar(20),
    ville_arrivee varchar(20)
);

CREATE TABLE IF NOT EXISTS Pilote(
    matricule int PRIMARY KEY AUTO_INCREMENT,
    nom_pilote varchar(20),
    adresse_pilote varchar(20),
    salaire float,
    exam_medical date,
    num_licence int
);

CREATE TABLE IF NOT EXISTS Expertise(
    num_imatriculation int,
    matricule_pilote int,
    date_debut date,
    date_fin date,
    PRIMARY KEY (num_imatriculation, matricule_pilote),
    FOREIGN KEY (num_imatriculation) REFERENCES avion(num_imatriculation),
    FOREIGN KEY (matricule_technicien) REFERENCES technicien(num_technicien)
);

CREATE TABLE IF NOT EXISTS Vol(
    Date_Vol DATE PRIMARY KEY,
    N_liaison INT,
    FOREIGN KEY (N_liaison) REFERENCES Liaison(N_liaison),
    heure_depart TIME,
    heure_arrivee TIME,
    nbr_places INT,
    matricule_pilote INT,
    num_imatriculation INT,
    FOREIGN KEY (matricule_pilote) REFERENCES pilote(matricule),
    FOREIGN KEY (num_imatriculation) REFERENCES avion(num_imatriculation)
 );