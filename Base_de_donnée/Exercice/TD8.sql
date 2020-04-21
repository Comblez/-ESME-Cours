######## TD8 : Base Aerienne ########

# Question 1 : 1 pilote peut faire plusieurs fois le meme trajet
SELECT DISTINCT v.pilote, li.ville_départ, li.ville_arrivée FROM liaison li JOIN vol v ON li.numLiaison = v.numLiaison WHERE v.date_vol > '2019-10-01' AND v.date_vol < '2019-10-31' ;
# Question 2 : J'ai mis %Bourgeois% car le prenom peut etre avant ou apres même si je sais que s'il y a plusieurs bourgeois ça va faire n'importe quoi
SELECT v.date_vol FROM vol v JOIN pilote p ON v.pilote = p.matricule WHERE p.nom LIKE '%Bourgeois%'
# Question 3 : la liaision 3 fait aussi des voyages avec 350 et400 passager (380)
SELECT DISTINCT v.numLiaison FROM vol v WHERE v.nbre_places BETWEEN '350' AND '400'
# Question 4 : 
SELECT v.date_vol, v.heure_départ FROM vol v JOIN liaison li ON v.numLiaison = li.numLiaison WHERE v.heure_départ > "18:00:00" AND li.ville_départ = "Nice" AND li.ville_arrivée = "Paris"
# Question 5 : 
SELECT DISTINCT p.nom, p.adresse FROM pilote p WHERE p.matricule NOT IN (SELECT DISTINCT v.pilote FROM vol v JOIN liaison l ON l.numLiaison = v.numLiaison WHERE l.ville_départ = "Paris");
# Question 6 :
SELECT DISTINCT v.date_vol, v.heure_départ, l.ville_arrivée FROM liaison l JOIN vol v ON (v.numLiaison = l.numLiaison) WHERE l.ville_départ = 'paris' AND v.date_vol BETWEEN "2019-08-01" AND "2019-09-30" ORDER BY TIMEDIFF(v.heure_arrivée, v.heure_départ) DESC
# Question 7 :
SELECT DISTINCT a.numéro_Immat FROM avion a JOIN type_avion ta ON (a.typeAvion = ta.id_type) WHERE a.AéroportAttachement = "Nice" OR ta.capacité < 350
# Question 8 :
SELECT DISTINCT p.nom, MAX(p.salaire) FROM pilote p
# Question 9 :
SELECT p.matricule, p.nom FROM pilote p WHERE NOT EXISTS(SELECT v.pilote FROM vol v WHERE v.pilote = p.matricule)
# Question 10 :
SELECT t.nom, t.salaire FROM technicien t WHERE NOT EXISTS ( SELECT e.matriculeTech FROM expertise e JOIN avion a ON (a.numéro_Immat = e.immat_Avion) WHERE a.typeAvion = 3 AND e.matriculeTech = t.matricule)
# Question 11 :
SELECT DISTINCT p.adresse,p.nom FROM pilote p INNER JOIN liaison l INNER JOIN vol v ON (l.numLiaison=v.numLiaison AND v.pilote=p.matricule) WHERE l.ville_arrivée = "Tokyo" ORDER BY p.salaire ASC
# Question 12 :
