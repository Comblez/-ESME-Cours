
SELECT chambre.NumChambre , chambre.NumHotel FROM `chambre` WHERE chambre.NumChambre NOT IN ( SELECT reservation.NumChambre FROM `reservation`  );