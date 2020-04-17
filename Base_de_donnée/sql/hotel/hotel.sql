SELECT chambre.NumChambre , chambre.NumHotel FROM `chambre` WHERE chambre.NumChambre NOT IN ( SELECT reservation.NumChambre FROM `reservation`);
INSERT INTO `reservation` (`NumReservation`, `Date_Reservation`, `Date_Arrivee`, `Date_Depart`, `NumChambre`, `NumClient`) VALUES ('12', '2020-03-12', '2020-03-20', '2020-03-22', '34', '145787'); 
SELECT chambre.NumChambre, chambre.Tarif, chambre.vue FROM chambre WHERE chambre.NumChambre IN ( SELECT reservation.NumChambre FROM reservation WHERE reservation.Date_Arrivee > "2017-01-01" AND reservation.NumClient = 145787);
SELECT NomH, NumHotel FROM `hotel` WHERE NumHotel IN ( SELECT chambre.NumHotel FROM chambre WHERE chambre.Nbre_Lits >= 2 AND chambre.Tarif >= ALL( SELECT chambre.Tarif FROM chambre));
SELECT h.NomH, c.NumChambre FROM chambre c JOIN   hotel h ON c.NumHotel = h.NumHotel;
SELECT h.NomH, c.NumChambre FROM chambre c JOIN   hotel h ON c.NumHotel = h.NumHotel WHERE ( c.NumChambre NOT IN( SELECT reservation.NumChambre FROM reservation));
SELECT cl.Nom, cl.Adresse FROM client cl JOIN reservation r ON cl.Id_Client = r.NumClient JOIN chambre ch ON ch.NumChambre = r.NumChambre;
SELECT cl.Nom, cl.Adresse FROM client cl JOIN reservation r on cl.Id_client = r.NumClient JOIN chambre ch on ch.Numchambre = r.NumChambre WHERE DATEDIFF(Date_Arrivee, Date_Depart) > 3 AND ch.Vue LIKE '%mer%';