<<<<<<< HEAD
#recherche les immatriculation rattaché à paris cdg
SELECT avion.numéro_Immat FROM `avion` WHERE AéroportAttachement = "paris cdg";
SELECT type_avion.id_type and type_avion.capacité FROM `type_avion` WHERE rayon_action >= 10000 and capacité > 450;
SELECT pilote.nom , pilote.salaire FROM `pilote` WHERE pilote.adresse LIKE '%Marseille%' or pilote.adresse LIKE '%Bordeaux%';
SELECT * FROM `vol` WHERE vol.pilote = 156798 or vol.pilote = 879656 or  vol.pilote = 907856; #SELECT * FROM `vol` WHERE vol.pilote IN (156798, 879656, 907856);

SELECT * FROM `test` WHERE test.état = 'validé' and date BETWEEN "2019-01-15" and "2019-03-15"  ORDER BY test.nom ASC;
SELECT technicien.nom, technicien.adresse, technicien.salaire FROM `technicien` WHERE technicien.nom != "Dupont Albert" AND technicien.adresse LIKE "%Paris%" ORDER BY technicien.salaire DESC;
SELECT matriculeTech FROM expertise WHERE date_fin > CURRENT_DATE() and (immat_Avion = "FR-1239898PO" OR immat_Avion = "FR-1299867NI");
SELECT date_vol, heure_départ, heure_arrivée FROM `vol` WHERE nbre_places > 400 AND pilote = "909656" ORDER BY date_vol ASC, nbre_places DESC
SELECT matriculeTech FROM `expertise` WHERE immat_Avion in("FR-1239898PO", "FR-1299867NI") AND DATEDIFF(date_fin, date_début) > (2*365);
=======
#recherche les immatriculation rattaché à paris cdg
SELECT avion.numéro_Immat FROM `avion` WHERE AéroportAttachement = "paris cdg";
SELECT type_avion.id_type and type_avion.capacité FROM `type_avion` WHERE rayon_action >= 10000 and capacité > 450;
SELECT pilote.nom , pilote.salaire FROM `pilote` WHERE pilote.adresse LIKE '%Marseille%' or pilote.adresse LIKE '%Bordeaux%';
SELECT * FROM `vol` WHERE vol.pilote = 156798 or vol.pilote = 879656 or  vol.pilote = 907856; #SELECT * FROM `vol` WHERE vol.pilote IN (156798, 879656, 907856);

SELECT * FROM `test` WHERE test.état = 'validé' and date BETWEEN "2019-01-15" and "2019-03-15"  ORDER BY test.nom ASC;
SELECT technicien.nom, technicien.adresse, technicien.salaire FROM `technicien` WHERE technicien.nom != "Dupont Albert" AND technicien.adresse LIKE "%Paris%" ORDER BY technicien.salaire DESC;
SELECT matriculeTech FROM expertise WHERE date_fin > CURRENT_DATE() and (immat_Avion = "FR-1239898PO" OR immat_Avion = "FR-1299867NI");
SELECT date_vol, heure_départ, heure_arrivée FROM `vol` WHERE nbre_places > 400 AND pilote = "909656" ORDER BY date_vol ASC, nbre_places DESC
SELECT matriculeTech FROM `expertise` WHERE immat_Avion in("FR-1239898PO", "FR-1299867NI") AND DATEDIFF(date_fin, date_début) > (2*365);
>>>>>>> 6bdce4e2437fa28d4da2a35bdceb106471a91a24
SELECT pilote, date_vol, TIMEDIFF(heure_arrivée, heure_départ) as durée FROM `vol` WHERE nbre_places > 300 AND HOUR(TIMEDIFF(heure_arrivée, heure_départ)) > 5 ORDER BY date_vol DESC, HOUR(durée) DESC;