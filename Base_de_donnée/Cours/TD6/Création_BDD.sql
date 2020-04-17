#######################################################
###		Création de la BDD "compagnie_aérienne"	    ###
#######################################################

# creation de la BDD
drop database if exists CompagnieAerienne ; 
create database if not exists CompagnieAerienne; 
use CompagnieAerienne; 

# creation de la table TYPE_AVION 
create table if not exists TYPE_AVION (
id_type int primary key auto_increment,
nom_type varchar(20) unique not null, 
poids int, 
capacité int, 
rayon_action int 
 ); 

# creation de la table AVION 
create table if not exists AVION (
numéro_Immat varchar(20) primary key,
AéroportAttachement varchar(20),
typeAvion int,
Foreign key(typeAvion) references TYPE_AVION(id_type)
); 

# creation table TEST
create table if not exists TEST (
num_test int primary key auto_increment,
nom varchar(20) not null,
date Date, 
état varchar(20), 
Immat_Avion varchar(20), 
Foreign key(Immat_Avion) references AVION(numéro_Immat)
); 

# creation table TECHNICIEN
create table if not exists TECHNICIEN (
matricule varchar(15) primary key,
nom varchar(30),
adresse varchar(40),
email varchar (20) unique not null, 
salaire REAL CHECK (salaire BETWEEN 2000 and 4500) 
); 

# creation table PILOTE 
create table if not exists PILOTE (
matricule varchar(15) primary key,
nom varchar(30),
adresse varchar(40),
salaire REAL, 
examen_médical date, 
N°Licence varchar(20) unique not null, 
email varchar(20) unique not null, 
téléphone varchar(10) not null
); 

# Creation table LIAISON 
create table if not exists LIAISON (
numLiaison int primary key auto_increment,
ville_départ varchar(20),
ville_arrivée varchar(20)
); 

# Creation table EXPERTISE 
create table if not exists EXPERTISE (
immat_Avion varchar(20),
matriculeTech varchar(15),
date_début Date not null,
date_fin Date not null,
primary key(immat_Avion, matriculeTech),
foreign key(immat_Avion) references AVION(numéro_Immat), 
foreign key(matriculeTech) references TECHNICIEN(matricule)
); 

# Creation table VOL 
create table if not exists VOL (
numLiaison int,
date_vol Date, 
heure_départ Time not null, 
heure_arrivée Time not null, 
nbre_places int,
avion varchar(20), 
pilote varchar(15), 
primary key(numLiaison, date_vol),
foreign key(numLiaison) references LIAISON(numLiaison), 
foreign key(avion) references AVION(numéro_Immat), 
foreign key(pilote) references PILOTE(matricule)
);

##############################################################################

ALTER TABLE technicien ADD telephone varchar(10) NOT null AFTER salaire;
ALTER TABLE pilote ADD CONSTRAINT cont_salaire CHECK ((salaire > 5000 AND salaire < 15000));
ALTER TABLE pilote MODIFY COLUMN pilote.examen_médical date NOT null;

//Type_avion
INSERT INTO type_avion(`id_type`, `nom_type`, `poids`, `capacité`, `rayon_action`) VALUES ( 'A380', '560', '525', '15400');
INSERT INTO type_avion(`id_type`, `nom_type`, `poids`, `capacité`, `rayon_action`) VALUES ( 'A320', '75', '150', '7500');
INSERT INTO type_avion(`id_type`, `nom_type`, `poids`, `capacité`, `rayon_action`) VALUES ( 'B747', '330', '400', '15400');

//pilote
INSERT INTO pilote(matricule, nom, adresse, salaire, examen_médical, N°Licence, email, téléphone) VALUES ('15378','KELLER JOHAN','Avenue de versailles, 75016 Paris','8800','2019-07-30','FRA-PL456412','Keller_joh@gmail.com','0611658801');
INSERT INTO pilote(matricule, nom, adresse, salaire, examen_médical, N°Licence, email, téléphone) VALUES ('878636','DUPONT JOE','Rue GARDON,06300 NICE','6900','2019-03-15','FRA-Pc486312','Dupont.joe@gmail.com','0678932498');
INSERT INTO pilote(matricule, nom, adresse, salaire, examen_médical, N°Licence, email, téléphone) VALUES ('703296','MAESO MARTIN','BOULEVARD VOLTAIRE,75003 PARIS','10600','2019-11-26','FRA-PA998516','MAESOMar12@gmail.com','0670453718');

//avion
INSERT INTO avion(`numéro_Immat`, `AéroportAttachement`, `typeAvion`)VALUES ('FR-1324597PG','Paris CDG','1');
INSERT INTO avion(`numéro_Immat`, `AéroportAttachement`, `typeAvion`)VALUES ('FR-5871629NI','Nice','2');
INSERT INTO avion(`numéro_Immat`, `AéroportAttachement`, `typeAvion`)VALUES ('FR-9293725PO','Paris ORLY','3');
INSERT INTO avion(`numéro_Immat`, `AéroportAttachement`, `typeAvion`)VALUES ('FR-4213896BO','Bordeaux','1')


//Modifications
UPDATE pilote SET salaire = 7500 WHERE pilote.
UPDATE avion SET AéroportAttachement = "Bordeaux" WHERE avion.numéro_Immat = "FR-9293725PO";


//Test commande
SELECT * FROM `pilote` WHERE pilote.salaire > 8000;